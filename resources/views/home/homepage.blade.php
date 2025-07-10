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
                {{-- <img src="https://via.placeholder.com/45x45" alt="QuickNest Loans Logo"> --}}
                <div class="logo-text">
                    <h1>QuickNest loans</h1>
                    {{-- <span>FDIC-INSURED</span> --}}
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
                        {{-- <img src="https://via.placeholder.com/40x40" alt="QuickNest Loans Logo"> --}}
                        <h1>QuickNest Loans</h1>
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

    <!-- Trust Badges -->
<!--     <div class="trust-badges">
        <div class="trust-badge">
            <img src="https://www.fdic.gov/resources/bankers/asset-quality/quarterly-banking-profile/images/fdic-logo.png" alt="FDIC Insured">
            <span>FDIC Insured</span>
        </div>
        <div class="trust-badge">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Equifax_logo_black.svg/1200px-Equifax_logo_black.svg.png" alt="Equifax Verified">
            <span>Equifax Verified</span>
        </div>
        <div class="trust-badge">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Credit_Karma_logo.svg/2560px-Credit_Karma_logo.svg.png" alt="Credit Karma Partner">
            <span>Credit Karma Partner</span>
        </div>
       
    </div> -->

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="badge badge-accent">FDIC Insured</span>
                <h1>Smart Financing for Your Dreams</h1>
                <p>Get FDIC-insured personal, business, and agriculture loans with competitive rates. Check your Equifax credit score for free with no impact.</p>
                
                <div class="hero-buttons">
                    <a href="{{route('register')}}" class="btn btn-primary btn-lg">Get Pre-Approved</a>
                    <a href="{{route('login')}}" class="btn btn-outline btn-lg">Access Account</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose QuickNest</h2>
                <p>We provide exceptional service with these key benefits</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Fast Approval</h3>
                    <p>Get decisions in as little as 24 hours with our streamlined application process.</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fas fa-percent"></i>
                    </div>
                    <h3>Low Rates</h3>
                    <p>Competitive interest rates that save you money over the life of your loan.</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Trusted Security</h3>
                    <p>Your data is protected with bank-level encryption and security protocols.</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Dedicated Support</h3>
                    <p>Real people ready to help you through every step of the process.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Credit Score Section -->
    <section class="loan-calculator-section" id="credit">
        <div class="container">
            <div class="section-header">
                <h2>Your Credit Score</h2>
                <p>Check your Equifax credit score for free with no impact</p>
            </div>
            
            <div class="loan-calculator">
                <div class="calculator-grid">
                    <div class="calculator-form">
                        <div class="credit-widget" data-aos="fade-right">
                            <div class="credit-header">
                                <h3>Equifax Credit Score</h3>
                                <div class="credit-provider">
                                    <span>Powered by</span>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Equifax_logo_black.svg/1200px-Equifax_logo_black.svg.png" alt="Equifax">
                                </div>
                            </div>
                            
                            <div class="credit-score">
                                <div class="score-number" id="creditScore">720</div>
                                <div class="score-label">Good Credit</div>
                                <div class="score-range">
                                    <div class="score-marker" style="left: 72%;"></div>
                                </div>
                                <div class="score-labels">
                                    <span>300</span>
                                    <span>600</span>
                                    <span>750</span>
                                    <span>850</span>
                                </div>
                            </div>
                            
                            <div class="credit-details">
                                <p>
                                    <span>Last updated</span>
                                    <span>Today</span>
                                </p>
                                <p>
                                    <span>Credit factors</span>
                                    <span>4/5 positive</span>
                                </p>
                                <p>
                                    <span>Credit usage</span>
                                    <span>24%</span>
                                </p>
                            </div>
                            
                            <button class="btn btn-primary" style="width: 100%; margin-top: 20px;">
                                Update My Score
                            </button>
                            
                            <p style="font-size: 0.7rem; text-align: center; margin-top: 15px; color: var(--text-light);">
                                Checking your score won't affect your credit. Partnered with Credit Karma.
                            </p>
                        </div>
                    </div>
                    
                    <div class="calculator-results" data-aos="fade-left">
                        <h3>How Your Score Affects Your Loan</h3>
                        <p style="margin-bottom: 20px;">Your credit score helps determine your loan eligibility and interest rates. Here's what you qualify for with a <strong>720</strong> score:</p>
                        
                        <div class="result-item">
                            <div class="result-label">Personal Loan APR</div>
                            <div class="result-value">5.99% - 9.99%</div>
                        </div>
                        
                        <div class="result-item">
                            <div class="result-label">Approval Odds</div>
                            <div class="result-value">Excellent</div>
                        </div>
                        
                        <div class="result-item">
                            <div class="result-label">Loan Amount Range</div>
                            <div class="result-value">$5,000 - $100,000</div>
                        </div>
                        
                        <div class="result-item">
                            <div class="result-label">Recommended Products</div>
                            <div class="result-value">Platinum Loans</div>
                        </div>
                        
                        <a href="#loans" class="btn btn-primary" style="margin-top: auto;">See All Loan Options</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Loan Types Carousel -->
    <section class="loan-types" id="loans">
        <div class="container">
            <div class="section-header">
                <h2>Our Loan Solutions</h2>
                <p>Choose from our wide range of financing options tailored to your needs</p>
            </div>
            
            <div class="swiper loanTypesSwiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 - Personal Loans -->
                    <div class="swiper-slide">
                        <div class="loan-type-slide" data-aos="zoom-in">
                            <div class="loan-type-img" style="background-image: url('https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');"></div>
                            <div class="loan-type-content">
                                <h3>Personal Loans</h3>
                                <p>For all your personal financial needs with flexible repayment terms.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 2 - Business Loans -->
                    <div class="swiper-slide">
                        <div class="loan-type-slide" data-aos="zoom-in" data-aos-delay="100">
                            <div class="loan-type-img" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');"></div>
                            <div class="loan-type-content">
                                <h3>Business Loans</h3>
                                <p>Grow your business with our flexible financing solutions.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 3 - Agriculture Loans -->
                    <div class="swiper-slide">
                        <div class="loan-type-slide" data-aos="zoom-in" data-aos-delay="200">
                            <div class="loan-type-img" style="background-image: url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');"></div>
                            <div class="loan-type-content">
                                <h3>Agriculture Loans</h3>
                                <p>Specialized financing for farmers and agribusinesses.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 4 - Mortgage Loans -->
                    <div class="swiper-slide">
                        <div class="loan-type-slide" data-aos="zoom-in" data-aos-delay="300">
                            <div class="loan-type-img" style="background-image: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');"></div>
                            <div class="loan-type-content">
                                <h3>Mortgage Loans</h3>
                                <p>Your dream home is within reach with our mortgage solutions.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Loan Calculator Section -->
    <section class="loan-calculator-section" id="calculator">
        <div class="container">
            <div class="section-header">
                <h2>Loan Calculator</h2>
                <p>Estimate your monthly payments and find the perfect loan for your needs</p>
            </div>
            
            <div class="loan-calculator">
                <h3>How much would you like to borrow?</h3>
                
                <div class="calculator-grid">
                    <div class="calculator-form" data-aos="fade-right">
                        <div class="form-group">
                            <label for="loan-amount">Loan Amount ($)</label>
                            <input type="range" id="loan-amount" min="1000" max="100000" step="1000" value="25000" class="range-slider">
                            <div class="range-values">
                                <span>$1,000</span>
                                <span>$100,000</span>
                            </div>
                            <input type="number" id="loan-amount-display" value="25000" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="loan-term">Loan Term (months)</label>
                            <select id="loan-term" class="form-control">
                                <option value="12">12 months</option>
                                <option value="24">24 months</option>
                                <option value="36">36 months</option>
                                <option value="48">48 months</option>
                                <option value="60">60 months</option>
                                <option value="72">72 months</option>
                                <option value="84">84 months</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="interest-rate">Interest Rate (%)</label>
                            <input type="range" id="interest-rate" min="3" max="20" step="0.1" value="6.5" class="range-slider">
                            <div class="range-values">
                                <span>3%</span>
                                <span>20%</span>
                            </div>
                            <input type="number" id="interest-rate-display" value="6.5" class="form-control">
                        </div>
                        
                        <button type="button" class="btn btn-primary btn-calculate">Calculate Payments</button>
                    </div>
                    
                    <div class="calculator-results" data-aos="fade-left">
                        <h4>Your Estimated Payments</h4>
                        
                        <div class="result-item">
                            <div class="result-label">Monthly Payment</div>
                            <div class="result-value" id="monthly-payment">$---</div>
                        </div>
                        
                        <div class="result-item">
                            <div class="result-label">Total Interest</div>
                            <div class="result-value" id="total-interest">$---</div>
                        </div>
                        
                        <div class="result-item">
                            <div class="result-label">Total Payment</div>
                            <div class="result-value" id="total-payment">$---</div>
                        </div>
                        
                        <div class="result-item">
                            <div class="result-label">Interest Rate</div>
                            <div class="result-value" id="display-rate">---%</div>
                        </div>
                        
                        <a href="#" class="btn btn-primary" style="margin-top: auto;">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Loan Products Section -->
    <section class="loan-products">
        <div class="container">
            <div class="section-header">
                <h2>Our Loan Products</h2>
                <p>We offer a variety of loan solutions to meet your financial needs</p>
            </div>
            
            <div class="products-grid">
                <!-- Personal Loan -->
                <div class="product-card" data-aos="fade-up">
                    <div class="product-img" style="background-image: url('https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
                        <div class="product-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Personal Loans</h3>
                        <p>Flexible personal loans for any purpose with competitive rates.</p>
                        <ul class="product-features">
                            <li>$1,000 - $100,000 loan amounts</li>
                            <li>APR from 4.99%</li>
                            <li>12-84 month terms</li>
                            <li>No collateral needed</li>
                            <li>Fast online application</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Business Loan -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-img" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
                        <div class="product-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Business Loans</h3>
                        <p>Funding to start, grow, or expand your business.</p>
                        <ul class="product-features">
                            <li>$5,000 - $500,000</li>
                            <li>Rates from 5.99%</li>
                            <li>6-120 month terms</li>
                            <li>Fast approval</li>
                            <li>Flexible repayment</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Agriculture Loan -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-img" style="background-image: url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
                        <div class="product-icon">
                            <i class="fas fa-tractor"></i>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Agriculture Loans</h3>
                        <p>Specialized financing for farmers and agribusinesses.</p>
                        <ul class="product-features">
                            <li>$10,000 - $1,000,000</li>
                            <li>Rates from 3.99%</li>
                            <li>Seasonal payment options</li>
                            <li>Equipment financing</li>
                            <li>Crop and livestock loans</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="section-header">
                <h2>Why Borrowers Choose Us</h2>
                <p>We're proud of our track record in helping customers achieve their financial goals</p>
            </div>
            
            <div class="stats-grid">
                <div class="stat-item" data-aos="zoom-in">
                    <h3>$250M+</h3>
                    <p>Loans Funded</p>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="100">
                    <h3>24h</h3>
                    <p>Average Funding Time</p>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="200">
                    <h3>4.9/5</h3>
                    <p>Customer Satisfaction</p>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                    <h3>10K+</h3>
                    <p>Happy Customers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Carousel -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>What Our Customers Say</h2>
                <p>Don't just take our word for it - hear from our satisfied customers</p>
            </div>
            
            <div class="swiper testimonialsSwiper">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="testimonial-quote">"</div>
                            <div class="testimonial-content">
                                <p>I needed an agriculture loan quickly for my farm equipment. QuickNest approved my application in just 2 hours and the money was in my account the next morning. Incredible service!</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John D.">
                                </div>
                                <div class="author-info">
                                    <h4>John D.</h4>
                                    <p>Agriculture Loan Customer</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="testimonial-quote">"</div>
                            <div class="testimonial-content">
                                <p>As a small business owner, getting financing can be tough. QuickNest understood my needs and provided a business loan with perfect terms. The entire process was seamless!</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah K.">
                                </div>
                                <div class="author-info">
                                    <h4>Sarah K.</h4>
                                    <p>Business Loan Customer</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-slide">
                            <div class="testimonial-quote">"</div>
                            <div class="testimonial-content">
                                <p>Refinancing our home with QuickNest saved us $350 per month. The online application was so easy and their team kept us informed every step of the way. Highly recommend!</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Robert T.">
                                </div>
                                <div class="author-info">
                                    <h4>Robert T.</h4>
                                    <p>Mortgage Customer</p>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Get Started?</h2>
            <p>Applying for a loan with QuickNest is quick and easy. Get a decision fast and funds as soon as the next business day.</p>
            <a href="#" class="btn btn-primary btn-lg">Apply Now</a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-container">
                <!-- Column 1 -->
                <div class="footer-col">
                    <h3>QuickNest Loans</h3>
                    <p>Member FDIC. Equal Housing Lender. NMLS #1234567</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <!-- Column 2 -->
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#loans">Loans</a></li>
                        <li><a href="#calculator">Calculator</a></li>
                        <li><a href="#credit">Credit Score</a></li>
                        <li><a href="#testimonials">Reviews</a></li>
                        <li><a href="#">Rates & Terms</a></li>
                    </ul>
                </div>
                
                <!-- Column 3 -->
                <div class="footer-col">
                    <h3>Loan Products</h3>
                    <ul class="footer-links">
                        <li><a href="#">Personal Loans</a></li>
                        <li><a href="#">Business Loans</a></li>
                        <li><a href="#">Agriculture Loans</a></li>
                        <li><a href="#">Mortgage Loans</a></li>
                        <li><a href="#">Auto Loans</a></li>
                        <li><a href="#">Education Loans</a></li>
                    </ul>
                </div>
                
                <!-- Column 4 -->
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Finance Street, Suite 200</li>
                        <li><i class="fas fa-city"></i> New York, NY 10001</li>
                        <li><i class="fas fa-phone-alt"></i> (800) 123-4567</li>
                        <li><i class="fas fa-envelope"></i> support@QuickNest.com</li>
                        <li><i class="fas fa-clock"></i> Mon-Fri: 8am-8pm ET</li>
                        <li><i class="fas fa-clock"></i> Sat: 9am-5pm ET</li>
                    </ul>
                </div>
                
                <!-- Column 5 -->
                <div class="footer-col">
                    <h3>Compliance</h3>
                    <ul class="footer-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Licenses & Disclosures</a></li>
                        <li><a href="#">Fair Lending</a></li>
                        <li><a href="#">Patriot Act</a></li>
                        <li><a href="#">ADA Compliance</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 QuickNest Financial Services. All rights reserved. Loans made or arranged pursuant to a California Finance Lenders Law license.</p>
                <p>Checking your credit score with QuickNest requires identity verification and soft credit pull that won't affect your credit. Credit score provided by Equifax. Loan products not available in all states.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Main JS -->
    <script>
        // Initialize AOS Animation
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Mobile Navigation
        const mobileNavToggle = document.getElementById('mobileNavToggle');
        const mobileNavClose = document.getElementById('mobileNavClose');
        const mobileNav = document.getElementById('mobileNav');
        const mobileNavOverlay = document.getElementById('mobileNavOverlay');
        
        mobileNavToggle.addEventListener('click', () => {
            mobileNav.classList.add('active');
            mobileNavOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        mobileNavClose.addEventListener('click', () => {
            mobileNav.classList.remove('active');
            mobileNavOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        mobileNavOverlay.addEventListener('click', () => {
            mobileNav.classList.remove('active');
            mobileNavOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        // Loan Calculator Functionality
        const loanAmountSlider = document.getElementById('loan-amount');
        const loanAmountDisplay = document.getElementById('loan-amount-display');
        const interestRateSlider = document.getElementById('interest-rate');
        const interestRateDisplay = document.getElementById('interest-rate-display');
        const loanTerm = document.getElementById('loan-term');
        const monthlyPayment = document.getElementById('monthly-payment');
        const totalInterest = document.getElementById('total-interest');
        const totalPayment = document.getElementById('total-payment');
        const displayRate = document.getElementById('display-rate');
        const calculateBtn = document.querySelector('.btn-calculate');
        
        // Format currency
        function formatCurrency(amount) {
            return '$' + amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        }
        
        // Sync slider and input field
        loanAmountSlider.addEventListener('input', () => {
            loanAmountDisplay.value = loanAmountSlider.value;
            calculateLoan();
        });
        
        loanAmountDisplay.addEventListener('input', () => {
            loanAmountSlider.value = loanAmountDisplay.value;
            calculateLoan();
        });
        
        interestRateSlider.addEventListener('input', () => {
            interestRateDisplay.value = interestRateSlider.value;
            calculateLoan();
        });
        
        interestRateDisplay.addEventListener('input', () => {
            interestRateSlider.value = interestRateDisplay.value;
            calculateLoan();
        });
        
        // Calculate loan function
        function calculateLoan() {
            const principal = parseFloat(loanAmountSlider.value);
            const interest = parseFloat(interestRateSlider.value) / 100 / 12;
            const payments = parseFloat(loanTerm.value);
            
            // Calculate monthly payment
            const x = Math.pow(1 + interest, payments);
            const monthly = (principal * x * interest) / (x - 1);
            
            if (isFinite(monthly)) {
                monthlyPayment.textContent = formatCurrency(monthly);
                totalPayment.textContent = formatCurrency(monthly * payments);
                totalInterest.textContent = formatCurrency((monthly * payments) - principal);
                displayRate.textContent = parseFloat(interestRateSlider.value).toFixed(1) + '%';
            } else {
                monthlyPayment.textContent = '$---';
                totalPayment.textContent = '$---';
                totalInterest.textContent = '$---';
                displayRate.textContent = '---%';
            }
        }
        
        // Event listener for calculate button
        calculateBtn.addEventListener('click', calculateLoan);
        
        // Calculate on page load
        window.addEventListener('load', calculateLoan);
        
        // Recalculate when any input changes
        loanTerm.addEventListener('change', calculateLoan);
        
        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });
        
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Initialize Swiper Carousels
        const loanTypesSwiper = new Swiper('.loanTypesSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
        });
        
        const testimonialsSwiper = new Swiper('.testimonialsSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                }
            }
        });

        // Dynamic credit score update (demo purposes)
        setInterval(() => {
            const currentScore = parseInt(document.getElementById('creditScore').textContent);
            const newScore = currentScore + (Math.random() > 0.5 ? 1 : -1);
            if (newScore >= 300 && newScore <= 850) {
                document.getElementById('creditScore').textContent = newScore;
                document.querySelector('.score-marker').style.left = `${((newScore - 300) / (850 - 300)) * 100}%`;
                
                // Update score label
                const scoreLabel = document.querySelector('.score-label');
                if (newScore < 580) scoreLabel.textContent = 'Poor Credit';
                else if (newScore < 670) scoreLabel.textContent = 'Fair Credit';
                else if (newScore < 740) scoreLabel.textContent = 'Good Credit';
                else if (newScore < 800) scoreLabel.textContent = 'Very Good Credit';
                else scoreLabel.textContent = 'Excellent Credit';
            }
        }, 3000);
    </script>
</body>
</html>