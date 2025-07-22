<?php

namespace App\Http\Controllers\User;

use App\Models\Deposit;
use App\Models\LoanApplication;
use App\Models\Transaction;
use App\Models\Credit;
use App\Models\Debit;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
       //display user dashboard
  public function index()
{


    // Get the currently authenticated user
    $user = Auth::user();

    // Fetch loan history for the user
    $loanhistory = LoanApplication::where('user_id', $user->id)->latest()->get();
        // Load the dashboard view
    $data['credit_transfers']= Transaction::where('user_id',Auth::user()->id)->where('transaction_status','1')->where('transaction_type', 'Credit') ->sum('transaction_amount');
    $data['debit_transfers'] = Transaction::where('user_id', Auth::user()->id)->where('transaction_status', '1') ->where('transaction_type', 'Debit')  ->sum('transaction_amount');// Include only debit transactions->sum('transaction_amount');
    // $data['user_deposits']= Deposit::where('user_id',Auth::user()->id)->where('status','1')->sum('amount');
    $data['user_loans']= LoanApplication::where('user_id',Auth::user()->id)->where('status','1')->sum('loan_amount');
    $data['outstanding_balance']= LoanApplication::where('user_id',Auth::user()->id)->value('outstanding_balance');
    $data['interest_rate'] = LoanApplication::where('user_id', Auth::user()->id)->sum('interest_rate');
    // $data['user_card']= Card::where('user_id',Auth::user()->id)->sum('amount');
    $data['user_credit']= Credit::where('user_id',Auth::user()->id)->where('status','1')->sum('amount');
    $data['user_debit']= Debit::where('user_id',Auth::user()->id)->where('status','1')->sum('amount');
    $data['balance'] = $data['credit_transfers'] - $data['debit_transfers'];

    // Pass loan history to the view
   return view('user.home', array_merge(compact('loanhistory'), $data));

}


public function ApplyLoan() {
    // Get the currently authenticated user
       
    return view('user.apply');

}

public function HelpCenter() {
    // Get the currently authenticated user
       
    return view('user.help');

}

public function Messages() {
    // Get the currently authenticated user
       
    return view('user.messages');

}


}
