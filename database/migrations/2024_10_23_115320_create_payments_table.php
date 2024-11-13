<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable(); // Allow null values
            $table->decimal("price", 10, 2); // Precision and scale
            $table->decimal("amount", 10, 2); // Precision and scale
            $table->string("purpose");
            $table->decimal("change", 10, 2); // Precision and scale
            // $table->unsignedBigInteger("product_id")->nullable(); // Add product_id
            // $table->unsignedInteger("user_id")->nullable(); // Allow null values
            // $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade"); // Foreign key constraint
            $table->string("type");
            $table->boolean("isPaid");
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
