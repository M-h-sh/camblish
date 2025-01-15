<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Custom styles */
        .container {
            max-width: 500px;
            margin-top: 50px;
        }

        .error-message {
            color: red;
            font-size: 0.875rem;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reset Password</h1>
        
        <!-- Password Reset Form -->
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Hidden token and email fields -->
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="email" name="email" value="{{ $email ?? old('email') }}" required class="form-control">

            <!-- New Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">New Password:</label>
                <input type="password" name="password" id="password" required class="form-control" minlength="8" placeholder="Enter new password">
                
                @error('password')
                    <div class="error-message">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control" placeholder="Confirm your new password">
                
                @error('password_confirmation')
                    <div class="error-message">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <!-- Reset Button -->
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
    </div>

    <!-- Bootstrap 5 JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional: Client-side password confirmation validation -->
    <script>
        const password = document.getElementById('password');
        const passwordConfirmation = document.getElementById('password_confirmation');
        
        document.querySelector('form').addEventListener('submit', function (event) {
            if (password.value !== passwordConfirmation.value) {
                event.preventDefault(); // Prevent form submission
                alert("Passwords do not match. Please confirm your password.");
            }
        });
    </script>
</body>
</html>
