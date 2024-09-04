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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name', 50);
            $table->string('gender', 10);
            $table->date('day_of_birth');
            $table->string('place_of_birth', 50);
            $table->string('address', 100);
            $table->string('status', 25);
            $table->date('entry_date');
            $table->unsignedBigInteger('office_id'); // Kolom untuk foreign key ke tabel offices
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['office_id']);
        });

        Schema::dropIfExists('employees');
    }
};
