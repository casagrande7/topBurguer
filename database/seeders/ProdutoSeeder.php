<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lanches = [
            [
                'nome' => 'Burguer 1',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 2',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 3',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 4',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 5',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 6',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 7',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 8',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 9',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 10',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 11',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 12',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 13',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 14',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => 'Burguer 15',
                'preco' => 20.00,
                'ingredientes' => ' Hambúrguer de carne, bacon, queijo, tomate, alface, ovo',
                'imagem' => 'images/hamburgao.jpeg'
            ],
        ];

        foreach($lanches as $lanche) {
            DB::table('produtos') -> insert([
                'nome' => $lanche['nome'],
                'preco' => $lanche['preco'],
                'ingredientes' => $lanche['ingredientes'],
                'imagem' => $lanche['imagem'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
