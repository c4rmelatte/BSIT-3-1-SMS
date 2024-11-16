<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();                        // Primary key
            $table->string('title');             // Title of the schedule
            $table->text('description')->nullable(); // Description, optional
            $table->date('date');                // Date of the event
            $table->time('time');                // Time of the event
            $table->string('location')->nullable(); // Location, optional
            $table->timestamps();                // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}