<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index();
            $table->bigInteger('category_id')->index();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('summary')->nullable();
            $table->text('content');
            $table->integer('views')->default(0);
            $table->boolean('is_visible')->default(true);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index();
            $table->bigInteger('category_id')->index();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('summary')->nullable();
            $table->text('content');
            $table->integer('views')->default(0);
            $table->boolean('is_visible')->default(true);
            $table->timestamp('published_at')->nullable();
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

        Schema::dropIfExists('post_tag');
    }
}
