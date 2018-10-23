<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ControladorUsuarios extends Controller
{
    public function show($username) {
		$user = $this->findByUsername($username);

		return view('users.photos', [
			'user' => $user
		]);
	}

	public function follow($username, Request $request) {
		$user = $this->findByUsername($username);

		$me = $request->user();

		$me->following()->attach($user);

		return redirect("/profile/$username")->withSuccess('Usuario seguido con exito');
	}

	public function following($username) {
		$user = $this->findByUsername($username);

		return view('users.following', [
			'user' => $user
		]);
	}

	private function findByUsername($username) {
		return User::where('username', $username)->first();
	}
}
