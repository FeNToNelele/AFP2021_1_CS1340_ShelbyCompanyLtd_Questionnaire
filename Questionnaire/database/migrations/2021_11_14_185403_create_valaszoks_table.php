<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValaszoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valaszoks', function (Blueprint $table) {
            $table->increments('valaszok_id');
            $table->integer('kerdes_id');
            $table->string('valasz');
            $table->integer('fiatalok');
            $table->integer('kozepkoruak');
            $table->integer('idosek');
            $table->integer('ferfi');
            $table->integer('no');
            $table->integer('egyeb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valaszoks');
    }
}
