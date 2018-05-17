<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
			$table->integer('uren');
			$table->integer('totaaluren');
			$table->string('resterendeuren');
			$table->string('week');
			$table->integer('maandag');
			$table->integer('dinsdag');
			$table->integer('woensdag');
			$table->integer('donderdag');
			$table->integer('vrijdag');
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
        Schema::dropIfExists('hours');
    }
}
