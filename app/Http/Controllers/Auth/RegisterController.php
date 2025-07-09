<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    public function showRegistrationForm() {

        return view('auth.register');
    }


    


// public function register(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'first_name' => 'required|string|max:255',
//         'last_name' => 'required|string|max:255',
//         'email' => 'required|email|unique:users,email',
//         'password' => 'required|string|min:8|confirmed',
//     ]);

//     if ($validator->fails()) {
//         return response()->json(['errors' => $validator->errors()], 422);
//     }

//     $user = User::create([
//         'first_name' => $request->first_name,
//         'last_name' => $request->last_name,
//         'email' => $request->email,
//         'password' => bcrypt($request->password),
        
//     ]);

//     Auth::login($user);

//     return redirect('login')->with('success', 'Registration successful!');
// }





public function register(Request $request)
{
    try {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return response()->json([
            'message' => 'Registration successful!',
            'redirect' => route('dashboard')
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Something went wrong.',
            'details' => $e->getMessage()
        ], 500);
    }
}


}
