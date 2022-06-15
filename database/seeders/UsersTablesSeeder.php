<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
use Str;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // User::create([
        //     "name"      =>  "John",
        //     "email"     =>  "john@example.com",
        //     "password"  =>  \Hash::make('password'),
        //     "remember_token"=> uniqid('user_')
        // ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => \Hash::make('password'),
            "remember_token"=> uniqid('user_')
        ]);
    }
}
