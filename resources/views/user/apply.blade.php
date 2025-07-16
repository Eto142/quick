<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Loan | MyBank</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/apply.css') }}">
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
                            <input type="text" class="form-input" name="state" value="{{ old('state') }}" required>
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
                            <label class="form-label">Loan Purpose <span class="required">*</span></label>
                            <input type="text" class="form-input" name="loan_purpose" placeholder="For Mortgage" 
                                   value="{{ old('loan_purpose') }}" min="1000" required>
                            @error('loan_purpose')<div class="error-message">{{ $message }}</div>@enderror
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
                                         'fair' => 'Fair (650-699)', 'poor' => 'Poor (550-300)',
                                         'bad' => 'Bad (Below 550)'] as $value => $label)
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