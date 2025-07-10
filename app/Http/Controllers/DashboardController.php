<?php

namespace App\Http\Controllers;

use App\Models\LoanApplication;
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

    // Pass loan history to the view
    return view('user.home', compact('loanhistory'));
}


public function ApplyLoan() {
    // Get the currently authenticated user
       
    return view('user.apply');

}

public function HelpCenter() {
    // Get the currently authenticated user
       
    return view('user.help');

}


}
