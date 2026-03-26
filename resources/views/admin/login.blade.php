<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset("images/circuit-bg2.png") }}') center/cover no-repeat;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 40px 30px;
            background: rgba(0,0,0,0.8); /* dark techy card */
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0,255,255,0.4); /* cyan glow */
            color: #fff;
        }

        .login-card h3 {
            margin-top: 15px;
            margin-bottom: 25px;
            text-align: center;
            color: #0ff; /* neon cyan text */
            font-weight: bold;
            text-shadow: 0 0 8px #0ff;
        }

        .login-card img.logo {
            display: block;
            margin: 0 auto 15px auto;
            width: 100px;
            height: auto;
        }

        .login-card .btn-dark {
            width: 100%;
            background: #0ff;
            color: #000;
            font-weight: bold;
            border: none;
            transition: 0.3s;
        }

        .login-card .btn-dark:hover {
            background: #00bcd4;
            color: #fff;
        }

        .input-group-text {
            background: transparent;
            border-left: 0;
            cursor: pointer;
            color: #0ff;
        }

        .form-control {
            background: rgba(255,255,255,0.05);
            color: #fff;
            border: 1px solid #0ff;
        }

        .form-control::placeholder {
            color: rgba(255,255,255,0.6);
        }

        .form-control:focus {
            box-shadow: 0 0 5px #0ff;
            border-color: #0ff;
        }

        .alert {
            background-color: rgba(255,0,0,0.6);
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>

<div class="login-card">
    {{-- Logo --}}
    <img src="{{ asset('images/jifa-logo.png') }}" alt="Logo" class="logo">

    <h3>Admin Login</h3>

    {{-- Display validation errors --}}
    @if($errors->any())
        <div class="alert">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required autofocus value="{{ old('email') }}" placeholder="Enter your email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <input type="password" name="password" id="password" class="form-control" required placeholder="Enter your password">
                <span class="input-group-text" id="togglePassword">
                    <i class="bi bi-eye-slash"></i>
                </span>
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <button type="submit" class="btn btn-dark">Login</button>
    </form>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const icon = togglePassword.querySelector('i');

    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        icon.classList.toggle('bi-eye');
        icon.classList.toggle('bi-eye-slash');
    });
</script>

</body>
</html>