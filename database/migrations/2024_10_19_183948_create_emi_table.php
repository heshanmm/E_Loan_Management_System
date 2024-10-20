<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('emis', function (Blueprint $table) {
        $table->id();
        $table->string('nic');
        $table->decimal('principal', 15, 2);
        $table->decimal('interest_rate', 5, 2);
        $table->integer('term');
        $table->decimal('emi_amount', 15, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emi');
    }
};
