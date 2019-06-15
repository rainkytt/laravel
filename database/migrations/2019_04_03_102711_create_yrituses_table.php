<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYritusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yrituses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('yksyks')->nullable();
            $table->integer('ykskaks')->nullable();
            $table->integer('ykskolm')->nullable();
            $table->integer('yksneli')->nullable();
            $table->integer('yksviis')->nullable();
            $table->integer('ykskuus')->nullable();
            $table->integer('ykskuusyks')->nullable();
            $table->integer('ykskuuskaks')->nullable();
            $table->integer('yksseitse')->nullable();
            $table->integer('kaksyks')->nullable();
            $table->integer('kakskaks')->nullable();
            $table->integer('kakskolm')->nullable();
            $table->integer('kaksneli')->nullable();
            $table->integer('kaksviis')->nullable();
            $table->integer('kakskuus')->nullable();
            $table->integer('kaksseitse')->nullable();
            $table->integer('kakskaheksa')->nullable();
            $table->integer('kaksyheksa')->nullable();
            $table->integer('kolmyksyks')->nullable();
            $table->integer('kolmykskaks')->nullable();
            $table->integer('kolmykskolm')->nullable();
            $table->integer('kolmyksneli')->nullable();
            $table->integer('kolmkaksyks')->nullable();
            $table->integer('kolmkakskaks')->nullable();
            $table->integer('kolmkakskolm')->nullable();
            $table->integer('kolmkolmyks')->nullable();
            $table->integer('kolmkolmkaks')->nullable();
            $table->integer('kolmneliyks')->nullable();
            $table->integer('kolmnelikaks')->nullable();
            $table->integer('kolmnelikolm')->nullable();
            $table->integer('kolmnelineli')->nullable();
            $table->integer('kolmviis')->nullable();
            $table->integer('neliyks')->nullable();
            $table->integer('nelikaks')->nullable();
            $table->integer('nelikolm')->nullable();
            $table->integer('viisyks')->nullable();
            $table->integer('viiskaks')->nullable();
            $table->integer('viiskolm')->nullable();
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
        Schema::dropIfExists('yrituses');
    }
}
