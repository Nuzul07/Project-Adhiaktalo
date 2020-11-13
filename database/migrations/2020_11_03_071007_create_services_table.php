<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('judulp1');
            $table->text('judulp2');
            $table->text('judulp3');
            $table->text('judulps1');
            $table->text('judulps2');
            $table->text('judulps3');
            $table->text('isip1');
            $table->text('isip2');
            $table->text('isip3');
            $table->text('isips1');
            $table->text('syarat');
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
        Schema::dropIfExists('services');
    }
}
