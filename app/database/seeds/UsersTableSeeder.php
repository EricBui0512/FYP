<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        
        DB::statement("TRUNCATE TABLE users");

        $users = array(
            array(
                'username'      => 'admin',
                'email'      => 'admin@example.org',
                'password'   => Hash::make('admin'),
                'confirmed'   => 1,
                'user_type' => 'admin',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'username'      => 'dungho',
                'email'      => 'dungho@gmail.com',
                'password'   => Hash::make('retailer'),
                'confirmed'   => 1,
                'user_type' => 'retailer',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'username'      => 'user',
                'email'      => 'user@example.org',
                'password'   => Hash::make('user'),
                'confirmed'   => 1,
                'user_type' => 'user',
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            )
        );

        DB::table('users')->insert( $users );
    }

}
