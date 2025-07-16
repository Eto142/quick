    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">QN</div>
                <div class="brand-name">Quick<span>Nest</span></div>
            </div>
            
            <nav class="sidebar-nav">
                <div class="nav-section">
                    <div class="nav-section-title">Overview</div>
                    <a href="{{route('user.home')}}" class="nav-item active">
                        <i class="fas fa-chart-line"></i>
                        Dashboard
                    </a>
                     <a href="{{route('user.apply')}}" class="nav-item">
                        <i class="fas fa-plus-circle"></i>
                        Apply for Loan
                    </a>
                </div>
                
                <div class="nav-section">
                    <div class="nav-section-title">Loans</div>
                    <a href="{{route('user.loan')}}" class="nav-item">
                        <i class="fas fa-money-bill-wave"></i>
                        My Loans
                    </a>
                   
                    {{-- <a href="#" class="nav-item">
                        <i class="fas fa-calculator"></i>
                        Loan Calculator
                    </a> --}}
                </div>
                
                <div class="nav-section">
                    {{-- <div class="nav-section-title">Payments</div>
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
                </div> --}}
                
                <div class="nav-section">
                    <div class="nav-section-title">Support</div>
                    <a href="{{route('user.messages')}}" class="nav-item">
                        <i class="fas fa-wallet"></i>
                       Messages
                    </a>

                    {{-- <a href="#" class="nav-item">
                        <i class="fas fa-file-invoice-dollar"></i>
                        Statements
                    </a> --}}
                    <a href="{{route('user.help')}}" class="nav-item">
                        <i class="fas fa-headset"></i>
                        Help Center
                    </a>
                    <a href="{{route('user.profile')}}" class="nav-item">
                        <i class="fas fa-cog"></i>
                        Settings
                    </a>

                     <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-item">
                        <i class="fas fa-cog"></i>
                        Logout
                    </a>


    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="hidden">
        @csrf
    </form>
</li>

                </div>
            </nav>
            
            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="user-avatar">{{ Auth::user()->first_name }}
</div>
                    <div class="user-info">
                        <h4>{{ Auth::user()->first_name }}
</h4>
                        <p>Premium Member</p>
                    </div>
                </div>
            </div>
        </aside>