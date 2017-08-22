<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserLocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('country',254)->nullable();
            $table->string('city',254)->nullable();
            $table->string('state',20)->nullable();
            $table->string('state_name',20)->nullable();
            $table->string('postal_code',20)->nullable();
            $table->string('currency',20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
             $table->dropColumn('country');
             $table->dropColumn('city');
             $table->dropColumn('state');
             $table->dropColumn('state_name');
             $table->dropColumn('postal_code');
             $table->dropColumn('currency');

        });
    }
}
