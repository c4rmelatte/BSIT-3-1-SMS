<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('d_t_r_s', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamp("logged_in")->nullable();
            $table->timestamp("logged_out")->nullable();
            $table->date("date");
            $table->timestamps(); // This adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_t_r_s');
    }
};
