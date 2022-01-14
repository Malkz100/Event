<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenueimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venueImages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venue_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name')->unique();
            $table->string('file_path')->unique();
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
        Schema::dropIfExists('venueimages');
    }
}
