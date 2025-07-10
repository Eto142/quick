<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard| Quicknest</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>

        .header-actions {
    display: flex;
    align-items: center;
    gap: 15px;
    position: relative;
}

.header-btn {
    background: none;
    border: none;
    cursor: pointer;
    position: relative;
}

.notification-badge {
    position: absolute;
    top: 0;
    right: -5px;
    background: red;
    color: white;
    border-radius: 50%;
    font-size: 10px;
    padding: 2px 5px;
}

.profile-pic {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    object-fit: cover;
}

/* Dropdown styles */
.dropdown {
    position: relative;
}

.dropdown-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 40px;
    background-color: white;
    border: 1px solid #ddd;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border-radius: 6px;
    overflow: hidden;
    z-index: 10;
    min-width: 150px;
}

.dropdown-menu a,
.dropdown-menu button {
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    color: #333;
    background: white;
    border: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
}

.dropdown-menu a:hover,
.dropdown-menu button:hover {
    background-color: #f0f0f0;
}

/* Show dropdown on button click - JS needed */
.dropdown.open .dropdown-menu {
    display: block;
}

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

        /* Welcome Section */
        .welcome-section {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--white);
            padding: 1.5rem;
            border-radius: var(--border-radius-lg);
            margin-bottom: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        .welcome-content {
            position: relative;
            z-index: 1;
        }

        .welcome-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .welcome-subtitle {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-bottom: 1rem;
        }

        .quick-actions {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .quick-action-btn {
            background: rgba(255, 255, 255, 0.2);
            color: var(--white);
            border: none;
            padding: 0.6rem 1rem;
            border-radius: var(--border-radius-md);
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.8rem;
            flex-shrink: 0;
        }

        .quick-action-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .stat-card {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--bg-dark);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            min-width: 0;
        }

        .stat-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-3px);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
        }

        .stat-card.primary::before { background: var(--primary); }
        .stat-card.success::before { background: var(--success); }
        .stat-card.warning::before { background: var(--warning); }
        .stat-card.accent::before { background: var(--accent); }

        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
            gap: 1rem;
        }

        .stat-content {
            flex: 1;
            min-width: 0;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: var(--border-radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            box-shadow: var(--shadow-sm);
            flex-shrink: 0;
        }

        .stat-icon.primary {
            background: rgba(26, 86, 50, 0.1);
            color: var(--primary);
        }

        .stat-icon.success {
            background: rgba(22, 163, 74, 0.1);
            color: var(--success);
        }

        .stat-icon.warning {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning);
        }

        .stat-icon.accent {
            background: rgba(212, 175, 55, 0.1);
            color: var(--accent);
        }

        .stat-content h4 {
            font-size: 0.8rem;
            color: var(--text-light);
            font-weight: 500;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .stat-value {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
            line-height: 1;
            word-break: break-all;
        }

        .stat-change {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            font-size: 0.75rem;
            font-weight: 500;
            flex-wrap: wrap;
        }

        .stat-change.positive { color: var(--success); }
        .stat-change.negative { color: var(--error); }
        .stat-change.neutral { color: var(--text-light); }

        /* Dashboard Grid */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .chart-section {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .chart-card {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--bg-dark);
            min-width: 0;
            overflow: hidden;
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .chart-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            flex: 1;
            min-width: 0;
        }

        .chart-filters {
            display: flex;
            gap: 0.25rem;
            background: var(--bg);
            padding: 0.25rem;
            border-radius: var(--border-radius-md);
            flex-shrink: 0;
        }

        .filter-btn {
            padding: 0.4rem 0.8rem;
            border: none;
            background: transparent;
            color: var(--text-medium);
            border-radius: var(--border-radius-sm);
            font-size: 0.75rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            min-width: 40px;
        }

        .filter-btn:hover {
            background: var(--bg-dark);
        }

        .filter-btn.active {
            background: var(--primary);
            color: var(--white);
            box-shadow: var(--shadow-sm);
        }

        .chart-container {
            height: 300px;
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        /* Sidebar Content */
        .sidebar-content {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .info-card {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--bg-dark);
            min-width: 0;
        }

        .info-card-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .progress-item {
            margin-bottom: 1.5rem;
        }

        .progress-item:last-child {
            margin-bottom: 0;
        }

        .progress-label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
            gap: 0.5rem;
        }

        .progress-name {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-dark);
            flex: 1;
            min-width: 0;
        }

        .progress-value {
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--text-medium);
            flex-shrink: 0;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: var(--bg);
            border-radius: var(--border-radius-sm);
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            border-radius: var(--border-radius-sm);
            transition: width 1s ease;
        }

        /* Transactions Table */
        .transactions-section {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--bg-dark);
            overflow: hidden;
            min-width: 0;
        }

        .table-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--bg-dark);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .table-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            flex: 1;
            min-width: 0;
        }

        .table-actions {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
            flex-shrink: 0;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.6rem 1rem;
            border: 1px solid var(--bg-dark);
            background: var(--white);
            color: var(--text-medium);
            border-radius: var(--border-radius-md);
            font-size: 0.8rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            white-space: nowrap;
        }

        .action-btn:hover {
            background: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }

        .action-btn.primary {
            background: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }

        .table-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .transactions-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        .transactions-table th {
            background: var(--bg);
            padding: 1rem;
            text-align: left;
            font-size: 0.7rem;
            font-weight: 700;
            color: var(--text-medium);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid var(--bg-dark);
            white-space: nowrap;
        }

        .transactions-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--bg-dark);
            font-size: 0.8rem;
            vertical-align: middle;
        }

        .transactions-table tr:hover {
            background: var(--bg);
        }

        .transaction-date {
            color: var(--text-medium);
            font-weight: 500;
            white-space: nowrap;
        }

        .transaction-description {
            color: var(--text-dark);
            font-weight: 600;
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .transaction-type {
            color: var(--text-light);
            font-weight: 500;
            white-space: nowrap;
        }

        .transaction-amount {
            font-weight: 700;
            color: var(--text-dark);
            white-space: nowrap;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.4rem 0.8rem;
            border-radius: var(--border-radius-md);
            font-size: 0.65rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            white-space: nowrap;
        }

        .status-success {
            background: rgba(22, 163, 74, 0.1);
            color: var(--success);
        }

        .status-pending {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning);
        }

        .status-failed {
            background: rgba(220, 38, 38, 0.1);
            color: var(--error);
        }

        .action-button {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.5rem 0.8rem;
            background: var(--primary);
            color: var(--white);
            border: none;
            border-radius: var(--border-radius-sm);
            font-size: 0.7rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            white-space: nowrap;
        }

        .action-button:hover {
            background: var(--primary-dark);
        }

        .action-button:disabled {
            background: var(--text-light);
            cursor: not-allowed;
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
        @media (min-width: 1200px) {
            .dashboard-grid {
                grid-template-columns: 2fr 1fr;
            }
            
            .content {
                padding: 2rem;
            }
            
            .stats-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 1199px) {
            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
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

            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1rem;
            }

            .chart-container {
                height: 280px;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }

            .content {
                padding: 1rem;
            }

            .welcome-section {
                padding: 1.25rem;
            }

            .welcome-title {
                font-size: 1.1rem;
            }

            .welcome-subtitle {
                font-size: 0.85rem;
            }

            .quick-actions {
                flex-direction: column;
                gap: 0.5rem;
            }

            .quick-action-btn {
                justify-content: center;
                padding: 0.75rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .stat-card {
                padding: 1.25rem;
            }

            .stat-value {
                font-size: 1.5rem;
            }

            .chart-card,
            .info-card {
                padding: 1.25rem;
            }

            .chart-container {
                height: 250px;
            }

            .chart-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .chart-filters {
                width: 100%;
                justify-content: center;
            }

            .table-header {
                padding: 1.25rem;
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .table-actions {
                width: 100%;
                justify-content: space-between;
            }

            .transactions-table th,
            .transactions-table td {
                padding: 0.75rem 0.5rem;
                font-size: 0.75rem;
            }

            .header-actions {
                gap: 0.5rem;
            }

            .header-btn {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }

            .page-title {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 640px) {
            .header-left {
                gap: 0.75rem;
            }

            .page-title {
                font-size: 1.1rem;
            }

            .breadcrumb {
                font-size: 0.75rem;
            }

            .stat-header {
                flex-direction: column;
                gap: 0.75rem;
                align-items: flex-start;
            }

            .stat-icon {
                width: 40px;
                height: 40px;
                font-size: 1.1rem;
            }

            .stat-value {
                font-size: 1.4rem;
            }

            .chart-filters {
                flex-wrap: wrap;
                gap: 0.25rem;
            }

            .filter-btn {
                flex: 1;
                min-width: 50px;
                padding: 0.5rem 0.6rem;
            }

            .transactions-table {
                min-width: 600px;
            }

            .action-btn {
                padding: 0.5rem 0.75rem;
                font-size: 0.75rem;
            }

            .action-button {
                padding: 0.4rem 0.6rem;
                font-size: 0.65rem;
            }

            .status-badge {
                padding: 0.3rem 0.6rem;
                font-size: 0.6rem;
            }
        }

        @media (max-width: 480px) {
            .content {
                padding: 0.75rem;
            }

            .welcome-section {
                padding: 1rem;
                margin-bottom: 1rem;
            }

            .stats-grid {
                gap: 0.75rem;
                margin-bottom: 1rem;
            }

            .stat-card {
                padding: 1rem;
            }

            .chart-card,
            .info-card {
                padding: 1rem;
            }

            .chart-container {
                height: 220px;
            }

            .table-header {
                padding: 1rem;
            }

            .transactions-table th,
            .transactions-table td {
                padding: 0.6rem 0.4rem;
            }

            .header {
                padding: 0.75rem;
            }

            .header-btn {
                width: 32px;
                height: 32px;
                font-size: 0.85rem;
            }

            .notification-badge {
                width: 16px;
                height: 16px;
                font-size: 0.6rem;
            }

            .sidebar-header {
                padding: 1.25rem;
            }

            .logo {
                width: 36px;
                height: 36px;
                font-size: 1rem;
            }

            .brand-name {
                font-size: 1.1rem;
            }

            .nav-item {
                padding: 0.6rem;
                font-size: 0.8rem;
            }

            .user-profile {
                padding: 0.6rem;
            }

            .user-avatar {
                width: 32px;
                height: 32px;
                font-size: 0.8rem;
            }

            .user-info h4 {
                font-size: 0.8rem;
            }

            .user-info p {
                font-size: 0.7rem;
            }
        }

        /* Landscape phone adjustments */
        @media (max-width: 768px) and (orientation: landscape) {
            .chart-container {
                height: 200px;
            }
            
            .welcome-section {
                padding: 1rem;
            }
            
            .quick-actions {
                flex-direction: row;
                flex-wrap: wrap;
            }
        }

        /* Print styles */
        @media print {
            .sidebar,
            .header-actions,
            .menu-toggle,
            .overlay {
                display: none !important;
            }
            
            .main-content {
                margin-left: 0 !important;
                width: 100% !important;
            }
            
            .content {
                padding: 0 !important;
            }
            
            .chart-container {
                height: 300px !important;
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
                        <h1 class="page-title">User Dashboard</h1>
                        <div class="breadcrumb">
                            <a href="#">Home</a> / <span>Loan Dashboard</span>
                        </div>
                    </div>
                </div>
                
<div class="header-actions">
    <button class="header-btn">
        <i class="fas fa-bell"></i>
        <span class="notification-badge">1</span>
    </button>

    <!-- Profile Picture with Dropdown -->
    <div class="dropdown">
        <button class="header-btn dropdown-toggle">
            <img src="path-to-profile.jpg" alt="Profile" class="profile-pic">
        </button>
        <div class="dropdown-menu">
            <a href="/profile">Profile</a>
            <form method="POST" action="/logout">
                <!-- Include CSRF token if using Laravel or similar -->
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</div>

            </header>

            <script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdown = document.querySelector('.dropdown');

        dropdownToggle.addEventListener('click', function (e) {
            e.stopPropagation();
            dropdown.classList.toggle('open');
        });

        document.addEventListener('click', function () {
            dropdown.classList.remove('open');
        });
    });
</script>

