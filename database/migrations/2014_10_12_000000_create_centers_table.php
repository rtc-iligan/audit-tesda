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
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('tvi_name')->nullable();
            $table->string('tvi_abrv')->nullable();
            $table->string('tvi_location')->nullable();
            $table->string('tvi_acc_number')->nullable();
            $table->string('tvi_email')->nullable();
            $table->string('tvi_manager')->nullable();
            $table->string('tvi_manager_contact')->nullable();
            $table->string('tvi_person')->nullable();
            $table->string('tvi_person_contact')->nullable();
            $table->string('tvi_image')->nullable();
            $table->timestamps();
           
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centers');
    }
};
