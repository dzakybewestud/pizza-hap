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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->nullable();
            $table->string('nama_user')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();

            $table->bigInteger('id_menu')->nullable();
            $table->string('nama_menu')->nullable();
            $table->integer('kuantitas')->nullable();
            $table->integer('harga')->nullable();
            $table->string('delivery_status')->nullable()->default('processing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
