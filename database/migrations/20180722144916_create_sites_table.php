<?php

use CommentsApi\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSitesTable extends Migration
{
    // public function change()
    // {

    // }
    public function up()
    {
        $this->schema->create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('token');
        });
    }

    public function down()
    {
        $this->schema->drop('sites');
    }
}
