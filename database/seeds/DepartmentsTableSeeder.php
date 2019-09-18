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
        $department->name = 'Ciencias exactas';
        $department->save();

        $department = new App\Department();
        $department->name = 'Español';
        $department->save();

        $department = new App\Department();
        $department->name = 'Segunda Lengua';
        $department->save();
    }
}