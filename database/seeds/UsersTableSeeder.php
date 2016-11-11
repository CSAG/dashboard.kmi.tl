<?php

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
        DB::table('users')->insert([
            'fullname' => 'Passakon Puttasuwan',
            'email' => 'passakon_p@kmi.tl',
            'password' => bcrypt('12345678'),
        ]);
    }
}
