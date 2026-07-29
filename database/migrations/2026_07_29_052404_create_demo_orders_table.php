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
        Schema::create('demo_orders', function (Blueprint $table) {
            $table->id();

            $table->string('customer', 64);
            $table->timestamp('date');
            $table->string('status', 32);
            $table->string('status_color', 32);
            $table->integer('amount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demo_orders');
    }
};
