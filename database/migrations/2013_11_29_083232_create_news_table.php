<?php

use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('news', function ($table) {

            $table->increments('id');
            $table->string('title', 255);
            $table->text('content');
            $table->string('slug')->nullable();
            $table->date('datetime');
            $table->timestamps();
            $table->boolean('is_published')->default(true);
            $table->string('path', 255);
            $table->string('file_name', 255);
            $table->integer('file_size');
            $table->string('lang', 20);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::drop('news');
    }
}
