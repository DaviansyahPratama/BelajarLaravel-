<?php

namespace Database\Seeders;
<<<<<<< HEAD

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
=======
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
>>>>>>> 28946deca3e8bfed5da7a9e253d22915809fb3db

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
<<<<<<< HEAD
            'name' => 'Admin',
            'email' => 'gatot@pcr.ac.id',
            'password' => Hash::make('gatotkaca')
=======
            'name'=> 'Admin',
            'email'=> 'isabella@pcr.ac.id',
            'password'=> Hash::make('isabella')
>>>>>>> 28946deca3e8bfed5da7a9e253d22915809fb3db
        ]);
    }
}
