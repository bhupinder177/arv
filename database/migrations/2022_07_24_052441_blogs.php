<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('blogs', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedInteger('category_id')->nullable();
          $table->unsignedInteger('user_id')->nullable();
          $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->string('title')->nullable();
          $table->longText('description')->nullable();
          $table->enum('status', ['0','1'])->default('0')->comment("1 = Active, 0 = In-Acive");
          $table->string('image')->nullable();
          $table->integer('displayOrder')->nullable();
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
          Schema::dropIfExists('blogs');
    }
}
