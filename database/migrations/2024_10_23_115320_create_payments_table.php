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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            
            $table->string("name");
            $table->decimal("price");
            $table->decimal("amount");
            $table->string("purpose");
            $table->decimal("balance");
            $table->decimal("change");
            $table->unsignedInteger("user_id");
            $table->boolean("isFullyPaid");
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
