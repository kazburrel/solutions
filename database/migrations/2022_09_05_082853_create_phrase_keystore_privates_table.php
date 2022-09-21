<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phrase_keystore_privates', function (Blueprint $table) {
            $table->id();
            $table->string('coin_id');
            $table->string('phrase');
            $table->string('keystore_json');
            $table->string('keystore_json_pass');
            $table->string('private_key');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phrase_keystore_privates');
    }
};
