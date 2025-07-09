<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
       //display user dashboard
   public function index() {
    // Get the currently authenticated user
       
    return view('user.home');

}

public function ApplyLoan() {
    // Get the currently authenticated user
       
    return view('user.apply');

}
}
