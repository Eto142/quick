<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Success | QuickNest Loan</title>
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
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.15);
            --border-radius-sm: 8px;
            --border-radius-md: 12px;
            --border-radius-lg: 16px;
            --border-radius-xl: 20px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e8f5e8 0%, #f0f9ff 50%, #f9fafb 100%);
            color: var(--text-dark);
            line-height: 1.6;
            font-size: 14px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .success-container {
            max-width: 800px;
            width: 100%;
            background: var(--white);
            border-radius: var(--border-radius-xl);
            box-shadow: var(--shadow-xl);
            overflow: hidden;
            position: relative;
        }

        .success-header {
            background: linear-gradient(135deg, var(--success), #22c55e);
            color: var(--white);
            padding: 3rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .success-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="1.5" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
            opacity: 0.3;
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            position: relative;
            z-index: 1;
            animation: successPulse 2s infinite;
        }

        .success-icon i {
            font-size: 3rem;
            color: var(--white);
            animation: checkBounce 1s ease-out;
        }

        @keyframes successPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes checkBounce {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        .success-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .success-message {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 500px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .success-content {
            padding: 3rem 2rem;
        }

        .reference-section {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(147, 197, 253, 0.1));
            border: 2px solid rgba(59, 130, 246, 0.2);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .reference-label {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 0.5rem;
        }

        .reference-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--info);
            font-family: 'Courier New', monospace;
            letter-spacing: 0.1em;
            margin-bottom: 0.5rem;
        }

        .reference-note {
            font-size: 0.8rem;
            color: var(--text-light);
        }

        .status-timeline {
            margin-bottom: 2rem;
        }

        .timeline-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .timeline-title i {
            color: var(--info);
        }

        .timeline-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .timeline-item:not(:last-child)::after {
            content: '';
            position: absolute;
            left: 15px;
            top: 40px;
            width: 2px;
            height: 30px;
            background: var(--bg-dark);
        }

        .timeline-dot {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .timeline-dot.completed {
            background: var(--success);
            color: var(--white);
        }

        .timeline-dot.current {
            background: var(--warning);
            color: var(--white);
            animation: pulse 2s infinite;
        }

        .timeline-dot.pending {
            background: var(--bg-dark);
            color: var(--text-light);
        }

        .timeline-content {
            flex: 1;
        }

        .timeline-title-text {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.25rem;
        }

        .timeline-description {
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .next-steps {
            background: var(--bg);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .next-steps-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
        }

        .step-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .step-icon {
            width: 24px;
            height: 24px;
            background: var(--info);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            margin-right: 1rem;
            flex-shrink: 0;
            margin-top: 0.25rem;
        }

        .step-content {
            flex: 1;
        }

        .step-title {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.25rem;
        }

        .step-description {
            font-size: 0.9rem;
            color: var(--text-medium);
        }

        .important-info {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(251, 191, 36, 0.1));
            border: 2px solid rgba(245, 158, 11, 0.2);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .important-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--warning);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .important-list {
            list-style: none;
        }

        .important-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
            color: var(--text-medium);
        }

        .important-list li::before {
            content: '';
            width: 8px;
            height: 8px;
            background: var(--warning);
            border-radius: 50%;
            margin-right: 0.75rem;
            margin-top: 0.5rem;
            flex-shrink: 0;
        }

        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: var(--border-radius-md);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition);
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--info), #0ea5e9);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(14, 165, 233, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(14, 165, 233, 0.4);
        }

        .btn-success {
            background: linear-gradient(135deg, var(--success), #22c55e);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(22, 163, 74, 0.3);
        }

        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(22, 163, 74, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, var(--text-light), var(--text-medium));
            color: var(--white);
            box-shadow: 0 4px 15px rgba(100, 116, 139, 0.3);
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(100, 116, 139, 0.4);
        }

        .contact-info {
            text-align: center;
            padding-top: 2rem;
            border-top: 2px solid var(--bg-dark);
        }

        .contact-title {
            font-size: 1.1rem;
            color: var(--text-medium);
            margin-bottom: 1rem;
        }

        .contact-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            font-size: 0.9rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-medium);
        }

        .contact-item i {
            color: var(--info);
        }

        .additional-services {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            margin-top: 2rem;
            box-shadow: var(--shadow-md);
        }

        .services-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .service-link {
            display: flex;
            align-items: center;
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--bg), rgba(139, 92, 246, 0.05));
            border: 2px solid var(--bg-dark);
            border-radius: var(--border-radius-md);
            text-decoration: none;
            color: var(--text-dark);
            transition: var(--transition);
        }

        .service-link:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            border-color: var(--primary);
        }

        .service-icon-small {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            color: var(--white);
            border-radius: var(--border-radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .service-text {
            flex: 1;
        }

        .service-name {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .service-desc {
            font-size: 0.8rem;
            color: var(--text-light);
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .success-header {
                padding: 2rem 1.5rem;
            }

            .success-title {
                font-size: 2rem;
            }

            .success-content {
                padding: 2rem 1.5rem;
            }

            .reference-value {
                font-size: 1.5rem;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .contact-details {
                flex-direction: column;
                gap: 1rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .success-icon {
                width: 80px;
                height: 80px;
            }

            .success-icon i {
                font-size: 2rem;
            }

            .success-title {
                font-size: 1.75rem;
            }

            .reference-section,
            .next-steps,
            .important-info {
                padding: 1.5rem;
            }
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <!-- Success Header -->
        <div class="success-header">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <h1 class="success-title">Application Submitted Successfully!</h1>
            <p class="success-message">
                Thank you for choosing QuickNest Loan. Your loan application has been received and is being processed. 
                You will receive an email confirmation shortly with your application details.
            </p>
        </div>

        <!-- Success Content -->
        <div class="success-content">
            <!-- Reference Number -->
            <div class="reference-section">
                <div class="reference-label">Application Reference Number</div>
                <div class="reference-value" id="referenceNumber">MB20250110-A7B9</div>
                <div class="reference-note">Please save this number for your records</div>
            </div>

            <!-- Status Timeline -->
            <div class="status-timeline">
                <h3 class="timeline-title">
                    <i class="fas fa-clock"></i>
                    Application Status
                </h3>
                
                <div class="timeline-item">
                    <div class="timeline-dot completed">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-title-text">Application Submitted</div>
                        <div class="timeline-description" id="currentTime">January 10, 2025 at 12:14 PM</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot current">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-title-text">Under Review</div>
                        <div class="timeline-description">Processing time: 2-5 business days</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot pending">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-title-text">Decision Notification</div>
                        <div class="timeline-description">You'll receive an email update</div>
                    </div>
                </div>
            </div>

            <!-- Next Steps -->
            <div class="next-steps">
                <h3 class="next-steps-title">What Happens Next?</h3>
                
                <div class="step-item">
                    <div class="step-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="step-content">
                        <div class="step-title">Email Confirmation</div>
                        <div class="step-description">You'll receive a detailed confirmation email within 15 minutes</div>
                    </div>
                </div>

                <div class="step-item">
                    <div class="step-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="step-content">
                        <div class="step-title">Document Verification</div>
                        <div class="step-description">Our team will verify your submitted documents</div>
                    </div>
                </div>

                <div class="step-item">
                    <div class="step-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="step-content">
                        <div class="step-title">Contact if Needed</div>
                        <div class="step-description">We may call you for additional information</div>
                    </div>
                </div>
            </div>

            <!-- Important Information -->
            <div class="important-info">
                <h3 class="important-title">
                    <i class="fas fa-exclamation-triangle"></i>
                    Important Information
                </h3>
                <ul class="important-list">
                    <li>Keep your reference number safe for future correspondence</li>
                    <li>Check your email regularly for updates on your application</li>
                    <li>Contact us immediately if your contact information changes</li>
                    <li>Ensure your phone is available during business hours</li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <button class="btn btn-primary" onclick="printApplication()">
                    <i class="fas fa-print"></i>
                    Print Application
                </button>
              
                <a href="{{ route('user.home') }}" class="btn btn-secondary">
                    <i class="fas fa-home"></i>
                    Back to Dashboard
                </a>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <p class="contact-title">Need help? Contact our support team</p>
                <div class="contact-details">
                   
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>support@quickNestlns.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <span>Mon-Fri: 8AM-8PM EST</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Services -->
        <div class="additional-services">
            <h3 class="services-title">While You Wait, Explore Our Services</h3>
            <div class="services-grid">
                <a href="https://www.equifax.com/" class="service-link">
                    <div class="service-icon-small">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="service-text">
                        <div class="service-name">Check Credit Score</div>
                        <div class="service-desc">Free credit monitoring</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        // Generate reference number
        function generateReferenceNumber() {
            const timestamp = Date.now().toString().slice(-8);
            const random = Math.random().toString(36).substr(2, 4).toUpperCase();
            return `MB${timestamp}-${random}`;
        }

        // Update current time
        function updateCurrentTime() {
            const now = new Date();
            const timeString = now.toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            }) + ' at ' + now.toLocaleTimeString('en-US', {
                hour: 'numeric',
                minute: '2-digit',
                hour12: true
            });
            document.getElementById('currentTime').textContent = timeString;
        }

        // Print application
        function printApplication() {
            window.print();
        }

        // Download PDF (simulation)
        function downloadPDF() {
            const button = event.target.closest('.btn');
            const originalText = button.innerHTML;
            
            button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Generating PDF...';
            button.disabled = true;
            
            setTimeout(() => {
                button.innerHTML = originalText;
                button.disabled = false;
                alert('PDF download would start here. This is a demo.');
            }, 2000);
        }

        // Button click effects
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                if (this.getAttribute('onclick')) return;
                
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255, 255, 255, 0.3);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s ease-out;
                    pointer-events: none;
                `;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            // Set reference number
            document.getElementById('referenceNumber').textContent = generateReferenceNumber();
            
            // Update current time
            updateCurrentTime();
            
            // Add entrance animation
            const container = document.querySelector('.success-container');
            container.style.opacity = '0';
            container.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                container.style.transition = 'all 0.8s ease';
                container.style.opacity = '1';
                container.style.transform = 'translateY(0)';
            }, 100);
        });

        // Keyboard shortcuts
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey || e.metaKey) {
                switch(e.key) {
                    case 'p':
                        e.preventDefault();
                        printApplication();
                        break;
                    case 'd':
                        e.preventDefault();
                        downloadPDF();
                        break;
                    case 'h':
                        e.preventDefault();
                        window.location.href = 'index.html';
                        break;
                }
            }
        });
    </script>
</body>
</html>
