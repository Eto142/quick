<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\LoanApplication;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class LoanApplicationController extends Controller
{
    // Show the loan application form
    public function create()
    {
        return view('loan-application'); // Your blade view name
    }



     public function LoanHistory()
    {
        // Get the currently authenticated user
         $user = Auth::user();
         $loanhistory = LoanApplication::where('user_id', $user->id)->latest()->get();

        return view('user.loan-history', compact('loanhistory')); // Your blade view name
    }


    // show the profile page
      public function Profile()
    {
        return view('user.profile'); // Your blade view name
    }





    // store loan requests

public function store(Request $request)
{
    $validated = $request->validate([
        'loan_type' => 'required|in:personal,auto,home,business',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'date_of_birth' => 'required|date|before:-18 years',
        'ssn' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'address' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'state' => 'required|string|max:2',
        'zip_code' => 'required|string|max:10',
        'employment_status' => 'required|in:employed,part-time,self-employed,unemployed,retired,student',
        'loan_amount' => 'required|numeric|min:1000',
        'annual_income' => 'required|numeric|min:0',
        'employer_name' => 'nullable|string|max:255',
        'years_at_job' => 'nullable|integer|min:0|max:50',
        'credit_score_range' => 'nullable|in:excellent,good,fair,poor,bad,unknown',
        'agree_terms' => 'required|accepted',
        'agree_credit' => 'required|accepted',
    ]);

    $user = auth()->user();
    $ref = strtoupper(Str::random(10));

    $validated['user_id'] = $user->id;
    $validated['reference_number'] = 'LA-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6));

    $application = LoanApplication::create($validated);

    $transaction = new Transaction();
    $transaction->user_id = $user->id;
    $transaction->transaction_id = $ref;
    $transaction->transaction_ref = "LN" . $ref;
    $transaction->transaction_type = "Credit";
    $transaction->debit = 0;
    $transaction->credit = $validated['loan_amount'];
    $transaction->transaction = "Loan";
    $transaction->transaction_amount = $validated['loan_amount'];
    $transaction->transaction_description = "Loan Request of " . $validated['loan_amount'];
    $transaction->transaction_status = 0; // pending
    $transaction->save();

    session()->put('loan_application_id', $application->id);

    return redirect()->route('user.loan.application.success')
                     ->with('success', 'Your loan application has been submitted successfully!');
}


    public function success(){

    $applicationId = session()->get('loan_application_id');

    $application = LoanApplication::find($applicationId);

    if (!$application) {
        return redirect()->route('user.home')->with('error', 'No loan application found.');
    }

    return view('user.loan-application-success', compact('application'));
}

}