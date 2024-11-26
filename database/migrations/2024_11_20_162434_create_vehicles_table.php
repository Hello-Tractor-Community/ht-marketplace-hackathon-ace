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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->text('description')->nullable();
            $table->text("make");
            $table->integer('make_id');
            $table->string("model");
            $table->integer('model_id');
            $table->integer('year');
            $table->string("type");
            $table->integer('hp');
            $table->string("transmission");
            $table->string("engine");
            $table->integer("millage");
            $table->string("condition");
            $table->text('images');
            $table->string('coordinates');
            $table->string("address");
            $table->integer('price');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
