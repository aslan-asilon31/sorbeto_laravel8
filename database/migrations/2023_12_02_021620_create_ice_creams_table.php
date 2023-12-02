<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIceCreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ice_creams', function (Blueprint $table) {
            $table->id();
            $table->string('ice_cream_id')->nullable();
            $table->string('status_id')->nullable();
            $table->string('flavor')->nullable();
            $table->string('color')->nullable();
            $table->integer('price')->nullable();
            $table->integer('stock')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('ice_creams');
    }
}
