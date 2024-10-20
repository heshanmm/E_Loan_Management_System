<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('nic')->unique();
            $table->decimal('principal', 15, 2);
            $table->decimal('rate_of_interest', 5, 2);
            $table->integer('tenure');
            $table->decimal('emi', 15, 2);
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
