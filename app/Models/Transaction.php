<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

       protected $fillable = [
        'user_id',
        'transaction_id',
        'transaction_ref',
        'transaction_type',
        'transaction',
        'email',
        'credit',
        'debit',
        'wallet_address',
        'wallet_type',
        'transaction_amount',
        'transaction_description',
        'transaction_status',
    ];




      // Define relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

