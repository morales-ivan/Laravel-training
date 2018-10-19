<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

const LINKS = [
	'https://www.linkedin.com/in/moralesivan' => 'LinkedIn',
	'https://www.github.com/ivi982010' => 'GitHub',
	'/about' => 'Acerca de mi!'
];

class ControladorPaginas extends Controller
{
	public function home() {

		$photos = Photo::Paginate(6);

        return view('welcome', [
            'links' => LINKS,
			'photos' => $photos,
        ]);
    }

    public function about() {

		return view('about', [
			'links' => LINKS,
		]);
    }

    public function prueba() {
        return view('prueba');
    }
}
