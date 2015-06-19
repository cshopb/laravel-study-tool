<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
            $table->integer('price');
            $table->string('added_by');
            $table->string('edited_by');
            $table->string('picture');
            $table->timestamp('published_at');
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
        Schema::drop('tools');
    }
}
