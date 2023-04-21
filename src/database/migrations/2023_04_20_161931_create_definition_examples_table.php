<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefinitionExamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('definition_examples', function (Blueprint $table) {
            $table->id();
            $table->string('example');
            $table->unsignedBigInteger('definition_id');
            $table->foreign('definition_id')
                ->references('id')->on('definitions')->onDelete('cascade');
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
        Schema::dropIfExists('definition_examples');
    }
}
