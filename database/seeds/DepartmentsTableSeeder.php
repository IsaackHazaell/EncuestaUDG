<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = new App\Department();
        $department->name = 'Ciencias Naturales de la Salud';
        $department->save();

        $department = new App\Department();
        $department->name = 'Humanidades y Sociadad';
        $department->save();

        $department = new App\Department();
        $department->name = 'Comunicacion y aprendizaje';
        $department->save();

        $department = new App\Department();
        $department->name = 'Matemáticas';
        $department->save();

        $department = new App\Department();
        $department->name = 'Sociotecnologías';
        $department->save();
    }
}