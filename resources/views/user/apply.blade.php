<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Loan | MyBank</title>
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

        /* Sidebar Styles - Modernized */
        .sidebar {
            width: 280px;
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
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
            box-shadow: var(--shadow-lg);
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
            background: rgba(255, 255, 255, 0.1);
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
            transition: var(--transition);
        }

        .user-profile:hover {
            background: rgba(255, 255, 255, 0.15);
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

        /* Main Content - Modernized */
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
            transition: var(--transition);
        }

        .breadcrumb a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
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

        /* Content Area - Modernized */
        .content {
            flex: 1;
            padding: 1.5rem;
            max-width: 100%;
            overflow-x: hidden;
            background: linear-gradient(135deg, rgba(248, 250, 252, 0.8), rgba(241, 245, 249, 0.8));
        }

        /* Progress Steps - Modernized */
        .progress-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            padding: 0 1rem;
            position: relative;
        }

        .progress-line {
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--bg-dark);
            z-index: 1;
        }

        .progress-fill {
            position: absolute;
            top: 20px;
            left: 0;
            height: 4px;
            background: var(--primary);
            z-index: 2;
            transition: width 0.5s ease;
        }

        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 3;
            padding: 0 1rem;
        }

        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--bg-dark);
            color: var(--text-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
            transition: var(--transition);
            border: 2px solid var(--bg-dark);
        }

        .progress-step.active .step-number {
            background: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }

        .progress-step.completed .step-number {
            background: var(--success);
            color: var(--white);
            border-color: var(--success);
        }

        .step-label {
            font-size: 0.75rem;
            font-weight: 500;
            color: var(--text-light);
            text-align: center;
            white-space: nowrap;
        }

        .progress-step.active .step-label {
            color: var(--primary);
            font-weight: 600;
        }

        .progress-step.completed .step-label {
            color: var(--success);
            font-weight: 600;
        }

        /* Form Container - Modernized */
        .form-container {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--bg-dark);
            overflow: hidden;
            transition: var(--transition);
        }

        .form-container:hover {
            box-shadow: var(--shadow-lg);
        }

        .form-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--white);
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .form-header::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .form-header::after {
            content: '';
            position: absolute;
            bottom: -30px;
            left: -30px;
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .form-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 2;
        }

        .form-subtitle {
            font-size: 1rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        .form-content {
            padding: 2rem;
        }

        .form-phase {
            display: none;
        }

        .form-phase.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
            border-radius: 3px;
        }

        .section-description {
            color: var(--text-light);
            margin-bottom: 2rem;
            font-size: 0.95rem;
        }

        /* Loan Type Selection - Modernized */
        .loan-types {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .loan-type-card {
            border: 2px solid var(--bg-dark);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            background: var(--white);
            overflow: hidden;
        }

        .loan-type-card:hover {
            border-color: var(--primary-light);
            box-shadow: var(--shadow-md);
            transform: translateY(-5px);
        }

        .loan-type-card.selected {
            border-color: var(--primary);
            background: rgba(26, 86, 50, 0.05);
        }

        .loan-type-card.selected::after {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 24px;
            height: 24px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
        }

        .loan-type-icon {
            width: 60px;
            height: 60px;
            background: rgba(26, 86, 50, 0.1);
            color: var(--primary);
            border-radius: var(--border-radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .loan-type-card:hover .loan-type-icon {
            background: var(--primary);
            color: var(--white);
        }

        .loan-type-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .loan-type-description {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .loan-type-features {
            list-style: none;
        }

        .loan-type-features li {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-medium);
            font-size: 0.85rem;
            margin-bottom: 0.5rem;
        }

        .loan-type-features li i {
            color: var(--success);
            font-size: 0.75rem;
        }

        /* Form Fields - Modernized */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            position: relative;
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

        .required {
            color: var(--error);
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

        .form-input.error,
        .form-select.error,
        .form-textarea.error {
            border-color: var(--error);
        }

        .form-textarea {
            resize: vertical;
            min-height: 100px;
        }

        .error-message {
            color: var(--error);
            font-size: 0.75rem;
            margin-top: 0.25rem;
            display: none;
        }

        .error-message.show {
            display: block;
        }

        /* File Upload - Modernized */
        .file-upload {
            border: 2px dashed var(--bg-dark);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            text-align: center;
            transition: var(--transition);
            cursor: pointer;
            background: var(--white);
        }

        .file-upload:hover {
            border-color: var(--primary);
            background: rgba(26, 86, 50, 0.02);
        }

        .file-upload.dragover {
            border-color: var(--primary);
            background: rgba(26, 86, 50, 0.05);
        }

        .file-upload-icon {
            width: 60px;
            height: 60px;
            background: rgba(26, 86, 50, 0.1);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
            transition: var(--transition);
        }

        .file-upload:hover .file-upload-icon {
            background: var(--primary);
            color: var(--white);
        }

        .file-upload-text {
            color: var(--text-dark);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .file-upload-hint {
            color: var(--text-light);
            font-size: 0.875rem;
        }

        .file-list {
            margin-top: 1rem;
        }

        .file-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.75rem;
            background: var(--bg);
            border-radius: var(--border-radius-md);
            margin-bottom: 0.5rem;
            transition: var(--transition);
        }

        .file-item:hover {
            background: var(--bg-dark);
        }

        .file-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .file-icon {
            width: 32px;
            height: 32px;
            background: var(--primary);
            color: var(--white);
            border-radius: var(--border-radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
        }

        .file-details h4 {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.125rem;
        }

        .file-details p {
            font-size: 0.75rem;
            color: var(--text-light);
        }

        .file-remove {
            background: none;
            border: none;
            color: var(--error);
            cursor: pointer;
            padding: 0.5rem;
            border-radius: var(--border-radius-sm);
            transition: var(--transition);
        }

        .file-remove:hover {
            background: rgba(220, 38, 38, 0.1);
        }

        /* Review Section - Modernized */
        .review-summary {
            background: var(--bg);
            border-radius: var(--border-radius-lg);
            padding: 1.5rem;
            margin-bottom: 2rem;
            border: 1px solid var(--bg-dark);
        }

        .review-section {
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid var(--bg-dark);
        }

        .review-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .review-section h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .review-section h4 i {
            color: var(--primary);
        }

        .review-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        .review-item {
            background: var(--white);
            padding: 0.75rem;
            border-radius: var(--border-radius-sm);
            box-shadow: var(--shadow-sm);
        }

        .review-item strong {
            display: block;
            font-size: 0.75rem;
            color: var(--text-light);
            margin-bottom: 0.25rem;
        }

        .review-item span {
            font-size: 0.875rem;
            color: var(--text-dark);
            font-weight: 500;
        }

        /* Terms and Conditions - Modernized */
        .terms-container {
            background: var(--bg);
            border-radius: var(--border-radius-lg);
            padding: 1.5rem;
            margin-bottom: 2rem;
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid var(--bg-dark);
        }

        .terms-container::-webkit-scrollbar {
            width: 6px;
        }

        .terms-container::-webkit-scrollbar-track {
            background: var(--bg-dark);
            border-radius: 3px;
        }

        .terms-container::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 3px;
        }

        .terms-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .terms-content {
            color: var(--text-medium);
            font-size: 0.875rem;
            line-height: 1.6;
        }

        .terms-content h4 {
            color: var(--text-dark);
            font-weight: 600;
            margin: 1rem 0 0.5rem;
        }

        .terms-content ul {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }

        .terms-content li {
            margin-bottom: 0.5rem;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
            padding: 0.75rem;
            border-radius: var(--border-radius-sm);
            transition: var(--transition);
        }

        .checkbox-group:hover {
            background: rgba(26, 86, 50, 0.05);
        }

        .checkbox-input {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
            flex-shrink: 0;
            margin-top: 0.125rem;
        }

        .checkbox-label {
            font-size: 0.875rem;
            color: var(--text-medium);
            line-height: 1.5;
        }

        .checkbox-label a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .checkbox-label a:hover {
            text-decoration: underline;
            color: var(--primary-dark);
        }

        /* Form Navigation - Modernized */
        .phase-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            gap: 1rem;
        }

        .btn {
            padding: 0.875rem 1.5rem;
            border: none;
            border-radius: var(--border-radius-md);
            font-size: 0.875rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            flex: 1;
        }

        .btn-prev {
            background: var(--bg-dark);
            color: var(--text-medium);
        }

        .btn-prev:hover {
            background: var(--text-light);
            color: var(--white);
        }

        .btn-next, .btn-primary {
            background: var(--primary);
            color: var(--white);
            box-shadow: var(--shadow-sm);
        }

        .btn-next:hover, .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Success Message - Modernized */
        .success-container {
            text-align: center;
            padding: 3rem 2rem;
            animation: fadeIn 0.5s ease;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: var(--success);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 2rem;
            animation: successPulse 2s infinite;
        }

        @keyframes successPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .success-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .success-message {
            color: var(--text-medium);
            font-size: 1.1rem;
            margin-bottom: 2rem;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .reference-number {
            background: var(--bg);
            border-radius: var(--border-radius-lg);
            padding: 1.5rem;
            margin-bottom: 2rem;
            border: 2px dashed var(--primary);
            position: relative;
            overflow: hidden;
        }

        .reference-number::before {
            content: '';
            position: absolute;
            top: -10px;
            right: -10px;
            width: 20px;
            height: 20px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.2;
        }

        .reference-number::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: -15px;
            width: 30px;
            height: 30px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.1;
        }

        .reference-label {
            font-size: 0.875rem;
            color: var(--text-light);
            margin-bottom: 0.5rem;
        }

        .reference-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            font-family: 'Courier New', monospace;
            position: relative;
            z-index: 2;
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
            backdrop-filter: blur(5px);
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

            .loan-types {
                grid-template-columns: 1fr;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }

            .content {
                padding: 1rem;
            }

            .progress-indicator {
                flex-wrap: wrap;
                gap: 1rem;
            }

            .progress-line {
                display: none;
            }

            .step {
                flex: 1;
                min-width: 80px;
            }

            .step-label {
                font-size: 0.7rem;
            }

            .form-content {
                padding: 1.5rem;
            }

            .form-title {
                font-size: 1.5rem;
            }

            .section-title {
                font-size: 1.25rem;
            }

            .loan-type-card {
                padding: 1.5rem;
            }

            .phase-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .content {
                padding: 0.75rem;
            }

            .form-header {
                padding: 1.5rem;
            }

            .form-content {
                padding: 1rem;
            }

            .page-title {
                font-size: 1.25rem;
            }

            .review-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
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
                        <h1 class="page-title">Apply for Loan</h1>
                        <div class="breadcrumb">
                            <a href="#">Home</a> / <a href="#">Loans</a> / <span>Apply for Loan</span>
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
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Form Container -->
    <div class="form-container">
        <div class="form-header">
            <h2 class="form-title">Loan Application</h2>
            <p class="form-subtitle">Complete the form below to apply for your loan</p>
        </div>

        <!-- Progress Indicator -->
        <div class="progress-indicator">
            <div class="progress-line"></div>
            <div class="progress-fill" style="width: 25%;"></div>
            
            <div class="progress-step active" data-step="1">
                <div class="step-number">1</div>
                <div class="step-label">Loan Type</div>
            </div>
            
            <div class="progress-step" data-step="2">
                <div class="step-number">2</div>
                <div class="step-label">Personal Info</div>
            </div>
            
            <div class="progress-step" data-step="3">
                <div class="step-number">3</div>
                <div class="step-label">Financial Info</div>
            </div>
            
            <div class="progress-step" data-step="4">
                <div class="step-number">4</div>
                <div class="step-label">Review & Submit</div>
            </div>
        </div>

        <form method="POST" action="{{ route('user.loan.application.submit') }}" id="loanForm">
            @csrf
            
            <!-- Phase 1: Loan Type Selection -->
            <div class="form-phase active" data-phase="1">
                <div class="form-section">
                    <h3 class="section-title"><i class="fas fa-hand-holding-usd"></i> Choose Your Loan Type</h3>
                    <p class="section-description">Select the type of loan that best fits your needs</p>
                    
                    <div class="loan-types">
                        @foreach(['personal' => 'user', 'auto' => 'car', 'home' => 'home', 'business' => 'briefcase'] as $type => $icon)
                        <div class="loan-type-card">
                            <input type="radio" name="loan_type" id="loan_type_{{ $type }}" value="{{ $type }}" 
                                   {{ old('loan_type') == $type ? 'checked' : '' }} required>
                            <label for="loan_type_{{ $type }}">
                                <div class="loan-type-icon">
                                    <i class="fas fa-{{ $icon }}"></i>
                                </div>
                                <h4 class="loan-type-title">{{ ucfirst($type) }} Loan</h4>
                                <p class="loan-type-description">Flexible options for your {{ $type }} needs</p>
                                <ul class="loan-type-features">
                                    <li><i class="fas fa-check"></i> Competitive rates</li>
                                    <li><i class="fas fa-check"></i> Flexible terms</li>
                                    <li><i class="fas fa-check"></i> Quick approval</li>
                                </ul>
                            </label>
                        </div>
                        @endforeach
                    </div>
                    @error('loan_type')<div class="error-message">{{ $message }}</div>@enderror
                </div>
                
                <div class="phase-actions">
                    <button type="button" class="btn btn-next" data-next="2">
                        <i class="fas fa-arrow-right"></i> Continue to Personal Information
                    </button>
                </div>
            </div>

            <!-- Phase 2: Personal Information -->
            <div class="form-phase" data-phase="2">
                <div class="form-section">
                    <h3 class="section-title"><i class="fas fa-user"></i> Personal Information</h3>
                    <p class="section-description">Please provide your personal details</p>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">First Name <span class="required">*</span></label>
                            <input type="text" class="form-input" name="first_name" value="{{ old('first_name') }}" required>
                            @error('first_name')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Last Name <span class="required">*</span></label>
                            <input type="text" class="form-input" name="last_name" value="{{ old('last_name') }}" required>
                            @error('last_name')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Date of Birth <span class="required">*</span></label>
                            <input type="date" class="form-input" name="date_of_birth" value="{{ old('date_of_birth') }}" 
                                   max="{{ date('Y-m-d', strtotime('-18 years')) }}" required>
                            @error('date_of_birth')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Social Security Number <span class="required">*</span></label>
                            <input type="text" class="form-input" name="ssn" placeholder="XXX-XX-XXXX" 
                                   value="{{ old('ssn') }}" required>
                            @error('ssn')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Phone Number <span class="required">*</span></label>
                            <input type="tel" class="form-input" name="phone" placeholder="(555) 123-4567" 
                                   value="{{ old('phone') }}" required>
                            @error('phone')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Email Address <span class="required">*</span></label>
                            <input type="email" class="form-input" name="email" value="{{ old('email') }}" required>
                            @error('email')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group full-width">
                            <label class="form-label">Street Address <span class="required">*</span></label>
                            <input type="text" class="form-input" name="address" value="{{ old('address') }}" required>
                            @error('address')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">City <span class="required">*</span></label>
                            <input type="text" class="form-input" name="city" value="{{ old('city') }}" required>
                            @error('city')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">State <span class="required">*</span></label>
                            <select class="form-select" name="state" required>
                                <option value="">Select State</option>
                                @foreach(['AL','AK','AZ','AR','CA','CO','CT','DE','FL','GA'] as $state)
                                <option value="{{ $state }}" {{ old('state') == $state ? 'selected' : '' }}>{{ $state }}</option>
                                @endforeach
                            </select>
                            @error('state')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">ZIP Code <span class="required">*</span></label>
                            <input type="text" class="form-input" name="zip_code" placeholder="12345" 
                                   value="{{ old('zip_code') }}" required>
                            @error('zip_code')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>
                
                <div class="phase-actions">
                    <button type="button" class="btn btn-prev" data-prev="1">
                        <i class="fas fa-arrow-left"></i> Back
                    </button>
                    <button type="button" class="btn btn-next" data-next="3">
                        <i class="fas fa-arrow-right"></i> Continue to Financial Information
                    </button>
                </div>
            </div>

            <!-- Phase 3: Financial Information -->
            <div class="form-phase" data-phase="3">
                <div class="form-section">
                    <h3 class="section-title"><i class="fas fa-chart-line"></i> Financial Information</h3>
                    <p class="section-description">Help us understand your financial situation</p>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">Employment Status <span class="required">*</span></label>
                            <select class="form-select" name="employment_status" required>
                                <option value="">Select Employment Status</option>
                                @foreach(['employed' => 'Employed Full-time', 'part-time' => 'Employed Part-time', 
                                         'self-employed' => 'Self-employed', 'unemployed' => 'Unemployed',
                                         'retired' => 'Retired', 'student' => 'Student'] as $value => $label)
                                <option value="{{ $value }}" {{ old('employment_status') == $value ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                                @endforeach
                            </select>
                            @error('employment_status')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Loan Amount ($) <span class="required">*</span></label>
                            <input type="number" class="form-input" name="loan_amount" placeholder="50000" 
                                   value="{{ old('loan_amount') }}" min="1000" step="1" required>
                            @error('loan_amount')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Annual Income ($) <span class="required">*</span></label>
                            <input type="number" class="form-input" name="annual_income" placeholder="50000" 
                                   value="{{ old('annual_income') }}" min="0" step="1" required>
                            @error('annual_income')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Employer Name</label>
                            <input type="text" class="form-input" name="employer_name" value="{{ old('employer_name') }}">
                            @error('employer_name')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Years at Current Job</label>
                            <input type="number" class="form-input" name="years_at_job" placeholder="2" 
                                   value="{{ old('years_at_job') }}" min="0" max="50">
                            @error('years_at_job')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Credit Score Range</label>
                            <select class="form-select" name="credit_score_range">
                                <option value="">Select Credit Score Range</option>
                                @foreach(['excellent' => 'Excellent (750+)', 'good' => 'Good (700-749)',
                                         'fair' => 'Fair (650-699)', 'poor' => 'Poor (600-649)',
                                         'bad' => 'Bad (Below 600)', 'unknown' => "I don't know"] as $value => $label)
                                <option value="{{ $value }}" {{ old('credit_score_range') == $value ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                                @endforeach
                            </select>
                            @error('credit_score_range')<div class="error-message">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>
                
                <div class="phase-actions">
                    <button type="button" class="btn btn-prev" data-prev="2">
                        <i class="fas fa-arrow-left"></i> Back
                    </button>
                    <button type="button" class="btn btn-next" data-next="4">
                        <i class="fas fa-arrow-right"></i> Continue to Review
                    </button>
                </div>
            </div>

            <!-- Phase 4: Review and Submit -->
            <div class="form-phase" data-phase="4">
                <div class="form-section">
                    <h3 class="section-title"><i class="fas fa-search"></i> Review Your Application</h3>
                    <p class="section-description">Please review all information before submitting</p>
                    
                    <div class="review-summary">
                        <div class="review-section">
                            <h4><i class="fas fa-hand-holding-usd"></i> Loan Type</h4>
                            <div class="review-grid">
                                <div class="review-item">
                                    <strong>Loan Type</strong>
                                    <span id="review-loan-type"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="review-section">
                            <h4><i class="fas fa-user"></i> Personal Information</h4>
                            <div class="review-grid">
                                <div class="review-item">
                                    <strong>Name</strong>
                                    <span id="review-name"></span>
                                </div>
                                <div class="review-item">
                                    <strong>Date of Birth</strong>
                                    <span id="review-dob"></span>
                                </div>
                                <div class="review-item">
                                    <strong>SSN</strong>
                                    <span id="review-ssn"></span>
                                </div>
                                <div class="review-item">
                                    <strong>Contact</strong>
                                    <span id="review-contact"></span>
                                </div>
                                <div class="review-item">
                                    <strong>Address</strong>
                                    <span id="review-address"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="review-section">
                            <h4><i class="fas fa-chart-line"></i> Financial Information</h4>
                            <div class="review-grid">
                                <div class="review-item">
                                    <strong>Employment</strong>
                                    <span id="review-employment"></span>
                                </div>
                                <div class="review-item">
                                    <strong>Loan Amount</strong>
                                    <span id="review-loan-amount"></span>
                                </div>
                                <div class="review-item">
                                    <strong>Annual Income</strong>
                                    <span id="review-income"></span>
                                </div>
                                <div class="review-item">
                                    <strong>Credit Score</strong>
                                    <span id="review-credit"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-section">
                    <h3 class="section-title"><i class="fas fa-file-contract"></i> Terms and Conditions</h3>
                    
                    <div class="terms-container">
                        <h4>1. Loan Agreement</h4>
                        <p>By submitting this application, you agree to the terms and conditions of the loan agreement.</p>
                        
                        <h4>2. Credit Check Authorization</h4>
                        <p>You authorize us to obtain your credit report and verify the information provided.</p>
                        
                        <h4>3. Information Accuracy</h4>
                        <p>You certify that all information provided is true and accurate.</p>
                        
                        <h4>4. Privacy Policy</h4>
                        <p>We will handle your personal information in accordance with our privacy policy.</p>
                    </div>
                    
                    <div class="checkbox-group">
                        <input type="checkbox" id="agreeTerms" name="agree_terms" {{ old('agree_terms') ? 'checked' : '' }} required>
                        <label for="agreeTerms">I agree to the terms and conditions</label>
                        @error('agree_terms')<div class="error-message">{{ $message }}</div>@enderror
                    </div>
                    
                    <div class="checkbox-group">
                        <input type="checkbox" id="agreeCredit" name="agree_credit" {{ old('agree_credit') ? 'checked' : '' }} required>
                        <label for="agreeCredit">I authorize credit check</label>
                        @error('agree_credit')<div class="error-message">{{ $message }}</div>@enderror
                    </div>
                </div>
                
                <div class="phase-actions">
                    <button type="button" class="btn btn-prev" data-prev="3">
                        <i class="fas fa-arrow-left"></i> Back
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Submit Application
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
        </main>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
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

    // Navigation between phases
    document.querySelectorAll('.btn-next').forEach(button => {
        button.addEventListener('click', function() {
            const currentPhase = document.querySelector('.form-phase.active');
            const nextPhase = document.querySelector(`.form-phase[data-phase="${this.dataset.next}"]`);
            
            // Validate current phase before proceeding
            if (validatePhase(currentPhase.dataset.phase)) {
                currentPhase.classList.remove('active');
                nextPhase.classList.add('active');
                
                // Update progress indicator
                updateProgressIndicator(this.dataset.next);
                
                // Update review section if going to phase 4
                if (this.dataset.next === '4') {
                    updateReviewSection();
                }
            }
        });
    });
    
    document.querySelectorAll('.btn-prev').forEach(button => {
        button.addEventListener('click', function() {
            const currentPhase = document.querySelector('.form-phase.active');
            const prevPhase = document.querySelector(`.form-phase[data-phase="${this.dataset.prev}"]`);
            
            currentPhase.classList.remove('active');
            prevPhase.classList.add('active');
            
            // Update progress indicator
            updateProgressIndicator(this.dataset.prev);
        });
    });
    
    // Validate form phase
    function validatePhase(phase) {
        const form = document.getElementById('loanForm');
        let isValid = true;
        
        // Check required fields in current phase
        const requiredFields = document.querySelectorAll(`.form-phase[data-phase="${phase}"] [required]`);
        requiredFields.forEach(field => {
            if (!field.value) {
                field.classList.add('error');
                const errorMsg = field.nextElementSibling;
                if (errorMsg && errorMsg.classList.contains('error-message')) {
                    errorMsg.classList.add('show');
                    errorMsg.textContent = 'This field is required';
                }
                isValid = false;
            }
        });
        
        return isValid;
    }
    
    // Update progress indicator
    function updateProgressIndicator(activeStep) {
        const steps = document.querySelectorAll('.progress-step');
        const progressFill = document.querySelector('.progress-fill');
        
        steps.forEach(step => {
            step.classList.remove('active', 'completed');
        });
        
        let completedSteps = 0;
        steps.forEach((step, index) => {
            if (index < activeStep - 1) {
                step.classList.add('completed');
                completedSteps++;
            } else if (index === activeStep - 1) {
                step.classList.add('active');
            }
        });
        
        // Calculate progress fill width
        const percent = (completedSteps / (steps.length - 1)) * 100;
        progressFill.style.width = `${percent}%`;
    }
    
    // Update review section
    function updateReviewSection() {
        const form = document.getElementById('loanForm');
        
        // Loan Type
        const loanTypeLabel = document.querySelector('input[name="loan_type"]:checked + label .loan-type-title').textContent;
        document.getElementById('review-loan-type').textContent = loanTypeLabel;
        
        // Personal Info
        document.getElementById('review-name').textContent = 
            `${form.querySelector('input[name="first_name"]').value} ${form.querySelector('input[name="last_name"]').value}`;
        
        document.getElementById('review-dob').textContent = 
            new Date(form.querySelector('input[name="date_of_birth"]').value).toLocaleDateString();
        
        document.getElementById('review-ssn').textContent = 
            '***-**-' + form.querySelector('input[name="ssn"]').value.slice(-4);
        
        document.getElementById('review-contact').textContent = 
            `${form.querySelector('input[name="phone"]').value} | ${form.querySelector('input[name="email"]').value}`;
        
        document.getElementById('review-address').textContent = 
            `${form.querySelector('input[name="address"]').value}, ${form.querySelector('input[name="city"]').value}, 
             ${form.querySelector('select[name="state"]').value} ${form.querySelector('input[name="zip_code"]').value}`;

        // Financial Info
        const employmentStatus = form.querySelector('select[name="employment_status"] option:checked').textContent;
        document.getElementById('review-employment').textContent = employmentStatus;
        
        document.getElementById('review-loan-amount').textContent = 
            '$' + parseFloat(form.querySelector('input[name="loan_amount"]').value).toLocaleString();
        
        document.getElementById('review-income').textContent = 
            '$' + parseFloat(form.querySelector('input[name="annual_income"]').value).toLocaleString();
        
        document.getElementById('review-credit').textContent = 
            form.querySelector('select[name="credit_score_range"] option:checked').textContent || 'Not specified';
    }
    
    // Initialize progress indicator
    updateProgressIndicator(1);
    
    // Add input validation
    document.querySelectorAll('[required]').forEach(field => {
        field.addEventListener('input', function() {
            if (this.value) {
                this.classList.remove('error');
                const errorMsg = this.nextElementSibling;
                if (errorMsg && errorMsg.classList.contains('error-message')) {
                    errorMsg.classList.remove('show');
                }
            }
        });
    });
    
    // Format SSN input
    const ssnInput = document.querySelector('input[name="ssn"]');
    if (ssnInput) {
        ssnInput.addEventListener('input', function(e) {
            let value = this.value.replace(/\D/g, '');
            if (value.length > 3) {
                value = value.substring(0, 3) + '-' + value.substring(3);
            }
            if (value.length > 6) {
                value = value.substring(0, 6) + '-' + value.substring(6);
            }
            this.value = value.substring(0, 11);
        });
    }
    
    // Format phone input
    const phoneInput = document.querySelector('input[name="phone"]');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = this.value.replace(/\D/g, '');
            if (value.length > 3) {
                value = '(' + value.substring(0, 3) + ') ' + value.substring(3);
            }
            if (value.length > 9) {
                value = value.substring(0, 9) + '-' + value.substring(9);
            }
            this.value = value.substring(0, 14);
        });
    }
    
    // Add resize handler for better responsiveness
    window.addEventListener('resize', () => {
        if (window.innerWidth > 992) {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        }
    });
});
</script>
</body>
</html>