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
        Schema::create('registrations', function (Blueprint $table) {
            //$table->integer("id_pendaftaran")->primary();
            $table->id();
            $table->integer("user_id");
            $table->integer('noidentitas');
            $table->string('no_telp', 16);
            $table->string('paymentProof');
            $table->string('sumberInfo');
            $table->timestamps();

       //    $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
