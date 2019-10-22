<?php

use Illuminate\Database\Seeder;
use App\User;
use App\EstadoContacto;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'name' => 'Laura',
        	'email' => 'laura.gonzalezl@epiagranollers.cat',
        	'password' => Hash::make('amlj2018'),
        	'remember_token' => str_random(10),
            'admin' => true
        ]);        
        User::create([
            'name' => 'root',
            'email' => 'root@dictadura.gov',
            'password' => Hash::make('toor'),
            'remember_token' => str_random(10),
            'admin' => false
        ]);

        EstadoContacto::create([
            'estado' => 'Por contactar',
            'color' => '#ffff00'
        ]);
        EstadoContacto::create([
            'estado' => 'Contactado',
            'color' => '#00ff00'
        ]);
        EstadoContacto::create([
            'estado' => 'No contactar',
            'color' => '#ff0000'
        ]);
        EstadoContacto::create([
            'estado' => 'Descartado',
            'color' => '#ffff99'
        ]);
        EstadoContacto::create([
            'estado' => 'Esperando su respuesta',
            'color' => '#ffcc66'
        ]);
    }
}
