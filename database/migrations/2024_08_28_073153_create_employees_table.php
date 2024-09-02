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
        Schema::create('Employees', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name',50);
            $table->string('gender',10);
            $table->date('day_of_birth');
            $table->string('place_of_birth', 50);
            $table->string('address',100);
            $table->string('status', 25);
            $table->date('entry_date');
            // $table->unsignedInteger('id_jabatan'); // Merujuk ke kolom 'id' di tabel 'jabatans'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
