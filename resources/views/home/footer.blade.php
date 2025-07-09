
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