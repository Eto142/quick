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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('user_id');
            $table->string('transaction_id')->nullable();
            $table->string('transaction_ref')->nullable();
            $table->string('transaction_type')->nullable();
            $table->string('transaction')->nullable();
            $table->string('email')->nullable();
            $table->decimal('credit', 15, 2)->nullable();
            $table->decimal('debit', 15, 2)->nullable();
            $table->string('wallet_address')->nullable();
            $table->string('wallet_type')->nullable();
            $table->decimal('transaction_amount', 15, 2)->nullable();
            $table->decimal('outstanding_balance', 15, 2)->nullable();
            $table->decimal('monthly_payment', 15, 2)->nullable();
            $table->decimal('interest_rate', 15, 2)->nullable();
            $table->text('transaction_description')->nullable();
            $table->tinyInteger('transaction_status')->default(0)->comment('0=pending, 1=approved');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
