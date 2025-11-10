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
        Schema::create('rfp_quotes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constrained('vendors')->cascadeOnDelete();
            $table->foreignId('rfp_id')->constrained('rfps')->cascadeOnDelete();
            $table->text('description');
            $table->decimal('price',15,2);
            $table->integer('quantity');
            $table->decimal('total',15,2);
            $table->enum('status',['applied','not_applied'])->default('not_applied');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rfp_quotes');
    }
};
