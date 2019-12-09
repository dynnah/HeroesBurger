<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $products = new Product;
        $products->nome = 'TONY - Ancho Burger';
        $products->descricao = 'Pão de batata artesanal, dois blends de carnes de costela (180g cada), geleia de bacon, queijo prato, picles e molho especial HEROES.';
        $products->preco = 23.50;
        $products->tipo = 'Burger';
        $products->save();

        $products = new Product;
        $products->nome = 'PETER – The “Bronx” Skirt Steark';
        $products->descricao = 'Pão brioche artesanal para Hambúrguer, blend de fraldinha (200g), queijo prato, salada de alface e tomate verde e molho especial HEROES.';
        $products->preco = 19.50;
        $products->tipo = 'Burger';
        $products->save();

        $products = new Product;
        $products->nome = 'DIANA – Vacío';
        $products->descricao = 'Pão de batata artesanal para Hambúrguer, blend de fraldinha (200g), crispy de cebola crocante, bacon em tiras, queijo mussarela e molho especial HEROES.';
        $products->preco = 20.80;
        $products->tipo = 'Burger';
        $products->save();

        $products = new Product;
        $products->nome = 'BRUCE – Prime burger';
        $products->descricao = 'Pão de tradicional para Hambúrguer, blend de picanha (200g), queijo prato, salada de tomate, alface e picles e molho especial HEROES.';
        $products->preco = 22.50;
        $products->tipo = 'Burger';
        $products->save();

        $products = new Product;
        $products->nome = 'BARRY – Pernil & Cream cheese';
        $products->descricao = 'Pão de batata artesanal para Hambúrguer, blend de carnes (180g), cream cheese, salada de tomate e farofa de crocante de bacon.';
        $products->preco = 21.80;
        $products->tipo = 'Burger';
        $products->save();

        $products = new Product;
        $products->nome = 'OLIVER – Lone survivor';
        $products->descricao = 'Pão francês artesanal para Hambúrguer, blend de frango com bacon, queijo prato e molho especial HEROES.';
        $products->preco = 18.50;
        $products->tipo = 'Burger';
        $products->save();

        $products = new Product;
        $products->nome = 'WADE – Yes, I DO HAVE a mouth';
        $products->descricao = 'Pão tradicional de hambúrguer, blend de carne de costela de (200g), crispy de cebola crocante, queijo prato, picles e molho especial HEROES.';
        $products->preco = 20.80;
        $products->tipo = 'Burger';
        $products->save();

        $products = new Product;
        $products->nome = 'Batata-Frita';
        $products->descricao = 'Batata crinckle temperada com páprica e sal';
        $products->preco = 9.00;
        $products->tipo = 'Acompanhamento';
        $products->save();

        $products = new Product;
        $products->nome = 'Coca-Cola';
        $products->descricao = 'Lata de 350ml';
        $products->preco = 4.50;
        $products->tipo = 'Bebidas';
        $products->save();

        $products = new Product;
        $products->nome = 'Suco Frozen';
        $products->descricao = 'Copo de 300ml';
        $products->preco = 9.00;
        $products->tipo = 'Bebidas';
        $products->save();

        $products = new Product;
        $products->nome = 'Milk Shake de Baunilha com Ovomaltine';
        $products->descricao = 'Shake de 300ml';
        $products->preco = 8.00;
        $products->tipo = 'Bebidas';
        $products->save();

        $products = new Product;
        $products->nome = 'Sorvete de baunilha com calda de chocolate';
        $products->descricao = '';
        $products->preco = 6.00;
        $products->tipo = 'Sobremesas';
        $products->save();

        $products = new Product;
        $products->nome = 'Brownie com sorvete de baunilha';
        $products->descricao = '';
        $products->preco = 12.00;
        $products->tipo = 'Sobremesas';
        $products->save();


    }
}