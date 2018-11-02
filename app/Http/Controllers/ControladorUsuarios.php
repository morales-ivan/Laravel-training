<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Conversation;
use App\PrivateMessage;

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

		return redirect("/profile/$username")->withSuccess('Usuario followed con exito');
	}

	public function unfollow($username, Request $request) {
		$user = $this->findByUsername($username);

		$me = $request->user();

		$me->following()->detach($user);

		return redirect("/profile/$username")->withSuccess('Usuario unfollowed con exito');
	}

	public function following($username) {
		$user = $this->findByUsername($username);

		return view('users.following', [
			'user' => $user
		]);
	}

	public function followers($username) {
		$user = $this->findByUsername($username);

		return view('users.followers', [
			'user' => $user
		]);
	}

	private function findByUsername($username) {
		return User::where('username', $username)->first();
	}

	public function sendPrivateMessage($username, Request $request) {
		$user = $this->findByUsername($username);
		$me = $request->user();
		$message = $request->input('message');

		$conversation = Conversation::between($me, $user);

		$privateMessage = PrivateMessage::create([
			'conversation_id' => $conversation->id,
			'user_id' => $me->id,
			'message' => $message
		]);

		return redirect('/conversations/'.$conversation->id);
	}

	public function showConversation($username, Request $request) {
		$user = $this->findByUsername($username);
		$me = $request->user();
		// Puede que tenga que hacer auth::user()
		// Bueno, quizas no..

		$conversation = Conversation::between($me, $user);

		$conversation->load('users', 'privateMessages');

		return view('users.conversation', [
			'conversation' => $conversation,
			'me' => auth()->user(),
			'user' => $user,
		]);
	}
}
