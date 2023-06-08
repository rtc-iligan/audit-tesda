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
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('audit_type_id');
            $table->string('name');
            $table->string('abrv');
            $table->string('acc_number');
            $table->string('sector');
            $table->date('date');
            $table->timestamps();
            
            $table->foreign('audit_type_id')
            ->references('id')
            ->on('audit_types')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qualifications');
    }
};
