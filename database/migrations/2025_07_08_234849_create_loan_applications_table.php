<?php

// database/migrations/[timestamp]_create_loan_applications_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('user_id');
            // Optional: set up foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('loan_type');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('ssn');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('employment_status');
            $table->decimal('annual_income', 12, 2);
            $table->string('employer_name')->nullable();
            $table->integer('years_at_job')->nullable();
            $table->decimal('monthly_housing_payment', 12, 2)->nullable();
            $table->decimal('other_monthly_debt', 12, 2)->nullable();
            $table->string('credit_score_range')->nullable();
            $table->string('banking_relationship')->nullable();
            $table->decimal('loan_amount', 12, 2);
            $table->decimal('outstanding_balance', 12, 2)->nullable();
            $table->decimal('monthly_payment', 12, 2)->nullable();
            $table->integer('loan_term_months')->nullable();
            $table->decimal('interest_rate', 5, 2)->nullable();
            $table->string('loan_purpose')->nullable();
            $table->text('additional_details')->nullable();
            $table->tinyInteger('status')->default(0); // 0 = pending, 1 = approved
            $table->string('reference_number')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loan_applications');
    }
};

