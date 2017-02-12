<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('users')->insert([
        'name' =>'Stephen Allman',
        'email' => 'sallman@mecojax.com',
        'password' => 'jweod8sss',
        'remember_token' => str_random(100),
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         ]);
      
        DB::table('users')->insert([
	    	'name' =>'Phong Duong',
	    	'email' => 'phong.duong@bankofamerica.com',
	    	'password' => 'afjweod8ss',
	    	'remember_token' => str_random(100),
	    	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    	 ]);

        DB::table('users')->insert([
            'name' =>'Christopher James',
            'email' => 'Christopher.T.James@bankofamerica.com',
            'password' => 'ljzoaljo28',
            'remember_token' => str_random(100),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             ]);
        DB::table('users')->insert([
            'name' =>'Craig Fritts',
            'email' => 'craig.fritts@bankofamerica.com',
            'password' => 'niwadhras87',
            'remember_token' => str_random(100),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             ]);

        DB::table('users')->insert([
            'name' =>'David Byrd',
            'email' => 'dbyrd@mecojax.com',
            'password' => 'dfnwixs88',
            'remember_token' => str_random(100),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             ]);

        DB::table('users')->insert([
            'name' =>'Kevin Hebert',
            'email' => 'khebert@mecojax.com',
            'password' => '3jsalj3nsq',
            'remember_token' => str_random(100),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             ]);

        DB::table('users')->insert([
            'name' =>'Donnie Smith',
            'email' => 'dsmith@mecojax.com',
            'password' => '4afjwiasai',
            'remember_token' => str_random(100),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             ]);

         DB::table('users')->insert([
            'name' =>'Jay Martin',
            'email' => 'jmartin@mecojax.com',
            'password' => '8faldsrwsgs',
            'remember_token' => str_random(100),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             ]);

          DB::table('users')->insert([
            'name' =>'Rochelle Price',
            'email' => 'rprice@mecojax.com',
            'password' => '4afjwide42ss',
            'remember_token' => str_random(100),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             ]);

          DB::table('users')->insert([
            'name' =>'Donald Love',
            'email' => 'donald.love@am.jll.com',
            'password' => '4afjwiad42ss',
            'remember_token' => str_random(100),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             ]);

           DB::table('users')->insert([
            'name' =>'Stephen Bedford',
            'email' => 'stephen.bedford@am.jll.com',
            'password' => 'fkdslafjwss2',
            'remember_token' => str_random(100),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             ]);



    }
}

