<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new User;
        $admin->name = 'Administrator';
        $admin->email = 'detinadya@gmail.com';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('12345678');
        $admin->role = 'admin';
        $admin->save();

        $admin = new User;
        $admin->name = 'User';
        $admin->email = 'deti.nadya@aiesec.net';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('password');
        $admin->role = 'user';
        $admin->save();
    }
    
}
