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
        Schema::create('documents_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('remark');
            $table->string('comment');
            $table->unsignedBigInteger('requirement_id');
            $table->unsignedBigInteger('document_id');
            $table->unsignedBigInteger('year_id');
            $table->timestamps();

            $table->foreign('requirement_id')->references('id')->on('requirements')->onDelete('cascade');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents_submissions');
    }
};
