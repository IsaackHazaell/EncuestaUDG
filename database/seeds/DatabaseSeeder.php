<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\User();
        $admin->name = 'Admin';
        $admin->email = 'admin@mail.com';
        $admin->email_verified_at = now();
        $admin->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $admin->remember_token = Str::random(10);
        $admin->save();

        $type = new App\Type();
        $type->user_id = $admin->id;
        $type->user_type = '0';
        $type->save();
        
        $employee = new App\Employee();
        $employee->user_id = $admin->id;
        $employee->code = '00000';
        $employee->contract = 'admin';
        $employee->appointment = 'admin';
        $employee->save();

        $this->call([
            DepartmentsTableSeeder::class,
            TeachersTableSeeder::class,
            GroupsTableSeeder::class,
            SubjectsTableSeeder::class,
        ]);
    }
}
