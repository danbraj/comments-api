<?php

use CommentsApi\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        $this->schema->create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned();
            $table->text('content');
            $table->string('author');
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade');
        });
    }

    public function down()
    {
        $this->schema->drop('comments');
    }
}
