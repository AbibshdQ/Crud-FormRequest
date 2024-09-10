<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\Auth\AuthServiceImplement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthServiceImplement $authService)
    {
        $this->authService = $authService;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if ($this->authService->login($credentials)) {
            $request->session()->regenerate();

            Alert::success('Success', 'Login successful');
            return redirect()->intended('employee');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials. Please try again.',
        ])->withInput();
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $this->authService->register($validated);

        Alert::success('Success', 'Registration successful');
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');   
    }
}
