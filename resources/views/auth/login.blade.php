<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | QuickNest Loans</title>
    <link rel="stylesheet" href="auth/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <a href="index.html" class="logo">
                <img src="assets/logo.png" alt="QuickNest Loans">
                <h1>QuickNest</h1>
            </a>
            <nav class="desktop-nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="loans.html">Loans</a></li>
                    <li><a href="reviews.html">Reviews</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html" class="cta-button">Login</a></li>
                </ul>
            </nav>
            <button class="mobile-nav-toggle">
                <i class="fas fa-bars"></i>
            </button>
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
    <footer>
        <div class="container footer-container">
            <div class="footer-col">
                <h3>QuickNest Loans</h3>
                <p>Providing fast, affordable loan solutions since 2012. We're committed to helping you achieve your financial goals.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="loans.html">Loan Products</a></li>
                    <li><a href="reviews.html">Customer Reviews</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="{{url('register')}}">Register</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Loan Products</h3>
                <ul>
                    <li><a href="loans.html#personal">Personal Loans</a></li>
                    <li><a href="loans.html#business">Business Loans</a></li>
                    <li><a href="loans.html#agriculture">Agriculture Loans</a></li>
                    <li><a href="loans.html#mortgage">Mortgage Loans</a></li>
                    <li><a href="loans.html#auto">Auto Loans</a></li>
                    <li><a href="loans.html#education">Education Loans</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> 123 Finance Street, Suite 200</li>
                    <li><i class="fas fa-city"></i> New York, NY 10001</li>
                    <li><i class="fas fa-phone-alt"></i> (800) 123-4567</li>
                    <li><i class="fas fa-envelope"></i> support@QuickNest.com</li>
                    <li><i class="fas fa-clock"></i> Mon-Fri: 8am-8pm ET</li>
                    <li><i class="fas fa-clock"></i> Sat: 9am-5pm ET</li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2023 QuickNest Financial Services. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> | <a href="#">Licenses</a></p>
            <p>QuickNest is an equal opportunity lender. Loans subject to credit approval. Rates and terms vary based on creditworthiness.</p>
        </div>
    </footer>



    <script>
document.getElementById('loginForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    
    // CSRF token for Laravel
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
            alert(data.message); // Optional
            window.location.href = data.redirect;
        } else {
            // Handle validation errors
            let errorMsg = data.message || "Login failed.";
            if (data.errors) {
                for (const field in data.errors) {
                    errorMsg += `\n- ${data.errors[field].join(", ")}`;
                }
            }
            alert(errorMsg);
        }
    } catch (error) {
        alert("Something went wrong. Please try again.");
        console.error(error);
    }
});
</script>



</body>
</html>