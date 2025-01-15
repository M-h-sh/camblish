      
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://camblish.co.za/wp-content/uploads/2023/02/1.-Camblish-Orginal-Logo-1418x1536.png">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">


    <div class="container">
        <div class="card border border-0">
        <div class="text-center">
                <img src="https://camblish.co.za/wp-content/uploads/2023/02/1.-Camblish-Orginal-Logo-1418x1536.png" alt="Camblish Logo" class="img-fluid w-25">
                <h2 class="fw-bold">Freelancer</h2>
            </div>
            <h2 class="text-center">Join Freelancer</h2>

            <!-- Social Login Divs -->
             <div class="d-grid gap-3 mb-4">
                    <a href="{{ route('auth.google') }}" class="btn border border-1 btn-outline-danger  d-flex align-items-center">
                    <i class="fa-brands fa-google me-4"></i>
                        {{ __('Continue with Google') }}
                    </a>
                    <a href="{{ route('auth.facebook') }}" class="btn border border-1 btn-outline-primary d-flex align-items-center">
                    <i class="fa-brands fa-facebook me-4" ></i> 
                        {{ __('Continue with Facebook') }}
                    </a>
                </div>
            

            <!-- Divider -->
            <div class="divider">
                <span>OR</span>
            </div>

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <div class="mb-3">
                    <input id="name" name="name" type="text" class="form-control" placeholder="Full Name" required>
                    @error('name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email Address" required>
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">Register</button>
            </form>

           <!-- <div class="divider" ></div> -->
          
            <!-- Login Link -->
            <p class="text-center mt-3">
                Already have an account? <a href="{{ route('login') }}" class="text-primary">Log in</a>
            </p>
        </div>
    </div>

