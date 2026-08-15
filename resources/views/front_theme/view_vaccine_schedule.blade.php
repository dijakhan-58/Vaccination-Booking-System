@extends('front_theme._mastertheme')

@section('fornt_body')


    <!-- ===== PAGE CONTENT ===== -->
    <div class="vaccine-page">
        <div class="vaccine-container">

            <!-- Header -->
            <div class="vaccine-header">
                <h1>
                    <i class="fas fa-syringe"></i>
                    Vaccination Manager
                </h1>
                <span class="vaccine-badge">
                    <i class="fas fa-shield-alt"></i>
                </span>
            </div>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="number">10,842</div>
                    <div class="label"><i class="fas fa-child"></i> Children vaccinated</div>
                </div>
                <div class="stat-card">
                    <div class="number">98.6%</div>
                    <div class="label"><i class="fas fa-check-circle"></i> On‑time rate</div>
                </div>
                <div class="stat-card">
                    <div class="number">147</div>
                    <div class="label"><i class="fas fa-hospital"></i> Active providers</div>
                </div>
                <div class="stat-card">
                    <div class="number">3.2K</div>
                    <div class="label"><i class="fas fa-bell"></i> Reminders this month</div>
                </div>
            </div>

            <!-- Two Columns: Features + Schedule -->
            <div class="two-col">
                <!-- Left: Key Features -->
                <div class="col">
                    <h2><i class="fas fa-list-ul"></i> Key Features</h2>
                    <ul class="feature-list">
                        <li>
                            <i class="fas fa-history"></i>
                            <div><strong>Complete history</strong> – every dose, date, and provider in one place.</div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div><strong>Smart reminders</strong> – SMS, email, and app notifications before due dates.
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-chart-line"></i>
                            <div><strong>Coverage analytics</strong> – track vaccination gaps by age, region, or location.
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-mobile-alt"></i>
                            <div><strong>Parent portal</strong> – parents can view records and schedule appointments.</div>
                        </li>
                        <li>
                            <i class="fas fa-file-medical-alt"></i>
                            <div><strong>Digital certificates</strong> – generate verifiable vaccination proof instantly.
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Right: Immunization Schedule -->
                <div class="col">
                    <h2><i class="fas fa-calendar-check"></i> Immunization Schedule</h2>
                    <div class="table-responsive">
                        <table class="schedule-table">
                            <thead>
                                <tr>
                                    <th>Age</th>
                                    <th>Vaccine</th>
                                    <th>Dose</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Birth</td>
                                    <td>BCG, Hep‑B1</td>
                                    <td><span class="vaccine-tag">1</span></td>
                                </tr>
                                <tr>
                                    <td>6 weeks</td>
                                    <td>DPT‑1, Hib‑1, IPV‑1</td>
                                    <td><span class="vaccine-tag">1</span></td>
                                </tr>
                                <tr>
                                    <td>10 weeks</td>
                                    <td>DPT‑2, Hib‑2, IPV‑2</td>
                                    <td><span class="vaccine-tag">2</span></td>
                                </tr>
                                <tr>
                                    <td>14 weeks</td>
                                    <td>DPT‑3, Hib‑3, IPV‑3</td>
                                    <td><span class="vaccine-tag">3</span></td>
                                </tr>
                                <tr>
                                    <td>9 months</td>
                                    <td>Measles‑1, MMR‑1</td>
                                    <td><span class="vaccine-tag">1</span></td>
                                </tr>
                                <tr>
                                    <td>16–24 months</td>
                                    <td>MMR‑2, DPT‑Booster</td>
                                    <td><span class="vaccine-tag">Booster</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- How Vaccination Works Box -->
            <div class="vaccine-info-box">
                <div class="info-left">
                    <i class="fas fa-shield-virus"></i>
                    <div>
                        <div class="info-title">How Vaccination Works</div>
                        <div class="info-desc">Vaccines train your immune system to fight diseases — safe, effective, and
                            life‑saving.</div>
                    </div>
                </div>
                <a href="#" class="btn-learn">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Back Button + Contact Now -->
            <div class="action-row">
                {{-- <a class='cs_btn cs_style_1 cs_color_2' href='about.html'>
                    <span>Back To ABout Page</span>
                    <i class="fa-solid fa-angles-right"></i>
                </a> --}}
                <a href="{{ url('/about') }}" class="btn-back "><i class="fas fa-arrow-left"></i> Back to About Page</a>
                <a href="#" class="btn-view-contact">Contact Now <i class="fas fa-arrow-right"></i></a>
            </div>

            <hr />


        </div>
    </div>
@endsection