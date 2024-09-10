<?php

namespace App\Repositories\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthRepositoryImplement implements AuthRepository {

    public function login(array $credentials) {
        return Auth::attempt($credentials);
    }

    public function logout() {
        Auth::logout();
    }

    public function register(array $data) {
        return User::create($data);
    }
}
