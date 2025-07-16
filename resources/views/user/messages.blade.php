<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Center | MyBank</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">


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