<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $admin = new User();
        $admin->name = 'Admin name';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($adminRole);
    }
}
