<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Center | MyBank</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a5632;
            --primary-light: #2d7d46;
            --primary-dark: #0d3b1e;
            --accent: #d4af37;
            --accent-light: #e8c252;
            --bg: #f9fafb;
            --bg-dark: #e5e7eb;
            --text-dark: #0f172a;
            --text-medium: #334155;
            --text-light: #64748b;
            --white: #ffffff;
            --success: #16a34a;
            --warning: #f59e0b;
            --error: #dc2626;
            --info: #0ea5e9;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 4px 20px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.1);
            --border-radius-sm: 8px;
            --border-radius-md: 12px;
            --border-radius-lg: 16px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg);
            color: var(--text-dark);
            line-height: 1.6;
            font-size: 14px;
            overflow-x: hidden;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
            position: relative;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 280px;
            background: var(--primary);
            color: var(--white);
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
            z-index: 1000;
            transform: translateX(0);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }

        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            gap: 12px;
            flex-shrink: 0;
        }

        .logo {
            width: 40px;
            height: 40px;
            background: var(--accent);
            border-radius: var(--border-radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
            font-size: 1.1rem;
            box-shadow: var(--shadow-md);
            flex-shrink: 0;
        }

        .brand-name {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--white);
        }

        .brand-name span {
            color: var(--accent);
        }

        .sidebar-nav {
            flex: 1;
            padding: 1rem;
            overflow-y: auto;
        }

        .nav-section {
            margin-bottom: 1.5rem;
        }

        .nav-section-title {
            font-size: 0.7rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 0.75rem;
            padding: 0 0.75rem;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            margin-bottom: 0.25rem;
            border-radius: var(--border-radius-sm);
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
            font-weight: 500;
            font-size: 0.875rem;
        }

        .nav-item:hover {
            background: var(--primary-light);
            color: var(--white);
        }

        .nav-item.active {
            background: var(--accent);
            color: var(--white);
            box-shadow: var(--shadow-md);
        }

        .nav-item i {
            width: 18px;
            margin-right: 10px;
            text-align: center;
            font-size: 1rem;
            flex-shrink: 0;
        }

        .sidebar-footer {
            padding: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            background: var(--primary-dark);
            flex-shrink: 0;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0.75rem;
            border-radius: var(--border-radius-md);
            background: rgba(255, 255, 255, 0.1);
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            font-size: 0.9rem;
            flex-shrink: 0;
        }

        .user-info h4 {
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 2px;
            color: var(--white);
        }

        .user-info p {
            font-size: 0.75rem;
            color: var(--accent-light);
            font-weight: 500;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 280px;
            transition: var(--transition);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            width: calc(100% - 280px);
        }

        .header {
            background: var(--white);
            border-bottom: 1px solid var(--bg-dark);
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow-sm);
            flex-shrink: 0;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex: 1;
            min-width: 0;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.25rem;
            color: var(--primary);
            cursor: pointer;
            padding: 0.5rem;
            border-radius: var(--border-radius-sm);
            transition: var(--transition);
            flex-shrink: 0;
        }

        .menu-toggle:hover {
            background: var(--bg);
        }

        .header-title-section {
            min-width: 0;
            flex: 1;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .breadcrumb {
            font-size: 0.8rem;
            color: var(--text-light);
            margin-top: 0.25rem;
        }

        .breadcrumb a {
            color: var(--primary);
            text-decoration: none;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-shrink: 0;
        }

        .header-btn {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 50%;
            background: var(--bg);
            color: var(--text-medium);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            position: relative;
            font-size: 1rem;
            flex-shrink: 0;
        }

        .header-btn:hover {
            background: var(--primary);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .notification-badge {
            position: absolute;
            top: -3px;
            right: -3px;
            width: 18px;
            height: 18px;
            background: var(--error);
            color: var(--white);
            border-radius: 50%;
            font-size: 0.65rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--white);
        }

        /* Content Area */
        .content {
            flex: 1;
            padding: 1.5rem;
            max-width: 100%;
            overflow-x: hidden;
        }

        /* Help Center Hero */
        .help-hero {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--white);
            padding: 3rem 2rem;
            border-radius: var(--border-radius-lg);
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .help-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="1.5" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
            opacity: 0.3;
        }

        .help-hero-content {
            position: relative;
            z-index: 1;
        }

        .help-hero h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .help-hero p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Search Bar */
        .search-container {
            position: relative;
            max-width: 600px;
            margin: 0 auto;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1.5rem 1rem 3.5rem;
            border: none;
            border-radius: var(--border-radius-lg);
            font-size: 1rem;
            background: var(--white);
            color: var(--text-dark);
            box-shadow: var(--shadow-md);
            transition: var(--transition);
        }

        .search-input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3), var(--shadow-lg);
        }

        .search-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 1.1rem;
        }

        .search-suggestions {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: var(--white);
            border-radius: var(--border-radius-md);
            box-shadow: var(--shadow-lg);
            margin-top: 0.5rem;
            max-height: 300px;
            overflow-y: auto;
            z-index: 10;
            display: none;
        }

        .search-suggestion {
            padding: 0.875rem 1.5rem;
            border-bottom: 1px solid var(--bg-dark);
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .search-suggestion:hover {
            background: var(--bg);
        }

        .search-suggestion:last-child {
            border-bottom: none;
        }

        .search-suggestion i {
            color: var(--text-light);
            width: 16px;
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .quick-action-card {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            text-align: center;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--bg-dark);
            transition: var(--transition);
            cursor: pointer;
        }

        .quick-action-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
            border-color: var(--primary);
        }

        .quick-action-icon {
            width: 60px;
            height: 60px;
            background: rgba(26, 86, 50, 0.1);
            color: var(--primary);
            border-radius: var(--border-radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
        }

        .quick-action-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .quick-action-description {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        /* Help Categories */
        .help-categories {
            margin-bottom: 3rem;
        }

        .section-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .category-card {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--bg-dark);
            transition: var(--transition);
        }

        .category-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .category-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .category-icon {
            width: 48px;
            height: 48px;
            background: var(--primary);
            color: var(--white);
            border-radius: var(--border-radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            flex-shrink: 0;
        }

        .category-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .category-articles {
            list-style: none;
        }

        .category-articles li {
            margin-bottom: 0.75rem;
        }

        .category-articles a {
            color: var(--text-medium);
            text-decoration: none;
            font-size: 0.9rem;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .category-articles a:hover {
            color: var(--primary);
            padding-left: 0.5rem;
        }

        .category-articles a i {
            font-size: 0.75rem;
            color: var(--text-light);
        }

        /* FAQ Section */
        .faq-section {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            margin-bottom: 3rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--bg-dark);
        }

        .faq-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .faq-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .faq-subtitle {
            color: var(--text-light);
            font-size: 1rem;
        }

        .faq-item {
            border-bottom: 1px solid var(--bg-dark);
            margin-bottom: 1rem;
        }

        .faq-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .faq-question {
            width: 100%;
            background: none;
            border: none;
            padding: 1.5rem 0;
            text-align: left;
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-dark);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        .faq-question:hover {
            color: var(--primary);
        }

        .faq-question i {
            transition: var(--transition);
            color: var(--text-light);
        }

        .faq-question.active i {
            transform: rotate(180deg);
            color: var(--primary);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            color: var(--text-medium);
            line-height: 1.6;
        }

        .faq-answer.active {
            max-height: 200px;
            padding-bottom: 1.5rem;
        }

        /* Contact Section */
        .contact-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .contact-card {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            text-align: center;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--bg-dark);
            transition: var(--transition);
        }

        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: var(--accent);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto 1.5rem;
        }

        .contact-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .contact-description {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .contact-info {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .contact-hours {
            font-size: 0.85rem;
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        /* Buttons */
        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: var(--border-radius-md);
            font-size: 0.875rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            justify-content: center;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-secondary {
            background: var(--bg-dark);
            color: var(--text-medium);
        }

        .btn-secondary:hover {
            background: var(--text-light);
            color: var(--white);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
        }

        .btn-accent {
            background: var(--accent);
            color: var(--white);
        }

        .btn-accent:hover {
            background: #b8941f;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Live Chat Widget */
        .chat-widget {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 1000;
        }

        .chat-button {
            width: 60px;
            height: 60px;
            background: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 50%;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: var(--shadow-lg);
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .chat-button:hover {
            background: var(--primary-dark);
            transform: scale(1.1);
        }

        .chat-window {
            position: absolute;
            bottom: 80px;
            right: 0;
            width: 350px;
            height: 500px;
            background: var(--white);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-lg);
            display: none;
            flex-direction: column;
            overflow: hidden;
        }

        .chat-header {
            background: var(--primary);
            color: var(--white);
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-header h4 {
            font-size: 1rem;
            font-weight: 600;
        }

        .chat-close {
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.25rem;
            cursor: pointer;
        }

        .chat-messages {
            flex: 1;
            padding: 1rem;
            overflow-y: auto;
            background: var(--bg);
        }

        .chat-message {
            margin-bottom: 1rem;
            display: flex;
            gap: 0.75rem;
        }

        .chat-message.user {
            flex-direction: row-reverse;
        }

        .chat-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--primary);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 600;
            flex-shrink: 0;
        }

        .chat-message.user .chat-avatar {
            background: var(--accent);
        }

        .chat-bubble {
            background: var(--white);
            padding: 0.75rem 1rem;
            border-radius: var(--border-radius-md);
            max-width: 70%;
            font-size: 0.875rem;
            line-height: 1.4;
            box-shadow: var(--shadow-sm);
        }

        .chat-message.user .chat-bubble {
            background: var(--primary);
            color: var(--white);
        }

        .chat-input-container {
            padding: 1rem;
            border-top: 1px solid var(--bg-dark);
            background: var(--white);
        }

        .chat-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--bg-dark);
            border-radius: var(--border-radius-md);
            font-size: 0.875rem;
            resize: none;
        }

        .chat-input:focus {
            outline: none;
            border-color: var(--primary);
        }

        /* Overlay */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }

            .menu-toggle {
                display: block;
            }

            .overlay.active {
                display: block;
            }

            .quick-actions {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }

            .categories-grid {
                grid-template-columns: 1fr;
            }

            .contact-section {
                grid-template-columns: 1fr;
            }

            .chat-window {
                width: 300px;
                height: 400px;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }

            .content {
                padding: 1rem;
            }

            .help-hero {
                padding: 2rem 1.5rem;
            }

            .help-hero h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .quick-actions {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .quick-action-card {
                padding: 1.5rem;
            }

            .category-card {
                padding: 1.5rem;
            }

            .faq-section {
                padding: 1.5rem;
            }

            .contact-card {
                padding: 1.5rem;
            }

            .chat-widget {
                bottom: 1rem;
                right: 1rem;
            }

            .chat-window {
                width: calc(100vw - 2rem);
                height: 400px;
                right: -1rem;
            }
        }

        @media (max-width: 640px) {
            .help-hero h1 {
                font-size: 1.75rem;
            }

            .help-hero p {
                font-size: 1rem;
            }

            .search-input {
                padding: 0.875rem 1.25rem 0.875rem 3rem;
                font-size: 0.9rem;
            }

            .quick-action-icon {
                width: 48px;
                height: 48px;
                font-size: 1.25rem;
            }

            .category-icon {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .contact-icon {
                width: 48px;
                height: 48px;
                font-size: 1.25rem;
            }

            .page-title {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 480px) {
            .content {
                padding: 0.75rem;
            }

            .help-hero {
                padding: 1.5rem 1rem;
            }

            .quick-action-card,
            .category-card,
            .contact-card {
                padding: 1.25rem;
            }

            .faq-section {
                padding: 1.25rem;
            }

            .chat-button {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
@include('user.navbar')
        <!-- Overlay for mobile -->
        <div class="overlay" id="overlay"></div>

        <!-- Main Content -->
        <main class="main-content">
            <header class="header">
                <div class="header-left">
                    <button class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="header-title-section">
                        <h1 class="page-title">Help Center</h1>
                        <div class="breadcrumb">
                            <a href="#">Home</a> / <span>Help Center</span>
                        </div>
                    </div>
                </div>
                
                {{-- <div class="header-actions">
                    <button class="header-btn">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="header-btn">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge">5</span>
                    </button>
                    <button class="header-btn">
                        <i class="fas fa-question-circle"></i>
                    </button>
                </div> --}}
            </header>

            <div class="content">
                <!-- Help Hero Section -->
                <div class="help-hero">
                    <div class="help-hero-content">
                        <h1>How can we help you?</h1>
                        <p>Search our knowledge base or contact our support team for assistance with your banking needs</p>
                        
                        <div class="search-container">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" class="search-input" placeholder="Search for help articles, FAQs, or topics..." id="helpSearch">
                            <div class="search-suggestions" id="searchSuggestions">
                                <div class="search-suggestion">
                                    <i class="fas fa-question-circle"></i>
                                    <span>How to reset my password?</span>
                                </div>
                                <div class="search-suggestion">
                                    <i class="fas fa-credit-card"></i>
                                    <span>How to make a loan payment?</span>
                                </div>
                                <div class="search-suggestion">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>How to enable two-factor authentication?</span>
                                </div>
                                <div class="search-suggestion">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>Loan application status</span>
                                </div>
                                <div class="search-suggestion">
                                    <i class="fas fa-phone"></i>
                                    <span>Contact customer support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="quick-actions">
                    <div class="quick-action-card" onclick="scrollToSection('contact')">
                        <div class="quick-action-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3 class="quick-action-title">Contact Support</h3>
                        <p class="quick-action-description">Get in touch with our customer support team</p>
                    </div>
                    
                    <div class="quick-action-card" onclick="scrollToSection('faq')">
                        <div class="quick-action-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <h3 class="quick-action-title">FAQ</h3>
                        <p class="quick-action-description">Find answers to frequently asked questions</p>
                    </div>
                    
                    <div class="quick-action-card" onclick="openChat()">
                        <div class="quick-action-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h3 class="quick-action-title">Live Chat</h3>
                        <p class="quick-action-description">Chat with our support team in real-time</p>
                    </div>
                    
                    <div class="quick-action-card" onclick="window.open('#', '_blank')">
                        <div class="quick-action-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3 class="quick-action-title">Video Tutorials</h3>
                        <p class="quick-action-description">Watch step-by-step video guides</p>
                    </div>
                </div>

                <!-- Help Categories -->
                <div class="help-categories">
                    <h2 class="section-title">Browse Help Topics</h2>
                    <div class="categories-grid">
                        <div class="category-card">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="fas fa-user-circle"></i>
                                </div>
                                <h3 class="category-title">Account Management</h3>
                            </div>
                            <ul class="category-articles">
                                <li><a href="#"><i class="fas fa-chevron-right"></i>How to update my profile information</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Changing my password</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Setting up two-factor authentication</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Managing notification preferences</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Closing my account</a></li>
                            </ul>
                        </div>

                        <div class="category-card">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="fas fa-money-bill-wave"></i>
                                </div>
                                <h3 class="category-title">Loans & Applications</h3>
                            </div>
                            <ul class="category-articles">
                                <li><a href="#"><i class="fas fa-chevron-right"></i>How to apply for a loan</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Checking my application status</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Understanding loan terms</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Required documents for loan application</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Loan approval process</a></li>
                            </ul>
                        </div>

                        <div class="category-card">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <h3 class="category-title">Payments & Billing</h3>
                            </div>
                            <ul class="category-articles">
                                <li><a href="#"><i class="fas fa-chevron-right"></i>How to make a payment</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Setting up automatic payments</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Understanding my statement</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Payment methods accepted</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Late payment fees</a></li>
                            </ul>
                        </div>

                        <div class="category-card">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3 class="category-title">Security & Privacy</h3>
                            </div>
                            <ul class="category-articles">
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Protecting my account</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Recognizing phishing attempts</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Reporting suspicious activity</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Privacy policy and data usage</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Account recovery options</a></li>
                            </ul>
                        </div>

                        <div class="category-card">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h3 class="category-title">Mobile & Online Banking</h3>
                            </div>
                            <ul class="category-articles">
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Downloading the mobile app</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Logging into online banking</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Mobile app features</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Troubleshooting login issues</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>System requirements</a></li>
                            </ul>
                        </div>

                        <div class="category-card">
                            <div class="category-header">
                                <div class="category-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <h3 class="category-title">Technical Support</h3>
                            </div>
                            <ul class="category-articles">
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Browser compatibility</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Clearing cache and cookies</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Connection troubleshooting</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Error message explanations</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>System maintenance updates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="faq-section" id="faq">
                    <div class="faq-header">
                        <h2 class="faq-title">Frequently Asked Questions</h2>
                        <p class="faq-subtitle">Quick answers to common questions</p>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            How do I reset my password?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            To reset your password, click on "Forgot Password" on the login page, enter your email address, and follow the instructions sent to your email. You can also contact customer support for assistance.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            How long does loan approval take?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            Loan approval typically takes 2-5 business days after we receive all required documents. Personal loans may be approved faster, while home loans may take longer due to additional verification requirements.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            What payment methods do you accept?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            We accept bank transfers, debit cards, credit cards, and automatic ACH payments. You can set up automatic payments through your online banking account or by calling customer service.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            How do I check my loan application status?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            You can check your loan application status by logging into your account and visiting the "My Loans" section. You'll also receive email updates throughout the application process.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Is my personal information secure?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            Yes, we use bank-level encryption and security measures to protect your personal information. We never share your data with third parties without your consent, and all transactions are secured with SSL encryption.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Can I make extra payments on my loan?
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            Yes, you can make extra payments at any time without penalty. Extra payments will be applied to the principal balance, which can help you pay off your loan faster and save on interest.
                        </div>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="contact-section" id="contact">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3 class="contact-title">Phone Support</h3>
                        <p class="contact-description">Speak directly with our customer service team</p>
                        <div class="contact-info">1-800-MYBANK-1</div>
                        <div class="contact-hours">Mon-Fri: 8AM-8PM EST<br>Sat-Sun: 9AM-5PM EST</div>
                        <button class="btn btn-primary">
                            <i class="fas fa-phone"></i>
                            Call Now
                        </button>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="contact-title">Email Support</h3>
                        <p class="contact-description">Send us a detailed message about your inquiry</p>
                        <div class="contact-info">support@quicknestlns.com</div>
                        <div class="contact-hours">Response within 24 hours<br>Monday through Friday</div>
                        <button class="btn btn-secondary">
                            <i class="fas fa-envelope"></i>
                            Send Email
                        </button>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h3 class="contact-title">Live Chat</h3>
                        <p class="contact-description">Get instant help from our support agents</p>
                        <div class="contact-info">Available Now</div>
                        <div class="contact-hours">Mon-Fri: 8AM-8PM EST<br>Average wait: 2 minutes</div>
                        <button class="btn btn-accent" onclick="openChat()">
                            <i class="fas fa-comments"></i>
                            Start Chat
                        </button>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <h3 class="contact-title">Support Ticket</h3>
                        <p class="contact-description">Submit a detailed support request</p>
                        <div class="contact-info">Track your request</div>
                        <div class="contact-hours">Response within 4 hours<br>Full resolution tracking</div>
                        <button class="btn btn-outline">
                            <i class="fas fa-ticket-alt"></i>
                            Create Ticket
                        </button>
                    </div>
                </div>
            </div>
        </main>

        <!-- Live Chat Widget -->
        {{-- <div class="chat-widget">
            <button class="chat-button" id="chatButton">
                <i class="fas fa-comments"></i>
            </button>
            <div class="chat-window" id="chatWindow">
                <div class="chat-header">
                    <h4>Live Support</h4>
                    <button class="chat-close" id="chatClose">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="chat-messages" id="chatMessages">
                    <div class="chat-message">
                        <div class="chat-avatar">MB</div>
                        <div class="chat-bubble">
                            Hello! I'm here to help you with any questions about your MyBank account. How can I assist you today?
                        </div>
                    </div>
                </div>
                <div class="chat-input-container">
                    <textarea class="chat-input" id="chatInput" placeholder="Type your message..." rows="2"></textarea>
                </div>
            </div>
        </div> --}}
    </div>

    <script>
        // Mobile menu functionality
        const sidebar = document.getElementById('sidebar');
        const menuToggle = document.getElementById('menuToggle');
        const overlay = document.getElementById('overlay');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        });

        // Search functionality
        const searchInput = document.getElementById('helpSearch');
        const searchSuggestions = document.getElementById('searchSuggestions');

        searchInput.addEventListener('focus', () => {
            searchSuggestions.style.display = 'block';
        });

        searchInput.addEventListener('blur', () => {
            setTimeout(() => {
                searchSuggestions.style.display = 'none';
            }, 200);
        });

        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            const suggestions = searchSuggestions.querySelectorAll('.search-suggestion');
            
            suggestions.forEach(suggestion => {
                const text = suggestion.textContent.toLowerCase();
                if (text.includes(query) || query === '') {
                    suggestion.style.display = 'flex';
                } else {
                    suggestion.style.display = 'none';
                }
            });
        });

        // Search suggestion clicks
        document.querySelectorAll('.search-suggestion').forEach(suggestion => {
            suggestion.addEventListener('click', () => {
                searchInput.value = suggestion.textContent.trim();
                searchSuggestions.style.display = 'none';
                // Simulate search
                alert('Searching for: ' + suggestion.textContent.trim());
            });
        });

        // FAQ functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isActive = question.classList.contains('active');
                
                // Close all other FAQ items
                document.querySelectorAll('.faq-question').forEach(q => {
                    q.classList.remove('active');
                    q.nextElementSibling.classList.remove('active');
                });
                
                // Toggle current item
                if (!isActive) {
                    question.classList.add('active');
                    answer.classList.add('active');
                }
            });
        });

        // Live Chat functionality
        const chatButton = document.getElementById('chatButton');
        const chatWindow = document.getElementById('chatWindow');
        const chatClose = document.getElementById('chatClose');
        const chatInput = document.getElementById('chatInput');
        const chatMessages = document.getElementById('chatMessages');

        function openChat() {
            chatWindow.style.display = 'flex';
            chatInput.focus();
        }

        function closeChat() {
            chatWindow.style.display = 'none';
        }

        chatButton.addEventListener('click', openChat);
        chatClose.addEventListener('click', closeChat);

        // Chat input functionality
        chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });

        function sendMessage() {
            const message = chatInput.value.trim();
            if (!message) return;

            // Add user message
            const userMessage = document.createElement('div');
            userMessage.className = 'chat-message user';
            userMessage.innerHTML = `
                <div class="chat-avatar">SI</div>
                <div class="chat-bubble">${message}</div>
            `;
            chatMessages.appendChild(userMessage);

            // Clear input
            chatInput.value = '';

            // Scroll to bottom
            chatMessages.scrollTop = chatMessages.scrollHeight;

            // Simulate bot response
            setTimeout(() => {
                const botMessage = document.createElement('div');
                botMessage.className = 'chat-message';
                botMessage.innerHTML = `
                    <div class="chat-avatar">MB</div>
                    <div class="chat-bubble">Thank you for your message. I'm connecting you with a specialist who can help you with "${message}". Please wait a moment...</div>
                `;
                chatMessages.appendChild(botMessage);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }, 1000);
        }

        // Scroll to section function
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Contact button functionality
        document.querySelectorAll('.contact-card .btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const card = e.target.closest('.contact-card');
                const title = card.querySelector('.contact-title').textContent;
                
                if (btn.textContent.includes('Call Now')) {
                    alert('Calling customer support...');
                } else if (btn.textContent.includes('Send Email')) {
                    window.location.href = 'mailto:support@quicknestlns.com';
                } else if (btn.textContent.includes('Start Chat')) {
                    openChat();
                } else if (btn.textContent.includes('Create Ticket')) {
                    alert('Opening support ticket form...');
                }
            });
        });

        // Category article clicks
        document.querySelectorAll('.category-articles a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const articleTitle = link.textContent.trim();
                alert('Opening article: ' + articleTitle);
            });
        });

        // Quick action cards
        document.querySelectorAll('.quick-action-card').forEach(card => {
            card.addEventListener('click', () => {
                const title = card.querySelector('.quick-action-title').textContent;
                
                if (title === 'Contact Support') {
                    scrollToSection('contact');
                } else if (title === 'FAQ') {
                    scrollToSection('faq');
                } else if (title === 'Live Chat') {
                    openChat();
                } else if (title === 'Video Tutorials') {
                    alert('Opening video tutorials...');
                }
            });
        });

        // Auto-hide chat suggestions after some time
        setTimeout(() => {
            if (chatWindow.style.display !== 'flex') {
                // Show a subtle notification
                const notification = document.createElement('div');
                notification.style.cssText = `
                    position: fixed;
                    bottom: 90px;
                    right: 2rem;
                    background: var(--primary);
                    color: white;
                    padding: 0.75rem 1rem;
                    border-radius: var(--border-radius-md);
                    font-size: 0.875rem;
                    box-shadow: var(--shadow-md);
                    z-index: 999;
                    animation: slideIn 0.3s ease;
                `;
                notification.textContent = 'Need help? Chat with us!';
                document.body.appendChild(notification);

                // Remove notification after 5 seconds
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.remove();
                    }
                }, 5000);
            }
        }, 10000);

        // Resize handler
        window.addEventListener('resize', () => {
            if (window.innerWidth > 992) {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
                closeChat();
                searchSuggestions.style.display = 'none';
            }
        });

        // Initialize tooltips and animations
        document.addEventListener('DOMContentLoaded', () => {
            // Add smooth scrolling to all internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Add loading states to buttons
            document.querySelectorAll('.btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    if (!this.classList.contains('loading')) {
                        const originalText = this.innerHTML;
                        this.classList.add('loading');
                        this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
                        
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.classList.remove('loading');
                        }, 2000);
                    }
                });
            });
        });
    </script>
</body>
</html>