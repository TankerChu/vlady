<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('location_name');

            $table->longText('address');

            $table->datetime('time');

            $table->longText('introduction');

            $table->longText('content');

            $table->string('slug');

            $table->decimal('price', 15, 2);

            $table->string('city');

            $table->longText('video_link')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
