<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Nerea González';
        $user->email = 'ereadoce.ng@gmail.com';
        $user->password = bcrypt('admin');

        $user->save();

        User::factory(10)->create();
    }
}
