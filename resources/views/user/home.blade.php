@include('user.header')
            <div class="content">
                <!-- Welcome Section -->
                <div class="welcome-section">
                    <div class="welcome-content">
                        <h2 class="welcome-title">Welcome back, {{ Auth::user()->first_name }}!</h2>
                        <p class="welcome-subtitle">Here's an overview of your loan portfolio and recent activities.</p>
                        <div class="quick-actions">
                            <button class="quick-action-btn">
                                <i class="fas fa-plus"></i>
                                Apply Loan
                            </button>
                            {{-- <button class="quick-action-btn">
                                <i class="fas fa-download"></i>
                                Download Statement
                            </button> --}}
                            <button class="quick-action-btn">
                                <i class="fas fa-calculator"></i>
                                Check Credit Score
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card primary">
                        <div class="stat-header">
                            <div class="stat-content">
                                <h4>Total Loan Amount</h4>
                                <div class="stat-value">$0.000</div>
                                <div class="stat-change positive">
                                    <i class="fas fa-arrow-up"></i>
                                    <span>12% from last year</span>
                                </div>
                            </div>
                            <div class="stat-icon primary">
                                <i class="fas fa-coins"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card warning">
                        <div class="stat-header">
                            <div class="stat-content">
                                <h4>Outstanding Balance</h4>
                                <div class="stat-value">$0.000</div>
                                <div class="stat-change negative">
                                    <i class="fas fa-arrow-down"></i>
                                    <span>5% from last month</span>
                                </div>
                            </div>
                            <div class="stat-icon warning">
                                <i class="fas fa-wallet"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card success">
                        <div class="stat-header">
                            <div class="stat-content">
                                <h4>Monthly Payment</h4>
                                <div class="stat-value">$0.000</div>
                                <div class="stat-change neutral">
                                    <i class="fas fa-calendar"></i>
                                    <span>Due July 20, 2025</span>
                                </div>
                            </div>
                            <div class="stat-icon success">
                                <i class="fas fa-credit-card"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card accent">
                        <div class="stat-header">
                            <div class="stat-content">
                                <h4>Interest Rate</h4>
                                <div class="stat-value">7.5%</div>
                                <div class="stat-change neutral">
                                    <i class="fas fa-lock"></i>
                                    <span>Fixed rate</span>
                                </div>
                            </div>
                            <div class="stat-icon accent">
                                <i class="fas fa-percentage"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Transactions Table -->
                <div class="transactions-section">
                    <div class="table-header">
                        <h2 class="table-title">Recent Transactions</h2>
                        <div class="table-actions">
                            <button class="action-btn">
                                <i class="fas fa-filter"></i>
                                Filter
                            </button>
                            <button class="action-btn">
                                <i class="fas fa-download"></i>
                                Export
                            </button>
                            <button class="action-btn primary">
                                <i class="fas fa-plus"></i>
                                Make Payment
                            </button>
                        </div>
                    </div>
                    
                    <div class="table-container">
                        <table class="transactions-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
<tbody>
    @forelse ($loanhistory as $loan)
        <tr>
            <td class="transaction-date">{{ \Carbon\Carbon::parse($loan->created_at)->format('M d, Y') }}</td>
            <td class="transaction-description">{{ $loan->loan_purpose ?? 'Loan Transaction' }}</td>
            <td class="transaction-type">
                {{ $loan->loan_type ?? 'Payment' }}
            </td>
            <td class="transaction-amount">${{ number_format($loan->loan_amount, 2) }}</td>
            <td>
                @if ($loan->status === 'completed')
                    <span class="status-badge status-success">Completed</span>
                @elseif ($loan->status === 'pending')
                    <span class="status-badge status-pending">Processing</span>
                @else
                    <span class="status-badge status-failed">Failed</span>
                @endif
            </td>
            <td>
                @if ($loan->status === 'completed')
                    <button class="action-button"><i class="fas fa-receipt"></i> Receipt</button>
                @elseif ($loan->status === 'pending')
                    <button class="action-button" disabled><i class="fas fa-clock"></i> Pending</button>
                @else
                    <button class="action-button" disabled><i class="fas fa-exclamation-circle"></i> N/A</button>
                @endif
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" style="text-align:center;">No transactions found.</td>
        </tr>
    @endforelse
</tbody>

                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

@include('user.footer')
</body>
</html>