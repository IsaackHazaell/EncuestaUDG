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
        $subject->name = 'Lengua extranjera I';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '1';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '2';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '3';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '4';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '5';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '6';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '8';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '9';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '10';
        $group_subject->save();


        $subject = new App\Subject();
        $subject->name = 'Lengua extranjera II';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '11';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '12';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '13';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '14';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '15';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '16';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '17';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '18';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '19';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '20';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Lengua extranjera III';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '21';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '22';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '23';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '24';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '25';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '26';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '27';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '28';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '29';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '30';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Lengua extranjera IV';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '31';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '32';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '33';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '34';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '35';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '36';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '37';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '38';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '39';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '40';
        $group_subject->save();
        
        $subject = new App\Subject();
        $subject->name = 'Lengua extranjera V';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '41';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '42';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '43';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '44';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '45';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '46';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '47';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '48';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '49';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '50';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Lengua extranjera VI';
        $subject->department_id = '3';
        $subject->save();
        
        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '51';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '52';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '53';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '54';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '55';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '56';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '57';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '58';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '59';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '60';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Taller de habilidades para el aprendizaje';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '1';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '2';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '3';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '4';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '5';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '6';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '8';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '9';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '10';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Descripción y comunicación';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '1';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '2';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '3';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '4';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '5';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '6';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '8';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '9';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '10';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Comprensión y exposición';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '11';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '12';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '13';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '14';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '15';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '16';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '17';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '18';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '19';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '20';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Análisis y argumento';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '21';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '22';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '23';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '24';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '25';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '26';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '27';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '28';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '29';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '30';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Crítica y propuesta';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '31';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '32';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '33';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '34';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '35';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '36';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '37';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '38';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '39';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '40';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Estilo y corrección';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '41';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '42';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '43';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '44';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '45';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '46';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '47';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '48';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '49';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '50';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Habilidad verbal';
        $subject->department_id = '3';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '51';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '52';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '53';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '54';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '55';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '56';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '57';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '58';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '59';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '60';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Matemáticas y vida cotidiana I';
        $subject->department_id = '4';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '1';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '2';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '3';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '4';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '5';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '6';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '8';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '9';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '10';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Matemáticas y vida cotidiana II';
        $subject->department_id = '4';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '11';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '12';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '13';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '14';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '15';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '16';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '18';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '19';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '20';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Matemáticas y Ciencia I';
        $subject->department_id = '4';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '21';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '22';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '23';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '24';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '25';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '26';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '27';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '28';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '29';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '30';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Matemáticas y Ciencia II';
        $subject->department_id = '4';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '31';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '32';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '33';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '34';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '35';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '36';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '37';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '38';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '39';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '40';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Precálculo';
        $subject->department_id = '4';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '41';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '42';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '43';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '44';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '45';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '46';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '47';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '48';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '49';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '50';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Matemática avanzada';
        $subject->department_id = '4';
        $subject->save();
        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '51';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '52';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '53';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '54';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '55';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '56';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '57';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '58';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '59';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '60';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Matemáticas recreativas';
        $subject->department_id = '4';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Solución de problemas geométricos avanzados';
        $subject->department_id = '4';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Solución de problemas de teoría de números';
        $subject->department_id = '4';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Matemáticas y el uso de las TIC´s';
        $subject->department_id = '4';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Tecnologías de la información I';
        $subject->department_id = '5';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '1';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '2';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '3';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '4';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '5';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '6';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '8';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '9';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '10';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Tecnologías de la información II';
        $subject->department_id = '5';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '11';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '12';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '13';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '14';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '15';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '16';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '17';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '18';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '19';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '20';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Apreciación del arte';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '1';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '2';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '3';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '4';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '5';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '6';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '8';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '9';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '10';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Elementos de la técnica vocal e instrumentos';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Lenguaje e instrumentos musicales';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Interpretación musical';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Creación musical';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Elementos de las artes visuales';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Experiencia cromática';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Composición visual';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Experimentación plástica';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'La danza';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Estampa regional I';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Estampa regional II';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Gala escénica';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Introducción a la comunicación escénica';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Expresión dramática';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Análisis de textos y actuación';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Producción y puesta en escena';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'El mundo a través de la cámara';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Caceria de imágenes';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Imaginación digital';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Fronteras de la imagen';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Comprensión de la ciencia';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '1';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '2';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '3';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '4';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '5';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '6';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '8';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '9';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '10';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Formación ciudadana';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '31';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '32';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '33';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '34';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '35';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '36';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '37';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '38';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '39';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '40';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Identidad y filosofía de vida';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '41';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '42';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '43';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '44';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '45';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '46';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '47';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '48';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '49';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '50';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Reflexión ética';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '51';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '52';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '53';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '54';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '55';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '56';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '57';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '58';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '59';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '60';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Análisis económico';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '51';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '52';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '53';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '54';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '55';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '56';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '57';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '58';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '59';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '60';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Sociedad y cultura';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Historia de las ideas políticas';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Democracia y procesos electorales';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Liderazgo';
        $subject->department_id = '2';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Autoconocimiento y personalidad';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '11';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '12';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '13';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '14';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '15';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '16';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '17';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '18';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '19';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '20';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Raíces culturales';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '21';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '22';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '23';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '24';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '25';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '26';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '27';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '28';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '29';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '30';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Democracia y soberanía nacional';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '31';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '32';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '33';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '34';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '35';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '36';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '37';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '38';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '39';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '40';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Ciudadanía mundial';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '41';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '42';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '43';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '44';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '45';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '46';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '47';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '48';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '49';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '50';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Geografía y cuidado del entorno';
        $subject->department_id = '2';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '51';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '52';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '53';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '54';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '55';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '56';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '57';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '58';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '59';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '60';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Sexualidad humana';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '1';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '2';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '3';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '4';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '5';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '6';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '8';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '9';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '10';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Educación para la salud';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '1';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '2';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '3';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '4';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '5';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '6';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '8';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '9';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '10';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Diseño de plan de vida';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '41';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '42';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '43';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '44';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '45';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '46';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '47';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '48';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '49';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '50';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Fundamentos de la nutrición';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Fisiología de la nutrición';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Nutrición y salud en la adolescencia';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Regímenes alimenticios';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Conciencia comunitaria';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Reflexión exigencias';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Conciencia corporal';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Experiencia de serenidad y retiro';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Riesgos y medidas preventivas de seguridad';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Desastres naturales';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Principios básicos de primeros auxilios';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Difusión y atención ante las contingencias';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Física I';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '1';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '2';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '3';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '4';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '5';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '6';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '7';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '8';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '9';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '10';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Física II';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '11';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '12';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '13';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '14';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '15';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '16';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '17';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '18';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '19';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '20';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Química I';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '11';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '12';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '13';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '14';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '15';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '16';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '17';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '18';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '19';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '20';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Química II';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '21';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '22';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '23';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '24';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '25';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '26';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '27';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '28';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '29';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '30';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Acercamiento al desarrollo deportivo';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '11';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '12';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '13';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '14';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '15';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '16';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '17';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '18';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '19';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '20';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Recreación y aprovechamiento del tiempo libre';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '21';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '22';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '23';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '24';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '25';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '26';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '27';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '28';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '29';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '30';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Actividad física y desarrollo personal';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '31';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '32';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '33';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '34';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '35';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '36';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '37';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '38';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '39';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '40';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Biología I';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '31';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '32';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '33';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '34';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '35';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '36';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '37';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '38';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '39';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '40';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Biología II';
        $subject->department_id = '1';
        $subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '41';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '42';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '43';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '44';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '45';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '46';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '47';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '48';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '49';
        $group_subject->save();

        $group_subject = new App\GroupSubject();
        $group_subject->subject_id = $subject->id;
        $group_subject->group_id = '50';
        $group_subject->save();

        $subject = new App\Subject();
        $subject->name = 'Diagnóstico de la problemática ambiental';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Elaboración de proyectos y estrategias educativas';
        $subject->department_id = '1';
        $subject->save();
        
        $subject = new App\Subject();
        $subject->name = 'Gestión y ejecución de proyectos en eduación ambiental';
        $subject->department_id = '1';
        $subject->save();

        $subject = new App\Subject();
        $subject->name = 'Evaluación del impacto de un proyecto de educación ambiental';
        $subject->department_id = '1';
        $subject->save();
        
    }
}
