<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'              => "Vasili Yurevich",
            'email'             => "vasyayurevich@gmail.com",
            'email_verified_at' => Carbon::now(), // Use Carbon to get the current timestamp
            'password'          => Hash::make('Snoopl200!'),
        ]);
    }
}
