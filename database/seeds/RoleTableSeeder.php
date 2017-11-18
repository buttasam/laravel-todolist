<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->description = "admin role";
        $adminRole->save();


        $userRole = new Role();
        $userRole->name = "user";
        $userRole->description = "user role";
        $userRole->save();
    }
}
