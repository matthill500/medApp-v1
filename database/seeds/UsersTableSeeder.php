<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name', 'admin')->first();
      $role_doctor = Role::where('name', 'doctor')->first();
      $role_patient = Role::where('name', 'patient')->first();

      $admin = new User();
      $admin->name = 'Matt Hill';
      $admin->email = 'admin@medapp.ie';
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);

      $doctor = new User();
      $doctor->name = 'John Jones';
      $doctor->email = 'johnj@medapp.ie';
      $doctor->password = bcrypt('secret');
      $doctor->save();
      $doctor->roles()->attach($role_doctor);

      $user = new User();
      $user->name = 'Jenny';
      $user->email = 'jenny@medapp.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_patient);

    }
}
