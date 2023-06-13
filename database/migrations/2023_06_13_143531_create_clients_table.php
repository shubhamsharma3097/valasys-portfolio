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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->text('client_descp')->nullable();
            $table->string('client_img_id',50)->nullable();
            $table->text('client_location')->nullable();
            $table->string('client_email',150)->nullable();
            $table->string('client_contact',100)->nullable();
            $table->text('client_requirement')->nullable();
            $table->string('client_requirement_img',50)->nullable();
            $table->text('client_solution')->nullable();
            $table->string('client_solution_img',50)->nullable();
            $table->enum('client_status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
