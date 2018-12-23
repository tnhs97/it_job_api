<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('name', 50);
            $table->string('phone', 20);
            $table->string('address', 200);
            $table->boolean('is_active');
            $table->boolean('status');
            $table->boolean('gender');
            $table->date('dob');
            $table->morphs('accountable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }

}
