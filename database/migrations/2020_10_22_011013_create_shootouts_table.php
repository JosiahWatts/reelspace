<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShootoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shootouts', function (Blueprint $table) {
            $table->id();
            $table->char('name', 100);
            $table->text('description');
            $table->foreignId('space_id');
            $table->foreignId('user_id');
            $table->date('close_date');
            $table->boolean('active');
            $table->winner('tmdb_id')->nullable();
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
        Schema::dropIfExists('shootouts');
    }
}
