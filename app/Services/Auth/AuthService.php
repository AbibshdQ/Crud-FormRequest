<?php

namespace App\Services\Auth;

use LaravelEasyRepository\BaseService;

interface AuthService extends BaseService {
    public function login(array $credentials);
    public function logout();
    public function register(array $data);
}
