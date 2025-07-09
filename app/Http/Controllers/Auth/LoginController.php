<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;




class LoginController extends Controller
{
    //

    public function showLoginForm(){

    return view('auth.login');
    }

     public function login(Request $request)
{
    try {
        // Step 1: Validate inputs
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Step 2: Attempt authentication
        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return response()->json([
                'success' => true,
                'message' => 'Login successful!',
                'redirect' => route('user.home') // adjust to your route
            ]);
        }

        // Step 3: Auth failed
        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials.',
            'errors' => [
                'email' => [trans('auth.failed')],
            ]
        ], 422);
        
    } catch (\Exception $e) {
        // Step 4: Catch errors (log if needed)
        return response()->json([
            'success' => false,
            'message' => 'An error occurred during login. Please try again.',
            'error' => config('app.debug') ? $e->getMessage() : null
        ], 500);
    }
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully!');
    }
}
