<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('shift');
            $table->float('weight');
            $table->integer('supplementsRed');
            $table->float('supplementsRedW');
            $table->integer('supplementsYellow');
            $table->float('supplementsYellowW');
            $table->integer('supplementsBrown');
            $table->float('supplementsBrownW');
            $table->integer('supplementsEnro');
            $table->float('supplementsEnroW');
            $table->integer('supplementsVitamin3');
            $table->float('supplementsVitamin3W');
            $table->mediumText('extraInfo');
            $table->date('date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
