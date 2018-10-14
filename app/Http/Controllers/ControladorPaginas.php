<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPaginas extends Controller
{
    public function home() {
        $links = [
            'https://www.linkedin.com/in/moralesivan' => 'LinkedIn',
            'https://www.github.com/ivi982010' => 'GitHub',
            '/about' => 'Acerca de mi!'
        ];

		$photos = [
			[
				'id' => 1,
				'image' => '{{ asset(RallyArrecifes01.jpg)}}',
				'text' => 'Descripcion 1',
			],
			[
				'id' => 2,
				'image' => '{{ asset(RallyArrecifes01.jpg)}}',
				'text' => 'Descripcion 2',
			],
			[
				'id' => 3,
				'image' => '{{ asset(RallyArrecifes01.jpg)}}',
				'text' => 'Descripcion 3',
			],
			[
				'id' => 4,
				'image' => '{{ asset(RallyArrecifes01.jpg)}}',
				'text' => 'Descripcion 4',
			]
		];

        return view('welcome', [
            'links' => $links,
        ]);
    }

    public function about() {
		$links = [
            'https://www.linkedin.com/in/moralesivan' => 'LinkedIn',
            'https://www.github.com/morales-ivan' => 'GitHub',
            '/about' => 'Acerca de mi!'
        ];
        return view('about', [
			'links' => $links,
		]);
    }

    public function prueba() {
        return view('prueba');
    }
}
