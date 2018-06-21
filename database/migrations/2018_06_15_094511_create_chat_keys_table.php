<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_keys', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('from_id');
            $table->integer('to_id');
            $table->string('private')->collation('utf8_unicode_ci');
            $table->string('public')->collation('utf8_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_keys');
    }
}
