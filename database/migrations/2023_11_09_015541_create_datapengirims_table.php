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
        Schema::create('datapengirims', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->string('alamat',100)->nullable(true);
            $table->string('telepon',30);
            $table->enum('gender',['Pria','Wanita'])->default('Pria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapengirims');
    }
};
