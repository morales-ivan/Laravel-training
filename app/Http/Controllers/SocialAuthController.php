<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use App\SocialProfile;

class SocialAuthController extends Controller
{
    public function facebook() {
		return Socialite::driver('facebook')->redirect();
	}

	public function callback() {
		$facebookData = Socialite::driver('facebook')->user();

		$existing = User::whereHas('socialProfiles', function ($query) use ($facebookData) {
			$query->where('social_id', $facebookData->id);
		})->first();

		if ($existing != NULL) {
			auth()->login($existing);

			return redirect('/');
		}

		session()->flash('facebookUser', $user);

		return view('auth.social.facebook', [
			'user' => $user
		]);
	}

	public function register(Request $request) {
		$facebookData = session('facebookUser');
		$username = $request->input('username');

		$user = User::create([
			'name' => $facebookData->name,
			'email' => $facebookData->email,
			'avatar' => $facebookData->avatar,
			'username' => $username,
			'password' => str_random(16),
		]);

		$profile = SocialProfile::create([
			'social_id' => $facebookData->id,
			'user_id' => $user->id,
		]);

		auth()->login($user);

		return redirect('/');
	}
}
