<?php

use Finance\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->states('admin')
            ->create([
                'name' => 'Paulo Vieira',
                'email' => 'admin@user.com',
            ]);

        factory(User::class, 1)
            ->create([
                'name' => 'Client da Silva',
                'email' => 'user@user.com',
            ]);
    }
}
