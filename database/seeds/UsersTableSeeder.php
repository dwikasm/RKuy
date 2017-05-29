<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
        DB::table('users')->delete();

        $data = new User();
        $data->name = "pengendalidokumen";
        $data->email = "pengendalidokumen@majujaya.com";
        $data->password = "$2y$10$4Xz5bd1E3LoLE9LgiOLvt.HsIFjkuccKQgRJXQDo4kms.sKlrb0Y6";
        $data->save();
        
        $data = new User();
        $data->name = "pengelolapenyimpanan";
        $data->email = "pengelolapenyimpanan@majujaya.com";
        $data->password = "$2y$10$R2b32cQTG81uZm7B1tvi/u1EyTFd4ccF44MJpvUfktr4AOpz7urU6";
        $data->save();
    }
}
