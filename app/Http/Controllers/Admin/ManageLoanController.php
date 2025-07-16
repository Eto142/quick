<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LoanApplication;
use Illuminate\Http\Request;

class ManageLoanController extends Controller
{
    //
     public function UsersLoans (){
          $user_loans = LoanApplication::where('user_id', auth()->id())
                                  ->orderBy('created_at', 'desc')
                                  ->paginate(10); // or whatever number you prefer
        return view('admin.manage_loans', compact('user_loans'));

    }
}
