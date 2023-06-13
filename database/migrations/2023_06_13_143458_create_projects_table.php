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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->text('pro_descp')->nullable();
            $table->string('pro_img_id',50)->nullable();
            $table->string('client_id', 50)->nullable();
            $table->date('pro_start')->nullable();
            $table->date('pro_end')->nullable();
            $table->enum('pro_status', ['Active', 'Completed', 'Pending'])->default('Active');
            $table->string('pro_cost', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
