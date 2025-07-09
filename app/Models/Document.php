<?php
// app/Models/Document.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_application_id',
        'type',
        'path',
        'original_name'
    ];

    public function loanApplication()
    {
        return $this->belongsTo(LoanApplication::class);
    }
}