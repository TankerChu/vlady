<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('email');

            $table->string('phone');

            $table->string('city');

            $table->string('course')->nullable();

            $table->longText('message')->nullable();

            $table->string('event')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
