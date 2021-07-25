<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('Users');

		for ($i = 0; $i < 100; $i++) {
			$model->insert([
				'name' => static::faker()->name,
				'email' => static::faker()->email,
				'city' => static::faker()->city
			]);
		}

		
	}
}
