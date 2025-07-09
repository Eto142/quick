<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | QuickNest Loans</title>
    <link rel="stylesheet" href="auth/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <style>
        /* Additional styles for registration page */
        .register-container {
            max-width: 600px;
            margin: 60px auto;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .register-container h2 {
            color: var(--primary);
            margin-bottom: 30px;
            text-align: center;
            font-size: 1.8rem;
        }
        
        .form-row {
            display: flex;
            gap: 20px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .password-strength {
            margin-top: 5px;
            height: 5px;
            background-color: var(--gray);
            border-radius: 5px;
            overflow: hidden;
        }
        
        .password-strength-bar {
            height: 100%;
            width: 0%;
            background-color: var(--primary);
            transition: width 0.3s;
        }
        
        .password-requirements {
            margin-top: 10px;
            font-size: 0.9rem;
            color: var(--dark-gray);
        }
        
        .password-requirements ul {
            padding-left: 20px;
            margin-top: 5px;
        }
        
        .password-requirements li {
            margin-bottom: 5px;
        }
        
        .password-requirements .valid {
            color: var(--primary);
        }
        
        .password-requirements .valid::before {
            content: "✓ ";
        }
        
        .login-link {
            text-align: center;
            margin-top: 20px;
            color: var(--dark-gray);
        }
        
        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        .terms-agreement {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 20px 0;
        }
        
        .terms-agreement input {
            margin-top: 3px;
        }
        
        .terms-agreement label {
            font-size: 0.9rem;
            color: var(--dark-gray);
        }
        
        .terms-agreement label a {
            color: var(--primary);
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
                    <li><a href="{{route('login')}}" class="cta-button">Login</a></li>
                </ul>
            </nav>
            <button class="mobile-nav-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Registration Form -->
    <main class="container">
        <div class="register-container">
            <h2>Create Your Account</h2>
            
<!-- Include Toastr & jQuery (make sure these are above the script block below) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<form id="registerForm">
    @csrf
    <div class="form-row">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="last_name" required>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="password_confirmation" required>
    </div>
    <div class="terms-agreement">
        <input type="checkbox" id="terms">
        <label for="terms">I agree to the Terms of Service and Privacy Policy</label>
    </div>
    <button type="submit" class="cta-button" style="width: 100%;">Create Account</button>
</form>

<div id="registerMessage"></div>



<script>
    $(document).ready(function () {
        $('#registerForm').on('submit', function (e) {
            e.preventDefault();

            let formData = $(this).serialize();

            $.ajax({
                url: "{{ route('register') }}",
                type: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function (response) {
                    toastr.success(response.message || 'Registration successful! Redirecting...');
                    setTimeout(function () {
                        window.location.href = response.redirect || "{{ route('login') }}";
                    }, 2000);
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        toastr.error(xhr.responseJSON?.error || 'Something went wrong.');
                        console.error(xhr.responseJSON?.details);
                    }
                }
            });
        });
    });
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



            
            <div class="login-link">
                Already have an account? <a href="{{route('login')}}">Login here</a>
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
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="register.html">Register</a></li>
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
            <p>&copy; 2023 QuickNest Financial Services. All rights reserved. | <a href="terms.html">Terms of Service</a> | <a href="privacy.html">Privacy Policy</a> | <a href="#">Licenses</a></p>
            <p>QuickNest is an equal opportunity lender. Loans subject to credit approval. Rates and terms vary based on creditworthiness.</p>
        </div>
    </footer>

    <script>
        // Mobile Navigation Toggle
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        const header = document.querySelector('header');
        
        mobileNavToggle.addEventListener('click', () => {
            header.classList.toggle('nav-open');
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