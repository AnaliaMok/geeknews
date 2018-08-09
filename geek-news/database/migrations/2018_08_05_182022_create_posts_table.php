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
            $table->unsignedInteger('id');
            $table->unsignedInteger('wp_post_id');
            $table->boolean('is_featured')->default(0);
            $table->integer('featured_image')->nullable();
            $table->enum('post_status', ['draft', 'auto-draft', 'pending', 'publish'])->default('publish');
            $table->string('post_title');
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();

            // Adds nullable created_at and updated_at
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
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
