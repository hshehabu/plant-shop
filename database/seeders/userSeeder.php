<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name'=>'jarmiicom',
            'email'=>'jarmiicom@yahoo.com',
            'username'=>'jarmiicom',
            'role'=>'admin',
            'status'=>'1',
            'password'=>Hash::make("G4mM8yY2lX9uP5s")
        ]);
    }
}
