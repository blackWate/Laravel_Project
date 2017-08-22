<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cf_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',255);
            $table->string('name',255);
            $table->string('phone')->nullable();
            $table->string('subject');
            $table->string('message')->nullable();
            $table->string('ip')->nullable();
            $table->enum('role',array('member','admin'));
            $table->string('remember_token')->nullable();
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
        //
    }
}
