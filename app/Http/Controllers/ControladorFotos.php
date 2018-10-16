<?php

namespace App\Http\Controllers;

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
}
