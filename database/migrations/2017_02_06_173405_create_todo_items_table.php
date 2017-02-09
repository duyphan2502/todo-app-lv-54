<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('todo_category_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->enum('status', ['done', 'doing', 'canceled'])->default('doing');
            $table->timestamps();
            $table->foreign('todo_category_id')->references('id')->on('todo_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo_items');
    }
}
