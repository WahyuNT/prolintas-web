<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing', function (Blueprint $table) {
            $table->id();
            $table->string('title', 288)->nullable();
            $table->string('subtitle', 288)->nullable();
            $table->string('description', 288)->nullable();
            $table->string('image', 288)->nullable();
            $table->string('icon', 288)->nullable();
            $table->boolean('is_active')->nullable();
            $table->text('maps_link');
            $table->enum('type', ['home', 'about', 'maps', 'footer', 'header'])->default('home');
            $table->string('judul', 288)->nullable();
            $table->string('subjudul', 288)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landing');
    }
};
