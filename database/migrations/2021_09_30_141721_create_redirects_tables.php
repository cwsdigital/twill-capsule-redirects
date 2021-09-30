<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRedirectsTables extends Migration
{
    public function up()
    {
        Schema::create('redirects', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->string('old_url')->nullable();

            $table->string('new_url')->nullable();

            $table->integer('status')->default(301);

        });

    }

    public function down()
    {

        Schema::dropIfExists('redirects');
    }
}
