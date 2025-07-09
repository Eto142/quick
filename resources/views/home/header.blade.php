<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickNest Loans | FDIC-Insured Lending Solutions</title>
    <meta name="description" content="FDIC-insured personal, business, and agriculture loans with real-time Equifax credit monitoring. Get approved fast with competitive rates.">
    
    <!-- Favicon -->
    <link rel="icon" href="https://via.placeholder.com/32x32" type="image/x-icon">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #1a5632;  /* Dark Green */
            --primary-light: #2d7d46;
            --secondary: #f8f8f8; /* Off-White */
            --dark: #0d2818; /* Darker Green */
            --light: #ffffff; /* Pure White */
            --accent: #d4af37; /* Gold Accent */
            --text: #333333;
            --text-light: #666666;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.12);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 25px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
            --radius: 8px;
            --radius-lg: 12px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: var(--text);
            background-color: var(--light);
            overflow-x: hidden;
            font-size: 16px;
        }
        
        .container {
            width: 100%;
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Trust Badges */
        .trust-badges {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
            padding: 20px 0;
            background-color: rgba(26, 86, 50, 0.05);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        .trust-badge {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .trust-badge img {
            height: 40px;
            width: auto;
        }
        
        .trust-badge span {
            font-size: 0.85rem;
            color: var(--text-light);
        }
        
        /* Badge Styles */
        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .badge-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .badge-accent {
            background-color: var(--accent);
            color: var(--dark);
        }
        
        /* Credit Score Widget */
        .credit-widget {
            background-color: white;
            border-radius: var(--radius);
            padding: 20px;
            box-shadow: var(--shadow-sm);
            margin: 20px 0;
            border: 1px solid #eee;
        }
        
        .credit-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .credit-provider {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            color: var(--text-light);
        }
        
        .credit-provider img {
            height: 20px;
        }
        
        .credit-score {
            text-align: center;
            margin: 20px 0;
        }
        
        .score-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }
        
        .score-range {
            height: 6px;
            background: linear-gradient(to right, #ff0000, #ff9900, #33cc33, #0099ff);
            border-radius: 3px;
            margin: 10px 0;
            position: relative;
        }
        
        .score-marker {
            position: absolute;
            top: -5px;
            width: 16px;
            height: 16px;
            background-color: white;
            border: 3px solid var(--primary);
            border-radius: 50%;
            transform: translateX(-50%);
        }
        
        .score-labels {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: var(--text-light);
        }
        
        .credit-details {
            margin-top: 20px;
            font-size: 0.9rem;
        }
        
        .credit-details p {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }
        
        .credit-details span:last-child {
            font-weight: 500;
        }
        
        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            line-height: 1.2;
            font-weight: 700;
            color: var(--dark);
        }
        
        h1 { font-size: 2.5rem; }
        h2 { font-size: 2rem; }
        h3 { font-size: 1.75rem; }
        h4 { font-size: 1.5rem; }
        
        p {
            color: var(--text-light);
            margin-bottom: 1rem;
        }
        
        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }
        
        img {
            max-width: 100%;
            height: auto;
        }
        
        /* Buttons */
        .btn {
            display: inline-block;
            padding: 12px 28px;
            border-radius: var(--radius);
            font-weight: 600;
            font-size: 1rem;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            border: 2px solid transparent;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-light);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        
        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border-color: var(--primary);
        }
        
        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-lg {
            padding: 16px 32px;
            font-size: 1.1rem;
        }
        
        /* Header Styles */
        header {
            background-color: var(--light);
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            height: 80px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .logo img {
            height: 48px;
            width: auto;
        }
        
        .logo-text {
            display: flex;
            flex-direction: column;
        }
        
        .logo h1 {
            color: var(--primary);
            font-size: 1.75rem;
            font-weight: 700;
            line-height: 1;
        }
        
        .logo span {
            font-size: 0.75rem;
            color: var(--text-light);
            letter-spacing: 1px;
        }
        
        /* Navigation */
        .desktop-nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
            align-items: center;
        }
        
        .desktop-nav ul li a {
            color: var(--text);
            font-weight: 500;
            position: relative;
            padding: 5px 0;
        }
        
        .desktop-nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: var(--transition);
        }
        
        .desktop-nav ul li a:hover::after {
            width: 100%;
        }
        
        .desktop-nav ul li a:hover {
            color: var(--primary);
        }
        
        /* Mobile Nav Toggle */
        .mobile-nav-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--primary);
            cursor: pointer;
            z-index: 1002;
        }
        
        /* Mobile Nav */
        .mobile-nav {
            position: fixed;
            top: 0;
            left: -100%;
            width: 85%;
            max-width: 320px;
            height: 100vh;
            background-color: var(--light);
            box-shadow: 2px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 1001;
            transition: left 0.4s ease;
            padding: 30px;
            overflow-y: auto;
        }
        
        .mobile-nav.active {
            left: 0;
        }
        
        .mobile-nav-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        
        .mobile-nav ul {
            list-style: none;
        }
        
        .mobile-nav ul li {
            margin-bottom: 15px;
        }
        
        .mobile-nav ul li a {
            display: block;
            padding: 12px 15px;
            border-radius: var(--radius);
            font-size: 1.1rem;
            color: var(--text);
            transition: var(--transition);
        }
        
        .mobile-nav ul li a:hover {
            background-color: rgba(26, 86, 50, 0.1);
            color: var(--primary);
        }
        
        .mobile-nav-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }
        
        .mobile-nav-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            padding: 120px 0 100px;
            text-align: center;
            position: relative;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: white;
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 1.25rem;
            margin: 0 auto 40px;
            opacity: 0.9;
            color: rgba(255,255,255,0.9);
            max-width: 700px;
        }
        
        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        /* Features Section */
        .features {
            padding: 80px 0;
            background-color: var(--light);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .feature-card {
            background-color: white;
            border-radius: var(--radius-lg);
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background-color: rgba(26, 86, 50, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: var(--primary);
            font-size: 2rem;
        }
        
        .feature-card h3 {
            margin-bottom: 15px;
            font-size: 1.4rem;
        }
        
        /* Loan Types Carousel */
        .loan-types {
            padding: 80px 0;
            background-color: var(--secondary);
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h2 {
            color: var(--primary);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent);
        }
        
        .section-header p {
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }
        
        .loan-type-slide {
            background-color: white;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            margin: 10px;
            height: 100%;
        }
        
        .loan-type-slide:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }
        
        .loan-type-img {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .loan-type-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(26, 86, 50, 0.7));
        }
        
        .loan-type-content {
            padding: 25px;
        }
        
        .loan-type-content h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }
        
        .loan-type-content p {
            margin-bottom: 20px;
        }
        
        .swiper-pagination-bullet-active {
            background-color: var(--primary) !important;
        }
        
        /* Loan Calculator Section */
        .loan-calculator-section {
            padding: 80px 0;
            background-color: white;
        }
        
        .loan-calculator {
            background-color: var(--secondary);
            border-radius: var(--radius-lg);
            padding: 50px;
            max-width: 1000px;
            margin: 0 auto;
            box-shadow: var(--shadow-sm);
        }
        
        .calculator-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        
        .calculator-form {
            padding-right: 20px;
        }
        
        .calculator-results {
            background-color: white;
            border-radius: var(--radius-lg);
            padding: 30px;
            box-shadow: var(--shadow-sm);
            display: flex;
            flex-direction: column;
        }
        
        .result-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        
        .result-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        
        .result-label {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        
        .result-value {
            color: var(--primary);
            font-size: 1.5rem;
            font-weight: 700;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: var(--dark);
            font-weight: 500;
            font-size: 0.95rem;
        }
        
        .form-control {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #ddd;
            border-radius: var(--radius);
            font-size: 1rem;
            transition: var(--transition);
            background-color: white;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(26, 86, 50, 0.2);
            outline: none;
        }
        
        .range-slider {
            width: 100%;
            margin-top: 10px;
            height: 8px;
            -webkit-appearance: none;
            background: #ddd;
            border-radius: 4px;
        }
        
        .range-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            background: var(--primary);
            border-radius: 50%;
            cursor: pointer;
        }
        
        .range-values {
            display: flex;
            justify-content: space-between;
            margin-top: 8px;
            color: var(--text-light);
            font-size: 0.85rem;
        }
        
        /* Loan Products Section */
        .loan-products {
            padding: 80px 0;
            background-color: var(--secondary);
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .product-card {
            background-color: white;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }
        
        .product-img {
            height: 220px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .product-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(26, 86, 50, 0.6));
        }
        
        .product-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: var(--primary);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            z-index: 2;
            box-shadow: var(--shadow-md);
        }
        
        .product-content {
            padding: 30px;
        }
        
        .product-content h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .product-features {
            margin: 20px 0;
            padding-left: 20px;
        }
        
        .product-features li {
            margin-bottom: 10px;
            color: var(--text-light);
            position: relative;
            padding-left: 25px;
        }
        
        .product-features li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--primary);
        }
        
        /* Stats Section */
        .stats {
            padding: 100px 0;
            background: linear-gradient(rgba(26, 86, 50, 0.9), rgba(26, 86, 50, 0.9)), 
                        url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }
        
        .stat-item {
            padding: 30px 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: var(--radius);
            backdrop-filter: blur(5px);
            transition: var(--transition);
        }
        
        .stat-item:hover {
            transform: translateY(-5px);
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .stat-item h3 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: white;
        }
        
        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.9;
            color: rgba(255,255,255,0.9);
        }
        
        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background-color: white;
        }
        
        .testimonial-slide {
            background-color: var(--secondary);
            padding: 40px;
            border-radius: var(--radius-lg);
            margin: 15px;
            box-shadow: var(--shadow-sm);
            position: relative;
        }
        
        .testimonial-quote {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 60px;
            color: var(--primary);
            opacity: 0.1;
            font-family: serif;
            line-height: 1;
        }
        
        .testimonial-content {
            margin-bottom: 30px;
            color: var(--text);
            font-size: 1.1rem;
            line-height: 1.8;
            position: relative;
            padding-top: 30px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-right: 20px;
            overflow: hidden;
            flex-shrink: 0;
            border: 3px solid var(--primary);
        }
        
        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-info h4 {
            color: var(--dark);
            margin-bottom: 5px;
            font-size: 1.1rem;
        }
        
        .author-info p {
            color: var(--text-light);
            font-size: 0.9rem;
        }
        
        .rating {
            color: var(--accent);
            margin-top: 5px;
            font-size: 0.9rem;
        }
        
        /* CTA Section */
        .cta {
            padding: 100px 0;
            background-color: var(--primary);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .cta::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
        }
        
        .cta::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 300px;
            height: 300px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
        }
        
        .cta .container {
            position: relative;
            z-index: 1;
        }
        
        .cta h2 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta p {
            max-width: 700px;
            margin: 0 auto 40px;
            font-size: 1.2rem;
            opacity: 0.9;
            color: rgba(255,255,255,0.9);
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 80px 0 30px;
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .footer-col h3 {
            color: white;
            margin-bottom: 25px;
            font-size: 1.3rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent);
        }
        
        .footer-col p {
            color: rgba(255,255,255,0.7);
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links li a {
            color: rgba(255,255,255,0.7);
            transition: var(--transition);
            font-size: 0.95rem;
            display: block;
            padding: 5px 0;
        }
        
        .footer-links li a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .contact-info {
            list-style: none;
        }
        
        .contact-info li {
            margin-bottom: 15px;
            padding-left: 25px;
            position: relative;
            color: rgba(255,255,255,0.7);
            font-size: 0.95rem;
        }
        
        .contact-info li i {
            position: absolute;
            left: 0;
            top: 5px;
            color: var(--accent);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }
        
        .social-links a {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background-color: var(--primary-light);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255,255,255,0.5);
            font-size: 0.9rem;
        }
        
        .footer-bottom a {
            color: rgba(255,255,255,0.7);
            transition: var(--transition);
        }
        
        .footer-bottom a:hover {
            color: white;
            text-decoration: underline;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 999;
            box-shadow: var(--shadow-md);
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: var(--primary-light);
            transform: translateY(-5px);
        }
        
        /* Responsive Styles */
        @media (max-width: 1200px) {
            .container {
                max-width: 1140px;
            }
            
            h1 { font-size: 2.2rem; }
            h2 { font-size: 1.8rem; }
        }
        
        @media (max-width: 992px) {
            .container {
                max-width: 960px;
            }
            
            .calculator-grid {
                grid-template-columns: 1fr;
            }
            
            .calculator-form {
                padding-right: 0;
            }
            
            .calculator-results {
                margin-top: 30px;
            }
            
            .desktop-nav {
                display: none;
            }
            
            .mobile-nav-toggle {
                display: block;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 768px) {
            .container {
                max-width: 720px;
            }
            
            .trust-badges {
                gap: 15px;
                padding: 15px 0;
            }
            
            .trust-badge {
                flex: 1 1 120px;
                justify-content: center;
                text-align: center;
                flex-direction: column;
            }
            
            .trust-badge img {
                height: 30px;
            }
            
            .trust-badge span {
                font-size: 0.7rem;
            }
            
            .hero {
                padding: 100px 0 80px;
                background-attachment: scroll;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .hero-buttons .btn {
                width: 100%;
                max-width: 280px;
            }
            
            .loan-calculator {
                padding: 30px;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
            }
            
            .testimonial-slide {
                padding: 30px;
            }
            
            .cta h2 {
                font-size: 2rem;
            }
            
            .cta p {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                max-width: 540px;
                padding: 0 15px;
            }
            
            .header-container {
                height: 70px;
            }
            
            .logo h1 {
                font-size: 1.5rem;
            }
            
            .logo img {
                height: 40px;
            }
            
            .hero {
                padding: 80px 0 60px;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .section-header h2 {
                font-size: 1.6rem;
            }
            
            .loan-calculator {
                padding: 25px;
            }
            
            .stat-item h3 {
                font-size: 2.5rem;
            }
            
            .footer-container {
                grid-template-columns: 1fr;
            }
            
            .footer-col {
                margin-bottom: 30px;
            }
            
            .footer-col:last-child {
                margin-bottom: 0;
            }
        }
        
        @media (max-width: 400px) {
            .hero h1 {
                font-size: 1.6rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .feature-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="https://via.placeholder.com/45x45" alt="QuickNest Loans Logo">
                <div class="logo-text">
                    <h1>QuickNest</h1>
                    <span>FDIC-INSURED BANKING</span>
                </div>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="desktop-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#loans">Loans</a></li>
                    <li><a href="#calculator">Calculator</a></li>
                    <li><a href="#credit">Credit Score</a></li>
                    <li><a href="#testimonials">Reviews</a></li>
                    <li><a href="#" class="btn btn-primary">Apply Now</a></li>
                </ul>
            </nav>
            
            <!-- Mobile Navigation Toggle -->
            <button class="mobile-nav-toggle" id="mobileNavToggle">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Mobile Navigation -->
            <div class="mobile-nav" id="mobileNav">
                <div class="mobile-nav-header">
                    <div class="logo">
                        <img src="https://via.placeholder.com/40x40" alt="QuickNest Loans Logo">
                        <h1>QuickNest</h1>
                    </div>
                    <button class="mobile-nav-toggle" id="mobileNavClose">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#loans">Loans</a></li>
                        <li><a href="#calculator">Calculator</a></li>
                        <li><a href="#credit">Credit Score</a></li>
                        <li><a href="#testimonials">Reviews</a></li>
                        <li><a href="#" class="btn btn-primary">Apply Now</a></li>
                    </ul>
                </nav>
            </div>
            <div class="mobile-nav-overlay" id="mobileNavOverlay"></div>
        </div>
    </header>
