<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('age');
            $table->enum('gender', ['male', 'female']);
            $table->string('plan_type');
            $table->boolean('has_conditions')->default(false);
            $table->boolean('is_smoker')->default(false);
            $table->decimal('calculated_premium', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
