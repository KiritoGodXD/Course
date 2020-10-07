<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAclientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aclients', function (Blueprint $table) {
            $table->id();
            $table->string('surname', 45);
            $table->string('name', 45);
            $table->string('patronymic', 45);
            $table->date('birthdate');
            $table->string('phone', 11);
            $table->string('gender', 1);
            $table->string('passport', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aclients');
    }
}