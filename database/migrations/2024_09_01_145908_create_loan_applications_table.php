<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nic');
            $table->string('account_no');
            $table->string('citizenship');
            $table->string('email');
            $table->string('contact');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('address_line_3');
            $table->string('postal_code');
            $table->string('district');
            $table->string('province');
            $table->string('employment_sector');
            $table->string('profession');
            $table->string('employment_type');
            $table->decimal('gross_salary', 15, 2);
            $table->decimal('net_salary', 15, 2);
            $table->decimal('other_income', 15, 2);
            $table->string('loan_type');
            $table->string('repayment_method');
            $table->decimal('loan_amount', 15, 2);
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loan_applications');
    }
}
