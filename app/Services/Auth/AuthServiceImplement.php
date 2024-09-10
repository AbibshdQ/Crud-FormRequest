<?php

namespace App\Services\Auth;

use App\Repositories\Auth\AuthRepository;
use Illuminate\Support\Facades\Hash;
use LaravelEasyRepository\ServiceApi;

class AuthServiceImplement extends ServiceApi implements AuthService {

    protected $repository;

    public function __construct(AuthRepository $repository) {
        $this->repository = $repository;
    }

    public function login(array $credentials) {
        return $this->repository->login($credentials);
    }

    public function logout() {
        return $this->repository->logout();
    }

    public function register(array $data) {
        return $this->repository->register([
            'name' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
