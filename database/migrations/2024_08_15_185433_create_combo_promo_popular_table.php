<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComboPromoPopularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combo_promo_popular', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('combo_promo_id');
            $table->unsignedInteger('popular_id');
            $table->unique(['combo_promo_id', 'popular_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combo_promo_pupular');
    }
}
