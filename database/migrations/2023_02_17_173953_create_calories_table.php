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
        Schema::create('calories', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->integer("height");
            $table->integer("weight");
            $table->integer("age");
            $table->string("gender");
            $table->string("activity-level");
            $table->string("goal");
            $table->float("daily_calorie");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calories');
    }
};
