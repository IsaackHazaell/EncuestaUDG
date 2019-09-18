<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = new App\Subject();
        $subject->name = 'Matematicas';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Lectura y redaccion';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Ingles';
        $subject->department_id = '3';
        $subject->save();
    }
}
