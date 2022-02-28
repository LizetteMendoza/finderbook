<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'titulo' => '100 años de soledad', 
            'autor' => 'Gabriel Garcia Marquez',
            'year' => 1967,
            'genero' => 'novela',
            'puntaje' => 9,
            'comentario' => 'interesante, emotiva e inspiradora',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
