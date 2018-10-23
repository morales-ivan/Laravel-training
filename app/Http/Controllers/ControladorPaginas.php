<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

const LINKS = [
	[
		'https://www.linkedin.com/in/moralesivan',
		'LinkedIn',
		'_blank'
	],
	[
		'https://www.github.com/morales-ivan',
		'GitHub',
		'_blank'
	],
	[
		'/prueba',
		'Prueba',
		''
	],
	[
		'/about',
		'Acerca de mi!',
		''
	]
];

// const LINKS = [
// 	'https://www.linkedin.com/in/moralesivan' => 'LinkedIn',
// 	'https://www.github.com/ivi982010' => 'GitHub',
// 	'/prueba' => 'Prueba',
// 	'/about' => 'Acerca de mi!'
// ]

class ControladorPaginas extends Controller
{
	public function home() {

		$photos = Photo::latest()->Paginate(12);

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

        return view('prueba', [
			'links' => LINKS,
		]);
    }
}
