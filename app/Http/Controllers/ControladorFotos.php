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
			'text' => $request->input('description'),
			'image' => 'https://lorempixel.com/1920/1080/transport/?'.mt_rand(0, 1000)
		]);

		return view('photos.show', [
			'photo' => $photo
		]);
	}
}
