<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('title',200);
            $table->string('post_name', 100);
            $table->unsignedInteger('category_id');
            $table->text('summary');
            $table->text('content')->nullable();
            $table->unsignedInteger('author_id');
            $table->dateTime('dateOfPost')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('img', 200)->nullable();
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->foreign('author_id')->references('author_id')->on('authors')->onDelete('cascade');

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
        Schema::dropIfExists('posts');
    }
}
