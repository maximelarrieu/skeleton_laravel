<?php

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
        factory(App\User::class, 1)->create()->each(function ($user) {
            $user->assignRole('admin');
        });
        factory(App\User::class, 4)->create()->each(function ($user) {
            $user->assignRole('client');
        });
    }
}
