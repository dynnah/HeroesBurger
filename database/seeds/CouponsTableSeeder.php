<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::truncate();

        $coupon = new Coupon;
        $coupon->nome = ' Cupom 1';
        $coupon->descricao = 'Cupom de desconto para qualquer pedido.';
        $coupon->preco = 10;
        $coupon->save();

        $coupon = new Coupon;
        $coupon->nome = ' Cupom 2';
        $coupon->descricao = 'Cupom de desconto para qualquer pedido.';
        $coupon->preco = 8;
        $coupon->save();
    }
}
