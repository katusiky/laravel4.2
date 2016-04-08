<?php 

	class UserTableSeeder extends Seeder{


		public function run()
		{
			DB::table('users')->delete();

			User::create(array(
				'name' => 'Jose',
				'last_name' => 'De Leon',
				'email' => 'josedeleon.ka@gmail.com',
				'phone' => '4141600534',
				'address' => 'catai',
				'username' => 'katusiky',
				'level' => 0,
				'password' => Hash::make('123')
				));

			User::create(array(
				'name' => 'Alberto',
				'last_name' => 'Barrios',
				'email' => 'jdeleon@comware.com',
				'phone' => '04141600534',
				'address' => 'Venezuela',
				'username' => 'jdeleon',
				'level' => 1,
				'password' => Hash::make('abc')
				));
		}
	}

 ?>