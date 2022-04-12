<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $cat = new \App\Models\Categoria(['categoria' => 'Geral' ]);
        $cat->save();


        $prod = new \App\Models\Produto(['nome' => 'Cacal', 'valor' => 10, 'foto' => 'images/produto1-cacal.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Produto(['nome' => 'Suco de Maça', 'valor' => 10, 'foto' => 'images/produto2-sucoMaca.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Produto(['nome' => 'Açucar de Coco', 'valor' => 10, 'foto' => 'images/produto3-acucarCoco.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Produto(['nome' => 'Farinha de Coco', 'valor' => 10, 'foto' => 'images/produto4-farinhaCoco.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Produto(['nome' => 'Farinha de Amêndoa', 'valor' => 10, 'foto' => 'images/produto5-farinhaAmendoa.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Produto(['nome' => 'Azeitona', 'valor' => 10, 'foto' => 'images/produto6-azeitona.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod6->save();

        $prod7 = new \App\Models\Produto(['nome' => 'Azeite de Oliva', 'valor' => 10, 'foto' => 'images/produto7-azeiteOliva.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod7->save();

        $prod8 = new \App\Models\Produto(['nome' => 'Nozes', 'valor' => 10, 'foto' => 'images/produto8-nozes.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod8->save();

        $prod9 = new \App\Models\Produto(['nome' => 'Proteina de Soja', 'valor' => 10, 'foto' => 'images/produto9-proteinaSoja.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod9->save();

        $prod10 = new \App\Models\Produto(['nome' => 'Proteina de Soja', 'valor' => 10, 'foto' => 'images/produto10-proteinaSoja2.jfif', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod10 = new \App\Models\Produto(['nome' => 'Suco de Uva', 'valor' => 10, 'foto' => 'images/produto11-sucoUva.jpg', 'descricao' =>'', 'categoria_id' => $cat->id]);
        $prod->save();
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};