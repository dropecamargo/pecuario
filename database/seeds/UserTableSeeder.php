<?php

use Illuminate\Database\Seeder;

use App\Models\Usuario;

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class UserTableSeeder extends Seeder
{
    public function run()
    {
        Usuario::create(array(
            'username'   => 'admin',
            'email'    => 'dropecamargo@gmail.com',
            'name'   => 'Pedro Camargo',
            'password' => 'admin',
			'activo' => true
        ));
    }
}