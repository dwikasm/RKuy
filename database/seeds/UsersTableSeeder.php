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
            [
            'name' => 'Dwika S',
            'email' => 'dwika_sm@yahoo.com',
            'password' => '$2y$10$ODxO97S4Bvntpww1eVIbquX.fgGAOEoN5.EceKBGWsrna/T48lxfe',
            'remember_token' => 'kxj4gqfkMH1wQrm1YImCIZNHqggnKYhuQndfxwgKIAq3MxM43YhX7E2aFLbl',
            'created_at' => '2017-05-19 02:04:32',
            'created_at' => '2017-05-19 02:04:32',
            ],
        ]);   
    }
}
