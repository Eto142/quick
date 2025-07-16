<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | QuickNest Loans</title>
    <link rel="stylesheet" href="auth/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <!-- Include Toastr & jQuery (make sure these are above the script block below) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <style>
        /* Additional styles for login page */
        .login-container {
            max-width: 500px;
            margin: 60px auto;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .login-container h2 {
            color: var(--primary);
            margin-bottom: 30px;
            text-align: center;
            font-size: 1.8rem;
        }
        
        .login-options {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 30px;
        }
        
        .social-login {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: 1px solid var(--gray);
            background-color: white;
        }
        
        .social-btn.google {
            color: #DB4437;
        }
        
        .social-btn.facebook {
            color: #4267B2;
        }
        
        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: var(--dark-gray);
        }
        
        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid var(--gray);
        }
        
        .divider::before {
            margin-right: 15px;
        }
        
        .divider::after {
            margin-left: 15px;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .remember-me input {
            width: auto;
        }
        
        .forgot-password {
            color: var(--primary);
            text-decoration: none;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
        .register-link {
            text-align: center;
            margin-top: 20px;
            color: var(--dark-gray);
        }
        
        .register-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="/" class="logo">
                {{-- <img src="assets/logo.png" alt="QuickNest Loans"> --}}
                <h1>QuickNest Loan</h1>
            </a>
        </div>
    </header>


    <!-- Login Form -->
    <main class="container">
        <div class="login-container">
            <h2>Welcome Back</h2>
        <form id="loginForm"> 
    @csrf
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
    </div>
    
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    
    <div class="remember-forgot">
        <div class="remember-me">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember me</label>
        </div>
        <a href="forgot-password.html" class="forgot-password">Forgot password?</a>
    </div>
    
    <button type="submit" class="cta-button" style="width: 100%;">Login</button>
</form>

            <div class="divider"> Ensure no one is looking over your shoulder while logging in</div>
            
           
            
            <div class="register-link">
                Don't have an account? <a href="{{url('register')}}">Register here</a>
            </div>
        </div>
    </main>

  

    <!-- Footer -->



   <script>
document.getElementById('loginForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const token = document.querySelector('input[name="_token"]').value;

    try {
        const response = await fetch("{{ route('login') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token,
                'Accept': 'application/json',
            },
            body: formData
        });

        const data = await response.json();

        if (response.ok && data.success) {
            toastr.success(data.message || 'Login successful! Redirecting...');
            setTimeout(() => {
                window.location.href = data.redirect || "{{ route('user.home') }}";
            }, 1500);
        } else {
            let errorMsg = data.message || 'Login failed.';
            if (data.errors) {
                for (const key in data.errors) {
                    if (data.errors.hasOwnProperty(key)) {
                        toastr.error(data.errors[key][0]);
                    }
                }
            } else {
                toastr.error(errorMsg);
            }
        }

    } catch (error) {
        toastr.error("Something went wrong. Please try again.");
        console.error("Login error:", error);
    }
});
</script>

<!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>
</html>