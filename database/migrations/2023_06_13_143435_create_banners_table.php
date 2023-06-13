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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('img_src', 200);
            $table->string('img_dimensions', 50)->nullable();
            $table->string('img_extensions', 50)->nullable();
            $table->enum('img_status', ['Active', 'Inactive'])->default('Active');
            $table->text('img_descp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
