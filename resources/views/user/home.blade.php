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
                                <tr>
                                    <td class="transaction-date">Jul 8, 2025</td>
                                    <td class="transaction-description">Monthly EMI Payment</td>
                                    <td class="transaction-type">Payment</td>
                                    <td class="transaction-amount">$1,250.00</td>
                                    <td><span class="status-badge status-success">Completed</span></td>
                                    <td><button class="action-button"><i class="fas fa-receipt"></i> Receipt</button></td>
                                </tr>
                                <tr>
                                    <td class="transaction-date">Jun 8, 2025</td>
                                    <td class="transaction-description">Monthly EMI Payment</td>
                                    <td class="transaction-type">Payment</td>
                                    <td class="transaction-amount">$1,250.00</td>
                                    <td><span class="status-badge status-success">Completed</span></td>
                                    <td><button class="action-button"><i class="fas fa-receipt"></i> Receipt</button></td>
                                </tr>
                                <tr>
                                    <td class="transaction-date">May 15, 2025</td>
                                    <td class="transaction-description">Extra Principal Payment</td>
                                    <td class="transaction-type">Payment</td>
                                    <td class="transaction-amount">$2,500.00</td>
                                    <td><span class="status-badge status-success">Completed</span></td>
                                    <td><button class="action-button"><i class="fas fa-receipt"></i> Receipt</button></td>
                                </tr>
                                <tr>
                                    <td class="transaction-date">May 8, 2025</td>
                                    <td class="transaction-description">Monthly EMI Payment</td>
                                    <td class="transaction-type">Payment</td>
                                    <td class="transaction-amount">$1,250.00</td>
                                    <td><span class="status-badge status-pending">Processing</span></td>
                                    <td><button class="action-button" disabled><i class="fas fa-clock"></i> Pending</button></td>
                                </tr>
                                <tr>
                                    <td class="transaction-date">Apr 8, 2025</td>
                                    <td class="transaction-description">Monthly EMI Payment</td>
                                    <td class="transaction-type">Payment</td>
                                    <td class="transaction-amount">$1,250.00</td>
                                    <td><span class="status-badge status-success">Completed</span></td>
                                    <td><button class="action-button"><i class="fas fa-receipt"></i> Receipt</button></td>
                                </tr>
                                <tr>
                                    <td class="transaction-date">Mar 15, 2025</td>
                                    <td class="transaction-description">Loan Disbursement</td>
                                    <td class="transaction-type">Credit</td>
                                    <td class="transaction-amount">$45,000.00</td>
                                    <td><span class="status-badge status-success">Completed</span></td>
                                    <td><button class="action-button"><i class="fas fa-file-invoice"></i> Details</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

        // Close sidebar when clicking nav items on mobile
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', () => {
                if (window.innerWidth <= 992) {
                    sidebar.classList.remove('active');
                    overlay.classList.remove('active');
                }
            });
        });

        // Chart functionality
        const ctx = document.getElementById('paymentChart').getContext('2d');
        
        const chartData = {
            '1y': {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                data: [1250, 1250, 1250, 1250, 3750, 1250, 1250, 1250, 1250, 1250, 1250, 1250]
            },
            '6m': {
                labels: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                data: [1250, 1250, 1250, 3750, 1250, 1250]
            },
            '3m': {
                labels: ['May', 'Jun', 'Jul'],
                data: [3750, 1250, 1250]
            },
            '1m': {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                data: [312.5, 312.5, 312.5, 312.5]
            }
        };

        let paymentChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: chartData['1y'].labels,
                datasets: [{
                    label: 'Payment Amount',
                    data: chartData['1y'].data,
                    borderColor: '#1a5632',
                    backgroundColor: 'rgba(26, 86, 50, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#1a5632',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 3,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    pointHoverBackgroundColor: '#d4af37',
                    pointHoverBorderColor: '#ffffff'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(15, 23, 42, 0.95)',
                        titleColor: '#ffffff',
                        bodyColor: '#ffffff',
                        borderColor: '#1a5632',
                        borderWidth: 2,
                        cornerRadius: 8,
                        displayColors: false,
                        titleFont: {
                            size: 13,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 12
                        },
                        padding: 10,
                        callbacks: {
                            label: function(context) {
                                return 'Amount: $' + context.parsed.y.toLocaleString();
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f1f5f9',
                            drawBorder: false,
                            lineWidth: 1
                        },
                        ticks: {
                            color: '#64748b',
                            font: {
                                size: 11,
                                weight: '500'
                            },
                            padding: 8,
                            callback: function(value) {
                                return '$' + value.toLocaleString();
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#64748b',
                            font: {
                                size: 11,
                                weight: '500'
                            },
                            padding: 8
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index'
                }
            }
        });

        // Filter button functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                const period = button.dataset.period;
                const newData = chartData[period];
                
                paymentChart.data.labels = newData.labels;
                paymentChart.data.datasets[0].data = newData.data;
                paymentChart.update('active');
            });
        });

        // Animate progress bars on load
        window.addEventListener('load', () => {
            setTimeout(() => {
                const progressBars = document.querySelectorAll('.progress-fill');
                progressBars.forEach(bar => {
                    const width = bar.style.width;
                    bar.style.width = '0%';
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 100);
                });
            }, 500);
        });

        // Add loading states for buttons
        document.querySelectorAll('.action-button, .action-btn, .quick-action-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                if (!this.disabled && !this.classList.contains('loading')) {
                    e.preventDefault();
                    const originalHTML = this.innerHTML;
                    this.classList.add('loading');
                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
                    this.disabled = true;
                    
                    setTimeout(() => {
                        this.innerHTML = originalHTML;
                        this.disabled = false;
                        this.classList.remove('loading');
                    }, 2000);
                }
            });
        });

        // Add resize handler for better responsiveness
        window.addEventListener('resize', () => {
            if (window.innerWidth > 992) {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
            }
            
            // Resize chart
            if (paymentChart) {
                paymentChart.resize();
            }
        });

        // Add keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
            }
        });

        // Optimize for touch devices
        if ('ontouchstart' in window) {
            document.body.classList.add('touch-device');
        }
    </script>
</body>
</html>