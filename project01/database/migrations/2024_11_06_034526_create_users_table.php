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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('photo');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('name_with_initials');
            $table->string('date');
            $table->string('reg_number');
            $table->string('email');
            $table->string('phone_number');
            $table->string('whatsapp_number');
            $table->string('nic');
            $table->string('street_line1');
            $table->string('street_line2');
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->string('gender');
            $table->string('status');
            $table->string('start_date');
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
