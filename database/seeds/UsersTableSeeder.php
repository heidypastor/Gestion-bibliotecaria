<?php

use App\User;
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
        $User = new User();
        $User->name              = 'Administrador';
        $User->email             = 'admin@gmail.com';
        $User->email_verified_at = now();
        $User->password          = bcrypt('secret');
        $User->tipoUsuario       = 0;


        $User = new User();
        $User->name              = 'Cliente';
        $User->email             = 'cliente@gmail.com';
        $User->email_verified_at = now();
        $User->password          = bcrypt('secret');
        $User->tipoUsuario       = 1;


        $User = new User();
        $User->name              = 'Cliente2';
        $User->email             = 'cliente2@gmail.com';
        $User->email_verified_at = now();
        $User->password          = bcrypt('secret');
        $User->tipoUsuario       = 1;
    }
}
