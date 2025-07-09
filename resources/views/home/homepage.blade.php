@include('home.header')
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
@include('home.footer')