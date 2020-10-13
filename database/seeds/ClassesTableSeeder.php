<?php

namespace Database\Seeders;

use App\Classes;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = Classes::create([
            'name'           => 'Matematicas',
            'max_students'   => 40,
            'description'    => 'Clase de Matematicas',
            'teacher_id'     => 1,
        ]);

        $class->student()->attach(
            [
                'student_id' => 2,
            ],
            [
                'student_id' => 3,
            ],
            [
                'student_id' => 4,
            ]
        );

        $class = Classes::create([
            'name'           => 'Ingles',
            'max_students'   => 35,
            'description'    => 'Clase de Ingles',
            'teacher_id'     => 1,
        ]);

        $class->student()->attach(
            [
                'student_id' => 2,
            ],
            [
                'student_id' => 3,
            ],
            [
                'student_id' => 4,
            ]
        );


        $class = Classes::create([
            'name'           => 'Tecnologia',
            'max_students'   => 20,
            'description'    => 'Clase de Tecnologia',
            'teacher_id'     => 1,
        ]);


        $class->student()->attach(
            [
                'student_id' => 2,
            ],
            [
                'student_id' => 3,
            ],
            [
                'student_id' => 4,
            ]
        );
    }
}
