<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {

            $table->binary('picture')->nullable();
            $table->string('membership_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->year('membership_year')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('bloody_type')->nullable();
            $table->string('health_plan')->nullable();
            $table->string('cbm_where')->nullable();

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
