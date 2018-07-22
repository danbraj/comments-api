<?php

use CommentsApi\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration // Migration
{
    // public function change()
    // {

    // }
    public function up()
    {
        $this->schema->create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id')->unsigned();
            $table->string('content');
            $table->string('author');
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('site_id')->references('id')->on('sites');
        });
    }

    public function down()
    {
        $this->schema->drop('comments');
    }
}
