<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       User::create([
                "firstName"=>"Amal",
                "lastName"=>"Al halabi",
                "email"=>"amal2017abbas@gmail.com",
                "password"=>Hash::make("123123"),
                "isMale"=>1,
                "summary"=>"Consultant in speech pathology and learning difficulties at the Institute of Hearing and Speech",
            "certification"=>"A speech and language pathologist",
            "address"=>"Riyadh",
            "phone"=>"0996655444",
            "role"=>"expert"
            ]);

    }
}
