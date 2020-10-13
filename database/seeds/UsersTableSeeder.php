<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'           => 'Wilson Espitia',
                'email'          => 'admin@notas.com',
                'username'       => 'admin',
                'document'       => 1234567890,
                'rol'            => 'teacher',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
            ],
            [
                'name'           => 'Jose Hincapie',
                'email'          => 'jose@notas.com',
                'username'       => 'jose',
                'rol'            => 'student',
                'document'       => 1234567891,
                'password'       => bcrypt('password1'),
                'remember_token' => Str::random(60),
            ],
            [
                'name'           => 'Juan Sebastián león García',
                'email'          => 'juan@notas.com',
                'username'       => 'juan',
                'rol'            => 'student',
                'document'       => 1234567810,
                'password'       => bcrypt('password2'),
                'remember_token' => Str::random(60),
            ],
            [
                'name'           => 'Luis angel salgado Zapata',
                'email'          => 'luis@notas.com',
                'username'       => 'luis',
                'rol'            => 'student',
                'document'       => 1234567811,
                'password'       => bcrypt('password3'),
                'remember_token' => Str::random(60),
            ]
        ];

        User::insert($users);
    }
}
