<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepartementTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departement_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departement_id');
            $table->string('name');
            $table->boolean('is_active');
            $table->foreign('departement_id')
            ->references('id')->on('departements')->onDelete('cascade');
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
        Schema::dropIfExists('departement_types');
    }
}
