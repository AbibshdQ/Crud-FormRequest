<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup Academy</title>
     
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <section class="forms-section">
        <h1 class="section-title">Login & Signup Forms</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>
                <form class="form form-login" method="POST" action="{{ route('login') }}">
                    @csrf
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="login-email" name="email" type="email" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label>
                            <input id="login-password" name="password" type="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login">Login</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
                <form class="form form-signup" method="POST" action="{{ route('register') }}">
                    @csrf
                    <fieldset>
                        <legend>Please, enter your email, password, and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="signup-username">Username</label>
                            <input id="signup-username" name="username" type="text" required value="{{ old('username') }}">
                            @if ($errors->has('username'))
                                <span class="error">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input id="signup-email" name="email" type="email" required value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Password</label>
                            <input id="signup-password" name="password" type="password" required>
                            @if ($errors->has('password'))
                                <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="input-block">
                            <label for="signup-password-confirm">Confirm Password</label>
                            <input id="signup-password-confirm" name="password_confirmation" type="password" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="error">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-signup">Sign Up</button>
                </form>
                
            </div>
        </div>
    </section>
    <!-- Link ke file JavaScript -->
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
