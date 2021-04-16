<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplyDonCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_don_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id');
            $table->string('name');
            $table->text('reply');
            $table->integer('user_id');
            $table->string('user_image');
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
        Schema::dropIfExists('reply_don_comments');
    }
}
