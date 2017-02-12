<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('contacts')->insert([
          'first_name' =>'Stephen',
          'last_name' =>'Allman',
          'company' => 'Miller Electric',
          'role' => 'APM',
          'phone_number' => '972-523-8035',
          'email' => 'sallman@mecojax.com',
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         ]);

          DB::table('contacts')->insert([
          'first_name' =>'Phong',
          'last_name' =>'Duong',
          'company' => 'Bank of America',
          'role' => 'PM',
          'phone_number' => '469-501-5003',
          'email' => 'phong.duong@bankofamerica.com',
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         ]);
      
      	DB::table('contacts')->insert([
          'first_name' =>'Christopher',
          'last_name' =>'James',
          'company' => 'Bank of America',
          'role' => 'APjM',
          'phone_number' => '469-201-9142',
          'email' => 'christopher.t.james@bankofamerica.com',
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         ]);
    }
}
