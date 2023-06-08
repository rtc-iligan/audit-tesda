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
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            //$table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('qualification_id');
            $table->unsignedBigInteger('audit_type_id');
            $table->unsignedBigInteger('document_type_id');
          

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
           // $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade');
            $table->foreign('qualification_id')->references('id')->on('qualifications')->onDelete('cascade');
            $table->foreign('audit_type_id')->references('id')->on('audit_types')->onDelete('cascade');
            $table->foreign('document_type_id')->references('id')->on('document_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requirements');
    }
};
