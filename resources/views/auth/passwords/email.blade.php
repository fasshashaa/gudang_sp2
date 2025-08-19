<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eef4ff;
            background-image: url('{{ asset('images/gal.png') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .login-card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15),
                0 8px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            overflow: hidden;
            display: flex;
            width: 100%;
            max-width: 800px;
            min-height: 500px;
        }

        .login-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2),
                0 10px 15px rgba(0, 0, 0, 0.15);
        }

        .left-side {
            background-color: #6c88bdd4;
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            flex: 1;
        }

        .left-side .logo-container img {
            width: 120px;
            height: 120px;
        }

        .left-side h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 15px;
        }

        .right-side {
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex: 1;
        }

        .right-side h2 {
            font-weight: bold;
            font-size: 2.5rem;
            color: #333;
        }

        .right-side p {
            color: #777;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 50px;
            padding: 12px 20px;
            border: 1px solid #ddd;
        }

        .input-group {
            position: relative;
        }

        .btn-custom {
            background-color: #6C89BD;
            color: white;
            border-radius: 50px;
            padding: 10px 30px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: #7d8fb1;
        }

        .invalid-feedback {
            color: #e3342f;
            display: block; /* To ensure it's always visible when there's an error */
            margin-top: 0.25rem;
            text-align: left;
            padding-left: 20px; /* Aligns with the input field */
        }
        
        .alert-success {
            border-radius: 20px;
        }
        
        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
                min-height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="login-card">
            <div class="left-side">
                <div class="logo-container">
                    <img src="{{ asset('images/nunggal.png') }}" alt="Gudang Sparepart Logo">
                    <h3 class="mt-3">Gudang Sparepart</h3>
                </div>
            </div>

            <div class="right-side">
                <div class="text-center">
                    <h2 class="mb-2">{{ __('Reset Password') }}</h2>
                    <p class="mb-4">Enter your email to receive a password reset link.</p>
                </div>
                
                @if (session('status'))
                <div class="alert alert-success text-center" role="alert" style="width: 100%;">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" style="width: 100%;">
                    @csrf

                    <div class="mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email Address">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-custom">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('login') }}" class="forgot-link">Back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>