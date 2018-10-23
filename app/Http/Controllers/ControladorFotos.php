<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePhotoRequest;
use App\Photo;
use Illuminate\Http\Request;

class ControladorFotos extends Controller
{
    public function show(Photo $photo) {

		// $photo = Photo::find($id);

		return view('photos.show', [
			'photo' => $photo
		]);
	}

	public function create(CreatePhotoRequest $request) {

		$user = $request->user();

		$photo = Photo::create([
			'user_id' => $user->id,
			'text' => $request->input('description'),
			'image' => 'https://lorempixel.com/1920/1080/transport/?'.random_int(0, 1000)
		]);

		return view('photos.show', [
			'photo' => $photo
		]);
	}
}
