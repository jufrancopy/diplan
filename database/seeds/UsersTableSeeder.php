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
            'name' => 'Julio Franco',
            'email' => 'jucfra23@gmail.com',
            'password' => bcrypt('jcf3458435'),
        ]);

        DB::table('users')->insert([
            'name' => 'Don Consejero',
            'email' => 'consejero@gmail.com',
            'password' => bcrypt('jcf3458435'),
        ]);

        DB::table('users')->insert([
            'name' => 'Don Gerente',
            'email' => 'gerente@gmail.com',
            'password' => bcrypt('jcf3458435'),
        ]);

        DB::table('users')->insert([
            'name' => 'Don Director',
            'email' => 'director@gmail.com',
            'password' => bcrypt('jcf3458435'),
        ]);

         DB::table('users')->insert([
            'name' => 'Don Departamento',
            'email' => 'departamento@gmail.com',
            'password' => bcrypt('jcf3458435'),
        ]);

        DB::table('users')->insert([
            'name' => 'Don Seccion',
            'email' => 'seccion@gmail.com',
            'password' => bcrypt('jcf3458435'),
        ]); 
    }
}
