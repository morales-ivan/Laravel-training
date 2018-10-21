<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		factory(App\User::class)
			->times(9)
			->create();
		factory(App\Photo::class)
			->times(25)
			->create();

		// Otra forma de hacer seeding, pero no me gusta porque para cada usuario crea la misma cantidad de fotos
		//
		// factory(App\User::class, 10)->create()->each(function (App\User $user) {
		// 	factory(App\Photo::class)
		// 		->times(16)
		// 		->create([
		// 			'user_id' => $user->id // Aca cuidado porque mi create ya produce un user_id al azar de los dispoibles (kind of)
		// 		]);
		// });
    }
}
