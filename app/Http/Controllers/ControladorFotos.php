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

		$photo = Photo::create([
			'text' => $request->input('description'),
			'image' => 'RallyArrecifes01.jpg'
		]);

		return view('photos.show', [
			'photo' => $photo
		]);
	}
}
