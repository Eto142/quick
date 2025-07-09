<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | MyBank</title>
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

        /* Settings Layout */
        .settings-container {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Settings Navigation */
        .settings-nav {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--bg-dark);
            height: fit-content;
            position: sticky;
            top: 2rem;
        }

        .settings-nav-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--bg-dark);
        }

        .settings-nav-item {
            display: flex;
            align-items: center;
            padding: 0.875rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: var(--border-radius-md);
            color: var(--text-medium);
            text-decoration: none;
            transition: var(--transition);
            font-weight: 500;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .settings-nav-item:hover {
            background: var(--bg);
            color: var(--text-dark);
        }

        .settings-nav-item.active {
            background: rgba(26, 86, 50, 0.1);
            color: var(--primary);
            border-color: var(--primary);
            font-weight: 600;
        }

        .settings-nav-item i {
            width: 20px;
            margin-right: 12px;
            text-align: center;
            font-size: 1rem;
        }

        /* Settings Content */
        .settings-content {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--bg-dark);
            overflow: hidden;
        }

        .settings-section {
            display: none;
            padding: 2rem;
        }

        .settings-section.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section-header {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid var(--bg-dark);
        }

        .section-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .section-description {
            color: var(--text-light);
            font-size: 1rem;
        }

        /* Form Styles */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .form-input,
        .form-select,
        .form-textarea {
            padding: 0.875rem 1rem;
            border: 2px solid var(--bg-dark);
            border-radius: var(--border-radius-md);
            font-size: 0.875rem;
            font-family: inherit;
            transition: var(--transition);
            background: var(--white);
            color: var(--text-dark);
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(26, 86, 50, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* Profile Picture Upload */
        .profile-picture-section {
            display: flex;
            align-items: center;
            gap: 2rem;
            padding: 2rem;
            background: var(--bg);
            border-radius: var(--border-radius-lg);
            margin-bottom: 2rem;
        }

        .current-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--primary);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 700;
            box-shadow: var(--shadow-md);
            flex-shrink: 0;
        }

        .avatar-info {
            flex: 1;
        }

        .avatar-info h4 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .avatar-info p {
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        .avatar-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        /* Toggle Switch */
        .toggle-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            background: var(--bg);
            border-radius: var(--border-radius-lg);
            margin-bottom: 1rem;
            border: 1px solid var(--bg-dark);
        }

        .toggle-info {
            flex: 1;
        }

        .toggle-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.25rem;
        }

        .toggle-description {
            font-size: 0.875rem;
            color: var(--text-light);
        }

        .toggle-switch {
            position: relative;
            width: 50px;
            height: 26px;
            background: var(--bg-dark);
            border-radius: 13px;
            cursor: pointer;
            transition: var(--transition);
            flex-shrink: 0;
        }

        .toggle-switch.active {
            background: var(--primary);
        }

        .toggle-switch::before {
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            width: 22px;
            height: 22px;
            background: var(--white);
            border-radius: 50%;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
        }

        .toggle-switch.active::before {
            transform: translateX(24px);
        }

        /* Security Section */
        .security-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            background: var(--bg);
            border-radius: var(--border-radius-lg);
            margin-bottom: 1rem;
            border: 1px solid var(--bg-dark);
        }

        .security-info {
            flex: 1;
        }

        .security-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.25rem;
        }

        .security-description {
            font-size: 0.875rem;
            color: var(--text-light);
        }

        .security-status {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .security-status.enabled {
            color: var(--success);
        }

        .security-status.disabled {
            color: var(--error);
        }

        /* Connected Accounts */
        .connected-account {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.5rem;
            background: var(--bg);
            border-radius: var(--border-radius-lg);
            margin-bottom: 1rem;
            border: 1px solid var(--bg-dark);
        }

        .account-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex: 1;
        }

        .account-icon {
            width: 48px;
            height: 48px;
            border-radius: var(--border-radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: var(--white);
            flex-shrink: 0;
        }

        .account-icon.google { background: #db4437; }
        .account-icon.apple { background: #000000; }
        .account-icon.microsoft { background: #00a1f1; }

        .account-details h4 {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.25rem;
        }

        .account-details p {
            font-size: 0.875rem;
            color: var(--text-light);
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

        .btn-danger {
            background: var(--error);
            color: var(--white);
        }

        .btn-danger:hover {
            background: #b91c1c;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
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

        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.8rem;
        }

        /* Action Buttons */
        .section-actions {
            display: flex;
            gap: 1rem;
            padding-top: 2rem;
            border-top: 1px solid var(--bg-dark);
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        /* Alert Messages */
        .alert {
            padding: 1rem 1.5rem;
            border-radius: var(--border-radius-md);
            margin-bottom: 1.5rem;
            border: 1px solid;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .alert-success {
            background: rgba(22, 163, 74, 0.1);
            color: var(--success);
            border-color: rgba(22, 163, 74, 0.2);
        }

        .alert-warning {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning);
            border-color: rgba(245, 158, 11, 0.2);
        }

        .alert-danger {
            background: rgba(220, 38, 38, 0.1);
            color: var(--error);
            border-color: rgba(220, 38, 38, 0.2);
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
        @media (max-width: 1200px) {
            .settings-container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .settings-nav {
                position: static;
                order: -1;
            }

            .settings-nav-title {
                display: none;
            }

            .settings-nav {
                padding: 1rem;
                display: flex;
                overflow-x: auto;
                gap: 0.5rem;
                border-radius: var(--border-radius-md);
            }

            .settings-nav-item {
                white-space: nowrap;
                margin-bottom: 0;
                flex-shrink: 0;
            }
        }

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

            .form-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .profile-picture-section {
                flex-direction: column;
                text-align: center;
                gap: 1.5rem;
            }

            .avatar-actions {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }

            .content {
                padding: 1rem;
            }

            .settings-section {
                padding: 1.5rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .toggle-group,
            .security-item,
            .connected-account {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .section-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }

        @media (max-width: 640px) {
            .settings-nav {
                flex-direction: column;
            }

            .settings-nav-item {
                white-space: normal;
            }

            .current-avatar {
                width: 80px;
                height: 80px;
                font-size: 1.5rem;
            }

            .page-title {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 480px) {
            .content {
                padding: 0.75rem;
            }

            .settings-section {
                padding: 1rem;
            }

            .profile-picture-section {
                padding: 1.5rem;
            }

            .form-grid {
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">MB</div>
                <div class="brand-name">My<span>Bank</span></div>
            </div>
            
            <nav class="sidebar-nav">
                <div class="nav-section">
                    <div class="nav-section-title">Overview</div>
                    <a href="#" class="nav-item">
                        <i class="fas fa-chart-line"></i>
                        Dashboard
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-wallet"></i>
                        Account Summary
                    </a>
                </div>
                
                <div class="nav-section">
                    <div class="nav-section-title">Loans</div>
                    <a href="#" class="nav-item">
                        <i class="fas fa-money-bill-wave"></i>
                        My Loans
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-plus-circle"></i>
                        Apply for Loan
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-calculator"></i>
                        Loan Calculator
                    </a>
                </div>
                
                <div class="nav-section">
                    <div class="nav-section-title">Payments</div>
                    <a href="#" class="nav-item">
                        <i class="fas fa-credit-card"></i>
                        Make Payment
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-history"></i>
                        Payment History
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-calendar-alt"></i>
                        Schedule Payment
                    </a>
                </div>
                
                <div class="nav-section">
                    <div class="nav-section-title">Support</div>
                    <a href="#" class="nav-item">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Statements
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-headset"></i>
                        Help Center
                    </a>
                    <a href="#" class="nav-item active">
                        <i class="fas fa-cog"></i>
                        Settings
                    </a>
                </div>
            </nav>
            
            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="user-avatar">SI</div>
                    <div class="user-info">
                        <h4>Saviour Iseh</h4>
                        <p>Premium Member</p>
                    </div>
                </div>
            </div>
        </aside>

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
                        <h1 class="page-title">Settings</h1>
                        <div class="breadcrumb">
                            <a href="#">Home</a> / <span>Settings</span>
                        </div>
                    </div>
                </div>
                
                <div class="header-actions">
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
                </div>
            </header>

            <div class="content">
                <div class="settings-container">
                    <!-- Settings Navigation -->
                    <div class="settings-nav">
                        <h3 class="settings-nav-title">Settings</h3>
                        <div class="settings-nav-item active" data-section="profile">
                            <i class="fas fa-user"></i>
                            Profile
                        </div>
                        <div class="settings-nav-item" data-section="security">
                            <i class="fas fa-shield-alt"></i>
                            Security
                        </div>
                        <div class="settings-nav-item" data-section="notifications">
                            <i class="fas fa-bell"></i>
                            Notifications
                        </div>
                        <div class="settings-nav-item" data-section="preferences">
                            <i class="fas fa-sliders-h"></i>
                            Preferences
                        </div>
                        <div class="settings-nav-item" data-section="privacy">
                            <i class="fas fa-eye-slash"></i>
                            Privacy
                        </div>
                        <div class="settings-nav-item" data-section="connected">
                            <i class="fas fa-link"></i>
                            Connected Accounts
                        </div>
                        <div class="settings-nav-item" data-section="billing">
                            <i class="fas fa-credit-card"></i>
                            Billing
                        </div>
                    </div>

                    <!-- Settings Content -->
                    <div class="settings-content">
                        <!-- Profile Settings -->
                        <div class="settings-section active" data-section="profile">
                            <div class="section-header">
                                <h2 class="section-title">Profile Settings</h2>
                                <p class="section-description">Manage your personal information and profile details</p>
                            </div>

                            <!-- Profile Picture -->
                            <div class="profile-picture-section">
                                <div class="current-avatar">SI</div>
                                <div class="avatar-info">
                                    <h4>Profile Picture</h4>
                                    <p>Upload a new profile picture. Recommended size: 400x400px</p>
                                    <div class="avatar-actions">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fas fa-upload"></i>
                                            Upload New
                                        </button>
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="fas fa-trash"></i>
                                            Remove
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <form>
                                <div class="form-grid">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-input" value="Saviour" placeholder="Enter your first name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-input" value="Iseh" placeholder="Enter your last name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-input" value="saviour.iseh@example.com" placeholder="Enter your email">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" class="form-input" value="+1 (555) 123-4567" placeholder="Enter your phone number">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-input" value="1990-01-15">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select">
                                            <option value="">Select Gender</option>
                                            <option value="male" selected>Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                            <option value="prefer-not-to-say">Prefer not to say</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group full-width">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-input" value="123 Main Street, Apt 4B" placeholder="Enter your address">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-input" value="New York" placeholder="Enter your city">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">State</label>
                                        <select class="form-select">
                                            <option value="">Select State</option>
                                            <option value="NY" selected>New York</option>
                                            <option value="CA">California</option>
                                            <option value="TX">Texas</option>
                                            <option value="FL">Florida</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">ZIP Code</label>
                                        <input type="text" class="form-input" value="10001" placeholder="Enter ZIP code">
                                    </div>
                                    
                                    <div class="form-group full-width">
                                        <label class="form-label">Bio</label>
                                        <textarea class="form-textarea" placeholder="Tell us about yourself...">Premium banking customer since 2020. Passionate about financial planning and investment strategies.</textarea>
                                    </div>
                                </div>

                                <div class="section-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i>
                                        Save Changes
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <i class="fas fa-undo"></i>
                                        Reset
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Security Settings -->
                        <div class="settings-section" data-section="security">
                            <div class="section-header">
                                <h2 class="section-title">Security Settings</h2>
                                <p class="section-description">Manage your account security and authentication methods</p>
                            </div>

                            <div class="alert alert-success">
                                <i class="fas fa-shield-check"></i>
                                Your account security is strong. Keep it that way by regularly updating your password.
                            </div>

                            <div class="security-item">
                                <div class="security-info">
                                    <h4 class="security-title">Password</h4>
                                    <p class="security-description">Last changed 3 months ago</p>
                                </div>
                                <div class="security-status enabled">
                                    <i class="fas fa-check-circle"></i>
                                    Strong
                                </div>
                                <button class="btn btn-outline btn-sm">Change Password</button>
                            </div>

                            <div class="security-item">
                                <div class="security-info">
                                    <h4 class="security-title">Two-Factor Authentication</h4>
                                    <p class="security-description">Add an extra layer of security to your account</p>
                                </div>
                                <div class="security-status enabled">
                                    <i class="fas fa-check-circle"></i>
                                    Enabled
                                </div>
                                <button class="btn btn-outline btn-sm">Manage 2FA</button>
                            </div>

                            <div class="security-item">
                                <div class="security-info">
                                    <h4 class="security-title">Login Alerts</h4>
                                    <p class="security-description">Get notified when someone logs into your account</p>
                                </div>
                                <div class="security-status enabled">
                                    <i class="fas fa-check-circle"></i>
                                    Enabled
                                </div>
                                <div class="toggle-switch active" data-setting="login-alerts"></div>
                            </div>

                            <div class="security-item">
                                <div class="security-info">
                                    <h4 class="security-title">Session Management</h4>
                                    <p class="security-description">View and manage your active sessions</p>
                                </div>
                                <div class="security-status">
                                    <i class="fas fa-info-circle"></i>
                                    3 Active Sessions
                                </div>
                                <button class="btn btn-outline btn-sm">View Sessions</button>
                            </div>

                            <div class="security-item">
                                <div class="security-info">
                                    <h4 class="security-title">Security Questions</h4>
                                    <p class="security-description">Set up security questions for account recovery</p>
                                </div>
                                <div class="security-status disabled">
                                    <i class="fas fa-exclamation-circle"></i>
                                    Not Set
                                </div>
                                <button class="btn btn-primary btn-sm">Set Up</button>
                            </div>

                            <div class="section-actions">
                                <button class="btn btn-danger">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Sign Out All Devices
                                </button>
                                <button class="btn btn-secondary">
                                    <i class="fas fa-download"></i>
                                    Download Security Report
                                </button>
                            </div>
                        </div>

                        <!-- Notification Settings -->
                        <div class="settings-section" data-section="notifications">
                            <div class="section-header">
                                <h2 class="section-title">Notification Preferences</h2>
                                <p class="section-description">Choose how and when you want to receive notifications</p>
                            </div>

                            <h3 style="margin-bottom: 1rem; color: var(--text-dark); font-weight: 600;">Email Notifications</h3>
                            
                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Account Activity</h4>
                                    <p class="toggle-description">Receive emails about important account activities</p>
                                </div>
                                <div class="toggle-switch active" data-setting="email-activity"></div>
                            </div>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Payment Reminders</h4>
                                    <p class="toggle-description">Get reminded about upcoming loan payments</p>
                                </div>
                                <div class="toggle-switch active" data-setting="email-payments"></div>
                            </div>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Marketing Updates</h4>
                                    <p class="toggle-description">Receive information about new products and offers</p>
                                </div>
                                <div class="toggle-switch" data-setting="email-marketing"></div>
                            </div>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Security Alerts</h4>
                                    <p class="toggle-description">Important security notifications and alerts</p>
                                </div>
                                <div class="toggle-switch active" data-setting="email-security"></div>
                            </div>

                            <h3 style="margin: 2rem 0 1rem; color: var(--text-dark); font-weight: 600;">SMS Notifications</h3>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Transaction Alerts</h4>
                                    <p class="toggle-description">Get SMS alerts for transactions over $500</p>
                                </div>
                                <div class="toggle-switch active" data-setting="sms-transactions"></div>
                            </div>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Payment Due Reminders</h4>
                                    <p class="toggle-description">SMS reminders 3 days before payment due date</p>
                                </div>
                                <div class="toggle-switch active" data-setting="sms-reminders"></div>
                            </div>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Security Codes</h4>
                                    <p class="toggle-description">Receive 2FA codes via SMS</p>
                                </div>
                                <div class="toggle-switch active" data-setting="sms-2fa"></div>
                            </div>

                            <h3 style="margin: 2rem 0 1rem; color: var(--text-dark); font-weight: 600;">Push Notifications</h3>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Mobile App Notifications</h4>
                                    <p class="toggle-description">Receive push notifications on your mobile device</p>
                                </div>
                                <div class="toggle-switch active" data-setting="push-mobile"></div>
                            </div>

                            <div class="section-actions">
                                <button class="btn btn-primary">
                                    <i class="fas fa-save"></i>
                                    Save Preferences
                                </button>
                                <button class="btn btn-secondary">
                                    <i class="fas fa-bell-slash"></i>
                                    Disable All
                                </button>
                            </div>
                        </div>

                        <!-- Preferences -->
                        <div class="settings-section" data-section="preferences">
                            <div class="section-header">
                                <h2 class="section-title">Account Preferences</h2>
                                <p class="section-description">Customize your banking experience</p>
                            </div>

                            <form>
                                <div class="form-grid">
                                    <div class="form-group">
                                        <label class="form-label">Language</label>
                                        <select class="form-select">
                                            <option value="en" selected>English</option>
                                            <option value="es">Spanish</option>
                                            <option value="fr">French</option>
                                            <option value="de">German</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Time Zone</label>
                                        <select class="form-select">
                                            <option value="EST" selected>Eastern Time (EST)</option>
                                            <option value="CST">Central Time (CST)</option>
                                            <option value="MST">Mountain Time (MST)</option>
                                            <option value="PST">Pacific Time (PST)</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Currency</label>
                                        <select class="form-select">
                                            <option value="USD" selected>US Dollar (USD)</option>
                                            <option value="EUR">Euro (EUR)</option>
                                            <option value="GBP">British Pound (GBP)</option>
                                            <option value="CAD">Canadian Dollar (CAD)</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Date Format</label>
                                        <select class="form-select">
                                            <option value="MM/DD/YYYY" selected>MM/DD/YYYY</option>
                                            <option value="DD/MM/YYYY">DD/MM/YYYY</option>
                                            <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Statement Frequency</label>
                                        <select class="form-select">
                                            <option value="monthly" selected>Monthly</option>
                                            <option value="quarterly">Quarterly</option>
                                            <option value="annually">Annually</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Dashboard Theme</label>
                                        <select class="form-select">
                                            <option value="light" selected>Light</option>
                                            <option value="dark">Dark</option>
                                            <option value="auto">Auto (System)</option>
                                        </select>
                                    </div>
                                </div>

                                <h3 style="margin: 2rem 0 1rem; color: var(--text-dark); font-weight: 600;">Display Preferences</h3>

                                <div class="toggle-group">
                                    <div class="toggle-info">
                                        <h4 class="toggle-title">Show Account Balances</h4>
                                        <p class="toggle-description">Display account balances on dashboard</p>
                                    </div>
                                    <div class="toggle-switch active" data-setting="show-balances"></div>
                                </div>

                                <div class="toggle-group">
                                    <div class="toggle-info">
                                        <h4 class="toggle-title">Compact View</h4>
                                        <p class="toggle-description">Use compact layout for transaction lists</p>
                                    </div>
                                    <div class="toggle-switch" data-setting="compact-view"></div>
                                </div>

                                <div class="toggle-group">
                                    <div class="toggle-info">
                                        <h4 class="toggle-title">Auto-refresh Data</h4>
                                        <p class="toggle-description">Automatically refresh account data every 5 minutes</p>
                                    </div>
                                    <div class="toggle-switch active" data-setting="auto-refresh"></div>
                                </div>

                                <div class="section-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i>
                                        Save Preferences
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <i class="fas fa-undo"></i>
                                        Reset to Default
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Privacy Settings -->
                        <div class="settings-section" data-section="privacy">
                            <div class="section-header">
                                <h2 class="section-title">Privacy Settings</h2>
                                <p class="section-description">Control your privacy and data sharing preferences</p>
                            </div>

                            <div class="alert alert-warning">
                                <i class="fas fa-exclamation-triangle"></i>
                                Some privacy settings may affect the functionality of certain features.
                            </div>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Data Analytics</h4>
                                    <p class="toggle-description">Allow us to analyze your data to improve our services</p>
                                </div>
                                <div class="toggle-switch active" data-setting="analytics"></div>
                            </div>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Personalized Offers</h4>
                                    <p class="toggle-description">Receive personalized product recommendations</p>
                                </div>
                                <div class="toggle-switch active" data-setting="personalized-offers"></div>
                            </div>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Third-party Sharing</h4>
                                    <p class="toggle-description">Share anonymized data with trusted partners</p>
                                </div>
                                <div class="toggle-switch" data-setting="third-party"></div>
                            </div>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Location Services</h4>
                                    <p class="toggle-description">Use location data for fraud prevention and ATM finder</p>
                                </div>
                                <div class="toggle-switch active" data-setting="location"></div>
                            </div>

                            <div class="toggle-group">
                                <div class="toggle-info">
                                    <h4 class="toggle-title">Cookie Preferences</h4>
                                    <p class="toggle-description">Allow non-essential cookies for enhanced experience</p>
                                </div>
                                <div class="toggle-switch active" data-setting="cookies"></div>
                            </div>

                            <div class="section-actions">
                                <button class="btn btn-primary">
                                    <i class="fas fa-save"></i>
                                    Save Privacy Settings
                                </button>
                                <button class="btn btn-outline">
                                    <i class="fas fa-download"></i>
                                    Download My Data
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                    Delete Account
                                </button>
                            </div>
                        </div>

                        <!-- Connected Accounts -->
                        <div class="settings-section" data-section="connected">
                            <div class="section-header">
                                <h2 class="section-title">Connected Accounts</h2>
                                <p class="section-description">Manage your connected social accounts and third-party services</p>
                            </div>

                            <div class="connected-account">
                                <div class="account-info">
                                    <div class="account-icon google">
                                        <i class="fab fa-google"></i>
                                    </div>
                                    <div class="account-details">
                                        <h4>Google Account</h4>
                                        <p>Connected • saviour.iseh@gmail.com</p>
                                    </div>
                                </div>
                                <button class="btn btn-danger btn-sm">Disconnect</button>
                            </div>

                            <div class="connected-account">
                                <div class="account-info">
                                    <div class="account-icon apple">
                                        <i class="fab fa-apple"></i>
                                    </div>
                                    <div class="account-details">
                                        <h4>Apple ID</h4>
                                        <p>Not connected</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline btn-sm">Connect</button>
                            </div>

                            <div class="connected-account">
                                <div class="account-info">
                                    <div class="account-icon microsoft">
                                        <i class="fab fa-microsoft"></i>
                                    </div>
                                    <div class="account-details">
                                        <h4>Microsoft Account</h4>
                                        <p>Not connected</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline btn-sm">Connect</button>
                            </div>

                            <div class="section-actions">
                                <button class="btn btn-secondary">
                                    <i class="fas fa-plus"></i>
                                    Add New Connection
                                </button>
                            </div>
                        </div>

                        <!-- Billing Settings -->
                        <div class="settings-section" data-section="billing">
                            <div class="section-header">
                                <h2 class="section-title">Billing & Payment Methods</h2>
                                <p class="section-description">Manage your payment methods and billing preferences</p>
                            </div>

                            <div class="alert alert-success">
                                <i class="fas fa-check-circle"></i>
                                Your account is in good standing. Next payment due: July 20, 2025
                            </div>

                            <h3 style="margin-bottom: 1rem; color: var(--text-dark); font-weight: 600;">Payment Methods</h3>

                            <div class="connected-account">
                                <div class="account-info">
                                    <div class="account-icon" style="background: var(--primary);">
                                        <i class="fas fa-credit-card"></i>
                                    </div>
                                    <div class="account-details">
                                        <h4>Visa ending in 4567</h4>
                                        <p>Primary payment method • Expires 12/2027</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline btn-sm">Edit</button>
                            </div>

                            <div class="connected-account">
                                <div class="account-info">
                                    <div class="account-icon" style="background: var(--accent);">
                                        <i class="fas fa-university"></i>
                                    </div>
                                    <div class="account-details">
                                        <h4>Bank Account ending in 8901</h4>
                                        <p>Backup payment method • Chase Bank</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline btn-sm">Edit</button>
                            </div>

                            <h3 style="margin: 2rem 0 1rem; color: var(--text-dark); font-weight: 600;">Billing Preferences</h3>

                            <form>
                                <div class="form-grid">
                                    <div class="form-group">
                                        <label class="form-label">Billing Address</label>
                                        <input type="text" class="form-input" value="123 Main Street, Apt 4B" placeholder="Enter billing address">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Billing Email</label>
                                        <input type="email" class="form-input" value="saviour.iseh@example.com" placeholder="Enter billing email">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Auto-pay</label>
                                        <select class="form-select">
                                            <option value="enabled" selected>Enabled</option>
                                            <option value="disabled">Disabled</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Payment Day</label>
                                        <select class="form-select">
                                            <option value="20" selected>20th of each month</option>
                                            <option value="1">1st of each month</option>
                                            <option value="15">15th of each month</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="toggle-group">
                                    <div class="toggle-info">
                                        <h4 class="toggle-title">Paperless Billing</h4>
                                        <p class="toggle-description">Receive bills electronically instead of by mail</p>
                                    </div>
                                    <div class="toggle-switch active" data-setting="paperless"></div>
                                </div>

                                <div class="section-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i>
                                        Save Billing Settings
                                    </button>
                                    <button type="button" class="btn btn-outline">
                                        <i class="fas fa-plus"></i>
                                        Add Payment Method
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <i class="fas fa-download"></i>
                                        Download Statements
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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

        // Settings navigation
        document.addEventListener('DOMContentLoaded', function() {
            const navItems = document.querySelectorAll('.settings-nav-item');
            const sections = document.querySelectorAll('.settings-section');

            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    const targetSection = this.dataset.section;
                    
                    // Update navigation
                    navItems.forEach(nav => nav.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Update sections
                    sections.forEach(section => {
                        section.classList.remove('active');
                        if (section.dataset.section === targetSection) {
                            section.classList.add('active');
                        }
                    });
                });
            });

            // Toggle switches
            const toggleSwitches = document.querySelectorAll('.toggle-switch');
            toggleSwitches.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    this.classList.toggle('active');
                    const setting = this.dataset.setting;
                    console.log(`Toggle ${setting}:`, this.classList.contains('active'));
                });
            });

            // Form submissions
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Show loading state
                    const submitBtn = this.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Saving...';
                    submitBtn.disabled = true;
                    
                    // Simulate API call
                    setTimeout(() => {
                        submitBtn.innerHTML = '<i class="fas fa-check"></i> Saved!';
                        setTimeout(() => {
                            submitBtn.innerHTML = originalText;
                            submitBtn.disabled = false;
                        }, 2000);
                    }, 1500);
                });
            });

            // Profile picture upload
            const uploadBtn = document.querySelector('.avatar-actions .btn-primary');
            if (uploadBtn) {
                uploadBtn.addEventListener('click', function() {
                    const input = document.createElement('input');
                    input.type = 'file';
                    input.accept = 'image/*';
                    input.onchange = function(e) {
                        const file = e.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                const avatar = document.querySelector('.current-avatar');
                                avatar.style.backgroundImage = `url(${e.target.result})`;
                                avatar.style.backgroundSize = 'cover';
                                avatar.style.backgroundPosition = 'center';
                                avatar.textContent = '';
                            };
                            reader.readAsDataURL(file);
                        }
                    };
                    input.click();
                });
            }

            // Remove profile picture
            const removeBtn = document.querySelector('.avatar-actions .btn-secondary');
            if (removeBtn) {
                removeBtn.addEventListener('click', function() {
                    if (confirm('Are you sure you want to remove your profile picture?')) {
                        const avatar = document.querySelector('.current-avatar');
                        avatar.style.backgroundImage = '';
                        avatar.textContent = 'SI';
                    }
                });
            }

            // Auto-format phone number
            const phoneInput = document.querySelector('input[type="tel"]');
            if (phoneInput) {
                phoneInput.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\D/g, '');
                    if (value.length >= 6) {
                        value = `+1 (${value.slice(0,3)}) ${value.slice(3,6)}-${value.slice(6,10)}`;
                    } else if (value.length >= 3) {
                        value = `+1 (${value.slice(0,3)}) ${value.slice(3)}`;
                    } else if (value.length > 0) {
                        value = `+1 (${value}`;
                    }
                    e.target.value = value;
                });
            }

            // Dangerous actions confirmation
            const dangerButtons = document.querySelectorAll('.btn-danger');
            dangerButtons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const action = this.textContent.trim();
                    if (!confirm(`Are you sure you want to ${action.toLowerCase()}? This action cannot be undone.`)) {
                        e.preventDefault();
                    }
                });
            });

            // Session management
            const sessionBtn = document.querySelector('button:contains("View Sessions")');
            if (sessionBtn) {
                sessionBtn.addEventListener('click', function() {
                    alert('Session management feature coming soon!');
                });
            }

            // Connected accounts
            const connectBtns = document.querySelectorAll('.connected-account .btn-outline');
            connectBtns.forEach(btn => {
                if (btn.textContent.includes('Connect')) {
                    btn.addEventListener('click', function() {
                        const accountName = this.closest('.connected-account').querySelector('h4').textContent;
                        alert(`Connecting to ${accountName}...`);
                        
                        // Simulate connection
                        setTimeout(() => {
                            const details = this.closest('.connected-account').querySelector('p');
                            details.textContent = 'Connected • user@example.com';
                            this.textContent = 'Disconnect';
                            this.classList.remove('btn-outline');
                            this.classList.add('btn-danger');
                        }, 2000);
                    });
                }
            });

            // Disconnect accounts
            const disconnectBtns = document.querySelectorAll('.connected-account .btn-danger');
            disconnectBtns.forEach(btn => {
                if (btn.textContent.includes('Disconnect')) {
                    btn.addEventListener('click', function() {
                        const accountName = this.closest('.connected-account').querySelector('h4').textContent;
                        if (confirm(`Disconnect from ${accountName}?`)) {
                            const details = this.closest('.connected-account').querySelector('p');
                            details.textContent = 'Not connected';
                            this.textContent = 'Connect';
                            this.classList.remove('btn-danger');
                            this.classList.add('btn-outline');
                        }
                    });
                }
            });
        });

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
            }
        });

        // Auto-save functionality for certain settings
        const autoSaveInputs = document.querySelectorAll('.form-input, .form-select');
        autoSaveInputs.forEach(input => {
            let timeout;
            input.addEventListener('input', function() {
                clearTimeout(timeout);
                timeout = setTimeout(() => {
                    // Show auto-save indicator
                    const indicator = document.createElement('span');
                    indicator.className = 'auto-save-indicator';
                    indicator.innerHTML = '<i class="fas fa-check" style="color: var(--success); margin-left: 0.5rem;"></i>';
                    
                    // Remove existing indicators
                    const existing = this.parentNode.querySelector('.auto-save-indicator');
                    if (existing) existing.remove();
                    
                    // Add new indicator
                    this.parentNode.appendChild(indicator);
                    
                    // Remove after 3 seconds
                    setTimeout(() => {
                        if (indicator.parentNode) {
                            indicator.remove();
                        }
                    }, 3000);
                }, 1000);
            });
        });
    </script>
</body>
</html>
