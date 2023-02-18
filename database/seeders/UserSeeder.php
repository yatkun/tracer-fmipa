<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('users')->insert([
    			'namalengkap' => $faker->name,
    			'username' => $faker->username,
    			'password' => $faker->password,
    			'prodi' => $faker->randomElement($array = array ('Statistika','Matematika')),
    			'tahunlulus' => $faker->numberBetween($min = 2018, $max = 2022) 
    		]);
 
    	}
    }
}
