<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('title');
            $table->string('name');
            $table->string('nic')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->date('dob');
            $table->enum('citizenship', ['srilankan', 'other']);
            $table->enum('civil_status', ['married', 'unmarried', 'other']);
            $table->string('email')->unique();
            $table->string('contact');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('address_line_3')->nullable();
            $table->string('postal_code');
            $table->string('district');
            $table->string('province');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
