<?php

class UsersSeeder extends Seeder {

    public function run()
    {
        User::where('email', 'ash.developer@yandex.ru')->delete();

        User::create([
            'email' => 'ash.developer@yandex.ru',
            'password' => Hash::make('password'),
        ]);

        User::where('email', 'artur-grod')->delete();

        User::create([
            'email' => 'artur-grod',
            'password' => Hash::make('art12grod13'),
        ]);
    }

}
