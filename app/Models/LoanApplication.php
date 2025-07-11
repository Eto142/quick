<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class LoanApplication extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $fillable = [
    'user_id','loan_type', 'first_name', 'last_name', 'date_of_birth', 'ssn', 'phone', 'email',
    'address', 'city', 'state', 'zip_code', 'employment_status', 'annual_income', 'loan_amount',
    'employer_name', 'years_at_job','credit_score_range', 'reference_number',
];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'ssn', // Hide SSN by default when serializing
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'date_of_birth' => 'date',
        'agree_terms' => 'boolean',
        'agree_credit' => 'boolean',
        'agree_electronic' => 'boolean',
        'annual_income' => 'decimal:2',
        'monthly_housing_payment' => 'decimal:2',
        'other_debt' => 'decimal:2',
    ];

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function ssn(): Attribute
    {
        return Attribute::make(
            // Only show last 4 digits when accessing
            get: fn ($value) => '***-**-' . substr($value, -4),
            // Store the full value
            set: fn ($value) => $value,
        );
    }

    /**
     * Scope a query to only include pending applications.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope a query to only include approved applications.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    /**
     * Scope a query to only include rejected applications.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }

    /**
     * Get the full name of the applicant.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Get the applicant's age.
     *
     * @return int
     */
    public function getAgeAttribute()
    {
        return $this->date_of_birth->age;
    }
}