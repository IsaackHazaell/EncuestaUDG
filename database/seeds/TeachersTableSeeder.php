<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //taceher1
        $user = new App\User();
        $user->name = 'Aldana Meza Brenda Maricela';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2901641';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();



        $user = new App\User();
        $user->name = 'Aldana Román Abraham Javier';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2963045';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatuera "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Álvarez Marín Ana Elia';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2956512';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Aignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Ambriz Ramos Araceli';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9715673';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Aignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Bañuelos Espinoza María Isabel';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9414649';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();

        $user = new App\User();
        $user->name = 'Bojórquez Martínez Roberto';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();


        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8620989';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Bugarín Topete Federico';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8907269';
        $employee->contract = '';
        $employee->appointment = 'Técnico Académico Asociado "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Camberos Sandoval Nora Patricia';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9404406';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Candelas Hernández Omar Hunab-ku';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2957678';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Capuchino Cabrera Alfredo';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2953692';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Castañeda Castellanos María Cristina';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2949691';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Castañón Hernández Miguel Ángel';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2957705';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Castrejón Martínez Leticia';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2202816';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Cortes Oyoqeu Víctor';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9502971';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "C"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'De la Cruz Casados Netzahualcóyotl';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8414173';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B" CIT´S';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Esparza Iñiguez Adriana Elizabeth';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2953693';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Espinoza Siordia Gabriela';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9424334';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Titular "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Flores Cervantes Marisa';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9523413';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Flores Correa Jaime';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2963450';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Flores Manzano Aldo Moisés';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2823519';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Fuentes Flores Aida';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2132389';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Galarza Lozano Alberto';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2956132';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'García García Francisco Javier';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2949762';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'García Gómez Silvia';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9521135';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'García Molina Jose Aurelio';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8403732';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B" CIT´S';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'García Navarro Blanca Estela';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '7719698';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'García Romero Axel';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2965003';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Godoy Robles Thelma del Rosario';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8919089';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'González Benítez Gustavo';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2233843';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Gutiérrez Gómez Roberto';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2807157';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "C"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Hernández Ruiz Gabriel';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8209618';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Titular "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Hernández Hernández Octavio Ricardo';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2965004';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Hernández Cordero Álvaro Ernesto';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2949690';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Ibarra Frías Edgar';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2755002';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Aignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Izaguirre Rocha Isabel';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8004102';
        $employee->contract = '';
        $employee->appointment = 'Profesor DOcente Tirtular "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Jiménez Adame Iris Thamar';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2509148';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Legaspi Iñiguez Jose Carlos';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9027289';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B" CIT´S';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Lomelí Guerrero Carlos Alberto';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2705982';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'López Solís Jesús Alberto';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2964063';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Luevano Padilla Gema Noemi';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2631245';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Madrigal Gaytan Lizzie Yedid';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2624486';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();

        $user = new App\User();
        $user->name = 'Madrigal Olivares Arturo';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2208032';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Magallón Lomelí Jorge Armando';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2963706';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Mancilla Segura Laura Dolores';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2117142';
        $employee->contract = '';
        $employee->appointment = 'Profsor Docente Asociado "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Mares Orozco Graciela de Jesús';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9914242';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Márquez Méndez Verónica Patricia';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2969848';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Márquez Torres Alma Delia';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9501959';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B" CIT´S';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Márquez Torres Gloria';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8412553';
        $employee->contract = '';
        $employee->appointment = 'Técnico Académico Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Martha Beleche María Hilda';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2954185';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Martínez Sánchez Raúl Antonio';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2208032';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Medina García Miguel Ángel';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2624419';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Mena Munguía Patricia';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2913607';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Navarro Rodríguez Miriam Guadalupe';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9502327';
        $employee->contract = '';
        $employee->appointment = 'Profesro Docente Asistente "C"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Ornelas Gómez Oscar Ricardo';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2963291';
        $employee->contract = '';
        $employee->appointment = 'Profesro de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Ortega Ramírez Víctor Ramón';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2926792';
        $employee->contract = '';
        $employee->appointment = 'Técnico Académico Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Ortiz Aceves Martin';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2955976';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignaturas "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Ortiz Puente Iván';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2961685';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Pérez Hermosillo María Lourdes';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8015392';
        $employee->contract = '';
        $employee->appointment = 'Técnico Académico Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Pérez Velázquez María Adela';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2807165';
        $employee->contract = '';
        $employee->appointment = 'Técnico Académico Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Plascencia Sainz Maricela';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8309647';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B" CIT´S';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Quiroz Martínez Antonio';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2963788';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Ramírez Corona Alfredo';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2961936';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Razón Gallegos Laura Lorena';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2949206';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Reyes García Luis Fernando';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2708205';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Reynaga Delgado Yuridia Nathalie';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2918099';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();
        

        $user = new App\User();
        $user->name = 'Rivera Gonzaléz Irene Maria de Jesús';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '8615497';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Titular "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Rodríguez Cortes José Luis';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2420414';
        $employee->contract = '';
        $employee->appointment = 'Técnico Académico Asociado "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Rodríguez Plascencia Gabriela';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2957491';
        $employee->contract = '';
        $employee->appointment = 'Técnico Académico Asociado "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Rodríguez Reynaga Marivel';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2117835';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Silva Ambriz Andrea';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2932954';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Soto Villanueva Gerardo';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9502742';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Aignatura "A" CIT´S';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Tornero Perfecto Gemma Patricia';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2949689';
        $employee->contract = '';
        $employee->appointment = 'Profesor de Asignatura "B"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Villicaña Torres Héctor Ernesto';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '9522069';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asistente "C"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();


        $user = new App\User();
        $user->name = 'Zuno Ibarra Blanca Esmeralda';
        
        $user->email_verified_at = now();
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = Str::random(10);
        $user->save();

        $type = new App\Type();
        $type->user_id = $user->id;
        $type->user_type = '2';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $user->id;
        $employee->code = '2812118';
        $employee->contract = '';
        $employee->appointment = 'Profesor Docente Asociado "A"';
        $employee->save(); $teacher = new App\Teacher(); $teacher->employee_id = $employee->id; $teacher->save();
    }
}
