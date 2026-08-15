@extends('dashboard._mastertheme') 
@section('title', 'Dashboard') 
@section('body')

<style>
    :root {
        --bg-main: #f4f8f4;
        --forest-green: #0b3c26;
        --forest-hover: #144f33;
        --light-green-bg: #e8f3ea;
        --accent-green: #a2e0a4;
        --text-dark: #0f2d1e;
        --text-muted: #64748b;
        --border-color: #e2ebe2;
    }

    * {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: var(--bg-main);
        min-height: 100vh;
        overflow-x: hidden;
        padding: 1.5rem;
        color: var(--text-dark);
    }

    .main-content {
        max-width: 1400px;
        margin: 0 auto;
    }

    /* ============================================================
       HERO / TOP BANNER 
    ============================================================ */
    .hero-banner {
        background: var(--forest-green);
        border-radius: 1.5rem;
        padding: 2.2rem 2.2rem 5rem 2.2rem;
        color: #ffffff;
        position: relative;
        margin-bottom: -3.5rem; /* Allows KPI cards to overlap */
    }

    .hero-banner .live-badge {
        font-size: 0.65rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--accent-green);
        display: flex;
        align-items: center;
        gap: 0.4rem;
        margin-bottom: 0.6rem;
    }

    .hero-banner .live-badge .pulse-dot {
        width: 6px;
        height: 6px;
        background-color: var(--accent-green);
        border-radius: 50%;
        box-shadow: 0 0 0 0 rgba(162, 224, 164, 0.7);
        animation: pulse 1.6s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(162, 224, 164, 0.7); }
        70% { transform: scale(1); box-shadow: 0 0 0 6px rgba(162, 224, 164, 0); }
        100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(162, 224, 164, 0); }
    }

    .hero-banner h2 {
        font-weight: 800;
        font-size: 1.85rem;
        letter-spacing: -0.02em;
        margin-bottom: 0.35rem;
    }

    .hero-banner p {
        color: #c0dac8;
        font-size: 0.85rem;
        margin: 0;
        max-width: 600px;
    }

    .hero-actions .btn {
        font-size: 0.8rem;
        font-weight: 700;
        padding: 0.45rem 1.2rem;
        border-radius: 999px;
        transition: all 0.2s ease;
    }

    .btn-hero-outline {
        background: rgba(255, 255, 255, 0.1);
        color: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .btn-hero-outline:hover {
        background: rgba(255, 255, 255, 0.2);
        color: #ffffff;
    }

    .btn-hero-solid {
        background: #b2efa7;
        color: #0b3c26;
        border: none;
    }

    .btn-hero-solid:hover {
        background: #9de292;
        color: #0b3c26;
    }

    /* ============================================================
       KPI CARDS (Overlapping Header)
    ============================================================ */
    .kpi-container {
        position: relative;
        z-index: 2;
    }

    .kpi-card {
        background: #ffffff;
        border-radius: 1.25rem;
        padding: 1.1rem 1.2rem;
        border: 1px solid var(--border-color);
        box-shadow: 0 4px 20px rgba(11, 60, 38, 0.04);
        transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.25s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .kpi-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(11, 60, 38, 0.08);
        border-color: #c3d8c5;
    }

    .kpi-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 0.75rem;
    }

    .kpi-icon {
        width: 2.8rem;
        height: 2.8rem;
        border-radius: 50%;
        background: var(--light-green-bg);
        color: var(--forest-green);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
    }

    .kpi-card.warning-style .kpi-icon {
        background: #fef3c7;
        color: #d97706;
    }

    .kpi-details .kpi-number {
        font-size: 1.6rem;
        font-weight: 800;
        color: var(--text-dark);
        line-height: 1;
        letter-spacing: -0.02em;
        margin-bottom: 0.3rem;
    }

    .kpi-details .kpi-label {
        font-size: 0.68rem;
        font-weight: 700;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }

    .kpi-change {
        font-size: 0.68rem;
        font-weight: 700;
        padding: 0.2rem 0.55rem;
        border-radius: 999px;
        display: inline-flex;
        align-items: center;
        gap: 0.2rem;
    }

    .kpi-change.up {
        background: #e6f7ec;
        color: #16a34a;
    }

    .kpi-change.down {
        background: #fef2f2;
        color: #dc2626;
    }

    /* Mini chart visual bottom bar */
    .kpi-mini-bars {
        display: flex;
        align-items: flex-end;
        gap: 3px;
        height: 18px;
        margin-top: 0.8rem;
    }

    .kpi-mini-bars span {
        flex: 1;
        background: #d1e7d5;
        border-radius: 2px;
        transition: background 0.2s;
    }

    .kpi-mini-bars span.active {
        background: #4ade80;
    }

    .kpi-card.warning-style .kpi-mini-bars span {
        background: #fef08a;
    }

    .kpi-card.warning-style .kpi-mini-bars span.active {
        background: #f59e0b;
    }

    /* ============================================================
       INFO BOXES
    ============================================================ */
    .info-box {
        background: #ffffff;
        border-radius: 1rem;
        padding: 1rem 1.25rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid var(--border-color);
        box-shadow: 0 2px 8px rgba(11, 60, 38, 0.03);
        transition: transform 0.2s, border-color 0.2s;
    }

    .info-box:hover {
        transform: translateY(-2px);
        border-color: #b2efa7;
    }

    .info-left {
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .info-icon {
        width: 2.3rem;
        height: 2.3rem;
        border-radius: 0.6rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        background: var(--light-green-bg);
        color: var(--forest-green);
    }

    .info-icon.gold { background: #fef3c7; color: #d97706; }
    .info-icon.red { background: #fee2e2; color: #dc2626; }

    .info-title {
        font-weight: 700;
        font-size: 0.85rem;
        color: var(--text-dark);
        margin-bottom: 0.1rem;
    }

    .info-desc {
        font-size: 0.72rem;
        color: var(--text-muted);
    }

    .info-number {
        font-weight: 800;
        font-size: 1.35rem;
        color: var(--text-dark);
    }

    /* ============================================================
       PANELS & CHARTS
    ============================================================ */
    .panel {
        background: #ffffff;
        border-radius: 1.25rem;
        border: 1px solid var(--border-color);
        padding: 1.25rem;
        box-shadow: 0 2px 10px rgba(11, 60, 38, 0.03);
        transition: box-shadow 0.3s ease;
        height: 100%;
    }

    .panel:hover {
        box-shadow: 0 8px 24px rgba(11, 60, 38, 0.06);
    }

    .panel-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1rem;
    }

    .panel-header h5 {
        font-weight: 700;
        font-size: 0.95rem;
        color: var(--text-dark);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .panel-header h5 i {
        color: var(--forest-green);
    }

    .panel-action {
        color: var(--forest-green);
        font-size: 0.75rem;
        text-decoration: none;
        font-weight: 700;
        transition: opacity 0.2s;
    }

    .panel-action:hover {
        opacity: 0.75;
    }

    .panel-badge {
        font-size: 0.65rem;
        font-weight: 700;
        padding: 0.2rem 0.6rem;
        border-radius: 999px;
        background: var(--light-green-bg);
        color: var(--forest-green);
    }

    .chart-wrapper { position: relative; height: 230px; }
    .chart-wrapper-sm { position: relative; height: 190px; }

    /* ============================================================
       TABLES & LISTS
    ============================================================ */
    .mini-table {
        margin: 0;
    }

    .mini-table thead th {
        color: var(--text-muted);
        font-weight: 700;
        font-size: 0.65rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border-bottom: 1px solid var(--border-color);
        padding: 0.5rem;
        background: transparent;
    }

    .mini-table tbody td {
        padding: 0.6rem 0.5rem;
        vertical-align: middle;
        border-bottom: 1px solid #f1f5f1;
        color: var(--text-dark);
        font-size: 0.8rem;
    }

    .mini-table tbody tr:last-child td {
        border-bottom: none;
    }

    .status-badge {
        padding: 0.2rem 0.55rem;
        border-radius: 999px;
        font-size: 0.65rem;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
    }

    .status-badge.green { background: #e6f7ec; color: #16a34a; }
    .status-badge.gold { background: #fef3c7; color: #d97706; }
    .status-badge.gray { background: #f1f5f9; color: #64748b; }

    /* Activity Items */
    .activity-item {
        display: flex;
        align-items: flex-start;
        gap: 0.7rem;
        padding: 0.5rem 0;
        border-bottom: 1px solid #f1f5f1;
    }

    .activity-item:last-child { border-bottom: none; }

    .activity-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        margin-top: 0.35rem;
        flex-shrink: 0;
    }

    .activity-dot.green { background: #16a34a; }
    .activity-dot.gold { background: #d97706; }
    .activity-dot.gray { background: #64748b; }

    .activity-content { flex: 1; }
    .activity-content .text { font-size: 0.8rem; color: var(--text-dark); }
    .activity-content .meta { font-size: 0.68rem; color: var(--text-muted); }
    .activity-time { font-size: 0.65rem; color: var(--text-muted); font-weight: 600; }

    /* Stock Alert Items */
    .stock-alert-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem 0.75rem;
        border-radius: 0.6rem;
        background: #fef2f2;
        border-left: 3px solid #ef4444;
        margin-bottom: 0.4rem;
    }

    .stock-alert-item.warning {
        background: #fffbeb;
        border-left-color: #f59e0b;
    }

    .stock-alert-item .alert-icon {
        width: 1.5rem;
        height: 1.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.65rem;
        background: rgba(239, 68, 68, 0.15);
        color: #ef4444;
    }

    .stock-alert-item.warning .alert-icon {
        background: rgba(245, 158, 11, 0.15);
        color: #f59e0b;
    }

    .stock-alert-item .alert-info { flex: 1; }
    .stock-alert-item .alert-info .name { font-weight: 700; font-size: 0.8rem; color: var(--text-dark); }
    .stock-alert-item .alert-info .detail { font-size: 0.68rem; color: var(--text-muted); }
    .stock-alert-item .alert-qty { font-weight: 800; font-size: 0.78rem; color: #ef4444; }
    .stock-alert-item.warning .alert-qty { color: #f59e0b; }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .hero-banner {
            padding: 1.5rem 1.5rem 4rem 1.5rem;
            margin-bottom: -2.5rem;
        }
        .hero-banner h2 { font-size: 1.4rem; }
    }
</style>

<div class="main-content">
    
    <!-- ===== HERO BANNER ===== -->
    <div class="hero-banner d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
        <div>
            <div class="live-badge">
                <span class="pulse-dot"></span> Live • Updated Every 10s
            </div>
            <h2>Good to see you, Admin</h2>
            <p>Here's how immunization activity is trending across every partner hospital today.</p>
        </div>
        <div class="hero-actions d-flex gap-2">
            <button class="btn btn-hero-outline">
                <i class="far fa-calendar-alt me-1"></i> Today
            </button>
            <button class="btn btn-hero-solid" onclick="location.reload()">
                <i class="fas fa-sync-alt me-1"></i> Refresh
            </button>
        </div>
    </div>

    <!-- ===== SECTION 1: 6 OVERLAPPING KPI CARDS ===== -->
    <div class="row g-3 mb-4 kpi-container">
        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card">
                <div class="kpi-top">
                    <div class="kpi-icon"><i class="fas fa-child"></i></div>
                    <span class="kpi-change up"><i class="fas fa-caret-up"></i> 8.2%</span>
                </div>
                <div class="kpi-details">
                    <div class="kpi-number">1,250</div>
                    <div class="kpi-label">Total Children</div>
                </div>
                <div class="kpi-mini-bars">
                    <span style="height: 30%;"></span>
                    <span style="height: 50%;"></span>
                    <span style="height: 40%;"></span>
                    <span style="height: 70%;"></span>
                    <span style="height: 60%;"></span>
                    <span style="height: 100%;" class="active"></span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card">
                <div class="kpi-top">
                    <div class="kpi-icon"><i class="fas fa-hospital"></i></div>
                    <span class="kpi-change up"><i class="fas fa-caret-up"></i> 4.3%</span>
                </div>
                <div class="kpi-details">
                    <div class="kpi-number">24</div>
                    <div class="kpi-label">Total Hospitals</div>
                </div>
                <div class="kpi-mini-bars">
                    <span style="height: 40%;"></span>
                    <span style="height: 50%;"></span>
                    <span style="height: 65%;"></span>
                    <span style="height: 60%;"></span>
                    <span style="height: 85%;"></span>
                    <span style="height: 90%;" class="active"></span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card">
                <div class="kpi-top">
                    <div class="kpi-icon"><i class="fas fa-syringe"></i></div>
                    <span class="kpi-change up"><i class="fas fa-caret-up"></i> 12.5%</span>
                </div>
                <div class="kpi-details">
                    <div class="kpi-number">18</div>
                    <div class="kpi-label">Total Vaccines</div>
                </div>
                <div class="kpi-mini-bars">
                    <span style="height: 30%;"></span>
                    <span style="height: 40%;"></span>
                    <span style="height: 60%;"></span>
                    <span style="height: 50%;"></span>
                    <span style="height: 80%;"></span>
                    <span style="height: 100%;" class="active"></span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card">
                <div class="kpi-top">
                    <div class="kpi-icon"><i class="fas fa-calendar-check"></i></div>
                    <span class="kpi-change up"><i class="fas fa-caret-up"></i> 16.8%</span>
                </div>
                <div class="kpi-details">
                    <div class="kpi-number">42</div>
                    <div class="kpi-label">Today's Bookings</div>
                </div>
                <div class="kpi-mini-bars">
                    <span style="height: 20%;"></span>
                    <span style="height: 45%;"></span>
                    <span style="height: 60%;"></span>
                    <span style="height: 55%;"></span>
                    <span style="height: 75%;"></span>
                    <span style="height: 95%;" class="active"></span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card warning-style">
                <div class="kpi-top">
                    <div class="kpi-icon"><i class="fas fa-clock"></i></div>
                    <span class="kpi-change down"><i class="fas fa-caret-down"></i> 2.1%</span>
                </div>
                <div class="kpi-details">
                    <div class="kpi-number">16</div>
                    <div class="kpi-label">Pending Requests</div>
                </div>
                <div class="kpi-mini-bars">
                    <span style="height: 90%;" class="active"></span>
                    <span style="height: 70%;"></span>
                    <span style="height: 75%;"></span>
                    <span style="height: 60%;"></span>
                    <span style="height: 50%;"></span>
                    <span style="height: 40%;"></span>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card">
                <div class="kpi-top">
                    <div class="kpi-icon"><i class="fas fa-check-double"></i></div>
                    <span class="kpi-change up"><i class="fas fa-caret-up"></i> 22.3%</span>
                </div>
                <div class="kpi-details">
                    <div class="kpi-number">1,284</div>
                    <div class="kpi-label">Completed</div>
                </div>
                <div class="kpi-mini-bars">
                    <span style="height: 30%;"></span>
                    <span style="height: 50%;"></span>
                    <span style="height: 60%;"></span>
                    <span style="height: 75%;"></span>
                    <span style="height: 90%;"></span>
                    <span style="height: 100%;" class="active"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== SECTION 2: 3 INFO BOXES ===== -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="info-box">
                <div class="info-left">
                    <div class="info-icon"><i class="fas fa-calendar-plus"></i></div>
                    <div>
                        <div class="info-title">Upcoming Vaccinations</div>
                        <div class="info-desc">Next 7 days</div>
                    </div>
                </div>
                <div class="info-number">124</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-box">
                <div class="info-left">
                    <div class="info-icon gold"><i class="fas fa-clock"></i></div>
                    <div>
                        <div class="info-title">Expiring Vaccines</div>
                        <div class="info-desc">Within 30 days</div>
                    </div>
                </div>
                <div class="info-number">8</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-box">
                <div class="info-left">
                    <div class="info-icon red"><i class="fas fa-times-circle"></i></div>
                    <div>
                        <div class="info-title">Missed/Cancelled</div>
                        <div class="info-desc">Last 30 days</div>
                    </div>
                </div>
                <div class="info-number">32</div>
            </div>
        </div>
    </div>

    <!-- ===== SECTION 3: 2 CHARTS ===== -->
    <div class="row g-3 mb-4">
        <div class="col-lg-8">
            <div class="panel">
                <div class="panel-header">
                    <h5><i class="fas fa-chart-bar"></i>Monthly Vaccination Trend</h5>
                    <div>
                        <span class="panel-badge">+12.5%</span>
                        <a href="#" class="panel-action ms-2">Full <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <canvas id="monthlyChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-header">
                    <h5><i class="fas fa-chart-pie"></i>Booking Status</h5>
                    <span class="panel-badge">Distribution</span>
                </div>
                <div class="chart-wrapper-sm">
                    <canvas id="statusChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== SECTION 4: TABLES & ALERTS ===== -->
    <div class="row g-3 mb-4">
        <!-- Pending Parent Requests -->
        <div class="col-lg-7">
            <div class="panel">
                <div class="panel-header">
                    <h5>
                        <i class="fas fa-clipboard-list"></i>Pending Parent Requests 
                        <span class="badge ms-1" style="background:#ef4444; color:#fff; border-radius:999px; font-size:0.6rem;">16</span>
                    </h5>
                    <a href="#" class="panel-action">View All <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="mini-table table">
                        <thead>
                            <tr>
                                <th>Parent</th>
                                <th>Child</th>
                                <th>Vaccine</th>
                                <th>Hospital</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Sana Khan</strong></td>
                                <td>Ayesha</td>
                                <td>Polio</td>
                                <td>Lady Reading</td>
                                <td class="text-end">
                                    <button class="btn btn-sm p-0 me-2" style="color:#16a34a;" title="Approve"><i class="fas fa-check-circle"></i></button>
                                    <button class="btn btn-sm p-0 me-2" style="color:#ef4444;" title="Reject"><i class="fas fa-times-circle"></i></button>
                                    <button class="btn btn-sm p-0" style="color:#64748b;" title="View"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Ahmed Ali</strong></td>
                                <td>Muhammad</td>
                                <td>Hepatitis B</td>
                                <td>Aga Khan</td>
                                <td class="text-end">
                                    <button class="btn btn-sm p-0 me-2" style="color:#16a34a;" title="Approve"><i class="fas fa-check-circle"></i></button>
                                    <button class="btn btn-sm p-0 me-2" style="color:#ef4444;" title="Reject"><i class="fas fa-times-circle"></i></button>
                                    <button class="btn btn-sm p-0" style="color:#64748b;" title="View"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Noor Ahmed</strong></td>
                                <td>Fatima</td>
                                <td>MMR</td>
                                <td>Shifa</td>
                                <td class="text-end">
                                    <button class="btn btn-sm p-0 me-2" style="color:#16a34a;" title="Approve"><i class="fas fa-check-circle"></i></button>
                                    <button class="btn btn-sm p-0 me-2" style="color:#ef4444;" title="Reject"><i class="fas fa-times-circle"></i></button>
                                    <button class="btn btn-sm p-0" style="color:#64748b;" title="View"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Raza Malik</strong></td>
                                <td>Hassan</td>
                                <td>DTaP</td>
                                <td>Mayo</td>
                                <td class="text-end">
                                    <button class="btn btn-sm p-0 me-2" style="color:#16a34a;" title="Approve"><i class="fas fa-check-circle"></i></button>
                                    <button class="btn btn-sm p-0 me-2" style="color:#ef4444;" title="Reject"><i class="fas fa-times-circle"></i></button>
                                    <button class="btn btn-sm p-0" style="color:#64748b;" title="View"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-sm rounded-pill px-3" style="background:#e8f3ea; color:#0b3c26; font-weight:700; font-size:0.7rem; border:none;">
                        <i class="fas fa-check-double me-1"></i> Approve All
                    </button>
                    <button class="btn btn-sm rounded-pill px-3" style="background:#fee2e2; color:#dc2626; font-weight:700; font-size:0.7rem; border:none;">
                        <i class="fas fa-times me-1"></i> Reject All
                    </button>
                </div>
            </div>
        </div>

        <!-- Today's Vaccinations & Low Stock Alerts -->
        <div class="col-lg-5">
            <div class="row g-3">
                <div class="col-12">
                    <div class="panel">
                        <div class="panel-header">
                            <h5><i class="fas fa-calendar-day"></i>Today's Vaccinations</h5>
                            <span class="badge rounded-pill" style="background:#0b3c26; color:#fff; font-size:0.55rem;">12</span>
                        </div>
                        <div class="table-responsive">
                            <table class="mini-table table">
                                <thead>
                                    <tr>
                                        <th>Child</th>
                                        <th>Vaccine</th>
                                        <th>Hospital</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Ayesha</strong></td>
                                        <td>Polio</td>
                                        <td>Lady Reading</td>
                                        <td>09:30 AM</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Muhammad</strong></td>
                                        <td>Hepatitis B</td>
                                        <td>Aga Khan</td>
                                        <td>10:30 AM</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Fatima</strong></td>
                                        <td>MMR</td>
                                        <td>Shifa</td>
                                        <td>02:00 PM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="panel">
                        <div class="panel-header">
                            <h5><i class="fas fa-exclamation-triangle" style="color:#ef4444;"></i>Low Stock Alerts</h5>
                            <span class="badge rounded-pill" style="background:#ef4444; color:#fff; font-size:0.55rem;">8</span>
                        </div>
                        <div>
                            <div class="stock-alert-item warning">
                                <div class="alert-icon"><i class="fas fa-exclamation"></i></div>
                                <div class="alert-info">
                                    <div class="name">BCG Vaccine</div>
                                    <div class="detail">Lady Reading · Batch #BCG-2026</div>
                                </div>
                                <div class="alert-qty">8 units</div>
                            </div>
                            <div class="stock-alert-item warning">
                                <div class="alert-icon"><i class="fas fa-exclamation"></i></div>
                                <div class="alert-info">
                                    <div class="name">Polio Vaccine</div>
                                    <div class="detail">Aga Khan · Batch #POL-2026</div>
                                </div>
                                <div class="alert-qty">5 units</div>
                            </div>
                            <div class="stock-alert-item">
                                <div class="alert-icon"><i class="fas fa-exclamation"></i></div>
                                <div class="alert-info">
                                    <div class="name">MMR Vaccine</div>
                                    <div class="detail">Shifa · Batch #MMR-2026</div>
                                </div>
                                <div class="alert-qty">3 units</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== SECTION 5: RECENT BOOKINGS & ACTIVITY ===== -->
    <div class="row g-3">
        <div class="col-lg-7">
            <div class="panel">
                <div class="panel-header">
                    <h5><i class="fas fa-book"></i>Recent Bookings</h5>
                    <a href="#" class="panel-action">View All <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="mini-table table">
                        <thead>
                            <tr>
                                <th>Booking #</th>
                                <th>Child</th>
                                <th>Vaccine</th>
                                <th>Hospital</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span style="font-weight:700; color:var(--forest-green); font-size:0.75rem;">#BK-2026-007</span></td>
                                <td>Ayesha Khan</td>
                                <td>Polio</td>
                                <td>Lady Reading</td>
                                <td>10 Aug 2026</td>
                                <td><span class="status-badge gold"><i class="fas fa-clock"></i> Pending</span></td>
                            </tr>
                            <tr>
                                <td><span style="font-weight:700; color:var(--forest-green); font-size:0.75rem;">#BK-2026-008</span></td>
                                <td>Muhammad Ali</td>
                                <td>Hepatitis B</td>
                                <td>Aga Khan</td>
                                <td>11 Aug 2026</td>
                                <td><span class="status-badge green"><i class="fas fa-check-circle"></i> Approved</span></td>
                            </tr>
                            <tr>
                                <td><span style="font-weight:700; color:var(--forest-green); font-size:0.75rem;">#BK-2026-009</span></td>
                                <td>Fatima Noor</td>
                                <td>MMR</td>
                                <td>Shifa</td>
                                <td>15 Aug 2026</td>
                                <td><span class="status-badge green"><i class="fas fa-check-double"></i> Completed</span></td>
                            </tr>
                            <tr>
                                <td><span style="font-weight:700; color:var(--forest-green); font-size:0.75rem;">#BK-2026-010</span></td>
                                <td>Hassan Raza</td>
                                <td>DTaP</td>
                                <td>Mayo</td>
                                <td>18 Aug 2026</td>
                                <td><span class="status-badge gray"><i class="fas fa-times"></i> Cancelled</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="panel">
                <div class="panel-header">
                    <h5><i class="fas fa-history"></i>Recent Activity</h5>
                    <a href="#" class="panel-action">View All <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
                <div class="activity-item">
                    <span class="activity-dot green"></span>
                    <div class="activity-content">
                        <div class="text"><strong>Booking approved</strong> for Ayesha Khan · Polio</div>
                        <div class="meta"><i class="far fa-clock me-1"></i> 5 min ago</div>
                    </div>
                    <span class="activity-time">5m</span>
                </div>
                <div class="activity-item">
                    <span class="activity-dot gray"></span>
                    <div class="activity-content">
                        <div class="text"><strong>New child registered</strong> · Zara Ahmed (2 months)</div>
                        <div class="meta"><i class="far fa-clock me-1"></i> 15 min ago</div>
                    </div>
                    <span class="activity-time">15m</span>
                </div>
                <div class="activity-item">
                    <span class="activity-dot green"></span>
                    <div class="activity-content">
                        <div class="text"><strong>Vaccination completed</strong> · Fatima Noor · MMR</div>
                        <div class="meta"><i class="far fa-clock me-1"></i> 1 hour ago</div>
                    </div>
                    <span class="activity-time">1h</span>
                </div>
                <div class="activity-item">
                    <span class="activity-dot gold"></span>
                    <div class="activity-content">
                        <div class="text"><strong>Vaccine stock updated</strong> · Polio (Lady Reading)</div>
                        <div class="meta"><i class="far fa-clock me-1"></i> 2 hours ago</div>
                    </div>
                    <span class="activity-time">2h</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== FOOTER ===== -->
    <div class="text-center text-muted small mt-5 pt-3 border-top" style="border-color: var(--border-color) !important;">
        <i class="far fa-copyright me-1"></i> 2026 VaccineTrack — Vaccination Management System 
        <span class="mx-2">•</span> <span>v3.0.0</span> 
        <span class="mx-2">•</span> <span>Updated: <span id="updateTime">Just now</span></span>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Chart Defaults for consistent styling
    Chart.defaults.font.family = "'Inter', sans-serif";

    // Monthly Chart
    var monthlyCtx = document.getElementById('monthlyChart').getContext('2d');
    new Chart(monthlyCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Vaccinations',
                data: [65, 78, 82, 95, 88, 102, 110, 125, 118, 135, 142, 156],
                backgroundColor: 'rgba(11, 60, 38, 0.85)',
                borderColor: '#0b3c26',
                borderRadius: 6,
                barPercentage: 0.55
            }, {
                label: 'Trend',
                data: [60, 72, 78, 88, 84, 96, 104, 118, 112, 128, 135, 148],
                type: 'line',
                borderColor: '#f59e0b',
                borderWidth: 2,
                pointBackgroundColor: '#f59e0b',
                tension: 0.35,
                fill: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { color: '#f1f5f1' },
                    ticks: { font: { size: 10 }, color: '#64748b' }
                },
                x: {
                    grid: { display: false },
                    ticks: { font: { size: 10 }, color: '#64748b' }
                }
            }
        }
    });

    // Status Chart
    var statusCtx = document.getElementById('statusChart').getContext('2d');
    new Chart(statusCtx, {
        type: 'doughnut',
        data: {
            labels: ['Completed', 'Approved', 'Pending', 'Missed', 'Cancelled'],
            datasets: [{
                data: [1080, 156, 48, 32, 28],
                backgroundColor: ['#0b3c26', '#4ade80', '#f59e0b', '#ef4444', '#94a3b8'],
                borderWidth: 3,
                borderColor: '#ffffff'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        usePointStyle: true,
                        pointStyleWidth: 8,
                        font: { size: 10, weight: '600' },
                        color: '#64748b'
                    }
                }
            }
        }
    });

    function updateTime() {
        var now = new Date();
        document.getElementById('updateTime').textContent = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
    }
    updateTime();
    setInterval(updateTime, 10000);
});
</script>

@endsection