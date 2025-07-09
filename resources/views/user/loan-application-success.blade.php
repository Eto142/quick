@extends('layouts.app')

@section('content')
<div class="success-container">
    <div class="success-icon">
        <i class="fas fa-check"></i>
    </div>
    <h3 class="success-title">Application Submitted Successfully!</h3>
    <p class="success-message">
        Thank you for choosing MyBank. Your loan application has been received and is being processed. 
        You will receive an email confirmation shortly with your application details.
    </p>
    
    <div class="reference-number">
        <div class="reference-label">Application Reference Number</div>
        <div class="reference-value">{{ $application->reference_number }}</div>
    </div>
    
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <button class="nav-btn primary" onclick="window.print()">
            <i class="fas fa-print"></i>
            Print Application
        </button>
        <a href="{{ url('/') }}" class="nav-btn secondary">
            <i class="fas fa-home"></i>
            Back to Dashboard
        </a>
    </div>
</div>
@endsection