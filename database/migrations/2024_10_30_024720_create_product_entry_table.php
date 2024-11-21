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
        Schema::create('product_entry', function (Blueprint $table) {
            $table->id('id');            
            $table->integer('amount');
            $table->date('date');
            $table->foreignId('product_id')->constrained('product')->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained('supplier')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_entry');
    }
};
