<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Juan',
            'email' => 'juanfw@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Fernando',
            'email' => 'juan@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $user->assignRole('user');

        $guest = User::create([
            'name' => 'Wijaya',
            'email' => 'jfw@gmail.com',
            'password' => bcrypt(12345678),
        ]);
    }
}
