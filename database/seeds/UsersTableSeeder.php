<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name'     => 'Samer Lahlouh',
          'username' => 'samer',
          'email'    => 'samer@hotmail.com',
          'password' => bcrypt('123456'),
          'remember_token' => str_random(10),
          'active'   => '1',
          'role_id'  => '1',
        ]);
    }
}
