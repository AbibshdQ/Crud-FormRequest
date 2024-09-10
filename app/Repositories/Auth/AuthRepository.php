<?php


namespace App\Repositories\Auth;

interface AuthRepository {
    public function login(array $credentials);
    public function logout();
    // public function register(array $data);
}
