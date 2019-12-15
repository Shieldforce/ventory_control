<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        $user1 = User::create([
            'id'                =>1,
            'first_name'        =>'Admin',
            'last_name'         =>'do Sistema',
            'birth'             =>'1982-09-01',
            'gender'            =>'MASC',
            'email'             =>'admin@admin',
            'password'          =>bcrypt("admin"),
        ]);
    }
}
