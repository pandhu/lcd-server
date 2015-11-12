<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

	public function run()
	{
	    DB::table('users')->delete();

	    $user = new User(array(
	        'username'     => 'bemfasilkomui',
	        'password' => Hash::make('ayojadikaya'),
	        'nama'    => 'BEM Fasilkom UI 2015',
	        'role' => 'manager',
	    ));

	    $user->timestamps = false;
        $user->save();
	}

}