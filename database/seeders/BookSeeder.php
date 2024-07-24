<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title'=>'O senhor dos anéis',
            'pages'=>'100',
            'price'=>'10.22',
            'author'=>'J.R.R. Tolkien',
        ]);

        $book->create([
            'title'=>'A onda',
            'pages'=>'40',
            'price'=>'101.00',
            'author'=>'Todd Strasser',
        ]);

        $book->create([
            'title' => '1984',
            'pages' => '328',
            'price' => '18.99',
            'author' => 'George Orwell',
        ]);
        $book->create([
            'title' => 'O Cortiço',
            'pages' => '336',
            'price' => '38.50',
            'author' => 'Aluísio Azevedo',
        ]);
        $book->create([
            'title' => 'Dom Casmurro',
            'pages' => '256',
            'price' => '29.90',
            'author' => 'Machado de Assis',
        ]);
        $book->create([
            'title' => 'Memórias Póstumas de Brás Cubas',
            'pages' => '320',
            'price' => '34.50',
            'author' => 'Machado de Assis',
        ]);
        $book->create([
            'title' => 'A Moreninha',
            'pages' => '184',
            'price' => '19.99',
            'author' => 'Joaquim Manuel de Macedo',
        ]);
        $book->create([
            'title' => 'O Guarani',
            'pages' => '368',
            'price' => '42.00',
            'author' => 'José de Alencar',
        ]);
        $book->create([
            'title' => 'Capitães da Areia',
            'pages' => '280',
            'price' => '26.75',
            'author' => 'Jorge Amado',
        ]);
        $book->create([
            'title' => 'Vidas Secas',
            'pages' => '160',
            'price' => '21.00',
            'author' => 'Graciliano Ramos',
        ]);
    }
}
