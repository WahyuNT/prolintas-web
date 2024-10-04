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
            $table->string('title', 288);
            $table->string('subtitle', 288);
            $table->string('description', 288);
            $table->string('image', 288);
            $table->string('icon', 288);
            $table->boolean('is_active');
            $table->text('maps_link');
            $table->enum('type', ['home', 'about', 'maps', 'footer'])->default('home');

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
