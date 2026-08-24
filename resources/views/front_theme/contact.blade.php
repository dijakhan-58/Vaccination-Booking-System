@extends('front_theme._mastertheme')

@section('fornt_body')
    <section class="cs_page_heading cs_bg_filed cs_center" data-src="{{ asset('assets/frontend/img/doctor2.jfif') }}"
        style="padding: 120px 0; position: relative; background-size: cover; background-position: center;">

        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(5, 31, 32, 0.3) 0%, rgba(5, 31, 32, 0.6) 100%);">
        </div>

        <div class="container" style="position: relative; z-index: 2;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="cs_section_subtitle"
                        style="color: #ffffff; font-size: 16px; font-weight: 600; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 10px; background: rgba(142, 182, 155, 0.25); padding: 8px 30px; border-radius: 50px; display: inline-block; backdrop-filter: blur(2px);">
                        Get In Touch
                    </p>

                    <h2 class="cs_section_title"
                        style="color: #ffffff; font-size: 52px; font-weight: 700; line-height: 1.2; margin-bottom: 20px; text-shadow: 0 4px 30px rgba(0,0,0,0.4);">
                        Contact <br> Us
                    </h2>

                    <div style="display: flex; align-items: center; justify-content: center; gap: 12px; font-size: 16px;">
                        <a href="{{ url('/index') }}"
                            style="color: rgba(255,255,255,0.9); text-decoration: none; transition: 0.3s; font-weight: 400;">
                            <i class="fa-solid fa-house" style="font-size: 14px;"></i> Home
                        </a>
                        <span style="color: rgba(255,255,255,0.5); font-weight: 300;">/</span>
                        <span style="color: #8eb69b; font-weight: 600; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Contact
                            Us</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">

    
            <div class="text-center mb-5">
                <p class="cs_section_subtitle cs_accent_color">
                    <span class="cs_shape_left"></span> CONTACT US <span class="cs_shape_right"></span>
                </p>
                <h2 class="cs_section_title">We're Here To Help You</h2>
                <p class="text-muted mx-auto mt-2" style="max-width: 650px;">
                    Whether you have questions about vaccines, need help with an appointment,
                    or simply want to speak with our team, we're always happy to help.
                </p>
            </div>

            <div class="row g-4 mb-5">

                <div class="col-lg-3 col-md-6">
                    
                        <div class="card border-0 shadow-sm h-100 text-center p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-3"
                                style="width:65px;height:65px;">
                                <i class="fa-solid fa-phone fs-4"></i>
                            </div>
                            <h5 class="mb-1">Call Us</h5>
                            <p class="text-muted mb-0">+92 300 1234567<br>Mon – Fri, 8am – 6pm</p>
                        </div>
                   
                </div>

                <div class="col-lg-3 col-md-6">
                 
                    
                        <div class="card border-0 shadow-sm h-100 text-center p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-3"
                                style="width:65px;height:65px;">
                                <i class="fa-solid fa-envelope fs-4"></i>
                            </div>
                            <h5 class="mb-1">Email Us</h5>
                            <p class="text-muted mb-0">care@vaccicare.com<br>We reply within 24 hours</p>
                        </div>
                  
                </div>

                <div class="col-lg-3 col-md-6">
                   
                        <div class="card border-0 shadow-sm h-100 text-center p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-3"
                                style="width:65px;height:65px;">
                                <i class="fa-solid fa-location-dot fs-4"></i>
                            </div>
                            <h5 class="mb-1">Visit Us</h5>
                            <p class="text-muted mb-0">13/A, Miranda Halim City<br>Get directions on the map</p>
                        </div>
            
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100 text-center p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-3"
                            style="width:65px;height:65px;">
                            <i class="fa-regular fa-clock fs-4"></i>
                        </div>
                        <h5 class="mb-1">Working Hours</h5>
                        <p class="text-muted mb-0">Mon – Sat: 9am – 7pm</p>
                    </div>
                </div>

            </div>

            <div class="row g-4 align-items-stretch mb-5">

                <div class="col-lg-5">
                    <div class="bg-light rounded-4 p-4 p-lg-5 h-100">
                        <p class="cs_section_subtitle cs_accent_color">
                            <span class="cs_shape_left"></span> HOW CAN WE HELP?
                        </p>
                        <h3 class="mb-3">Your Questions Matter</h3>
                        <p class="text-muted">
                            Our team is available to help you with vaccination information,
                            appointment support, general questions, and other healthcare concerns.
                        </p>

                        <div class="d-flex align-items-start mt-4">
                            <div class="d-flex align-items-center justify-content-center bg-success text-white rounded-3 flex-shrink-0 me-3"
                                style="width:48px;height:48px;">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Appointment Support</h6>
                                <p class="text-muted mb-0">Need help booking or changing an appointment? Our team can guide
                                    you.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mt-4">
                            <div class="d-flex align-items-center justify-content-center bg-success text-white rounded-3 flex-shrink-0 me-3"
                                style="width:48px;height:48px;">
                                <i class="fa-solid fa-syringe"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Vaccine Information</h6>
                                <p class="text-muted mb-0">Have questions about vaccines or vaccination schedules? We're
                                    here to help.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mt-4">
                            <div class="d-flex align-items-center justify-content-center bg-success text-white rounded-3 flex-shrink-0 me-3"
                                style="width:48px;height:48px;">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">General Support</h6>
                                <p class="text-muted mb-0">For general questions, contact our support team during working
                                    hours.</p>
                            </div>
                        </div>

                        <div class="bg-white border-start border-success border-4 rounded-3 p-3 mt-4">
                            <strong><i class="fa-solid fa-circle-info me-1"></i> Need urgent assistance?</strong>
                            <p class="text-muted mb-0 mt-1">For medical emergencies, please contact your local emergency
                                services immediately.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card border-0 shadow p-4 p-lg-5 h-100">
                        <p class="cs_section_subtitle cs_accent_color">
                            <span class="cs_shape_left"></span> SEND US A MESSAGE
                        </p>
                        <h3 class="mb-1">We'd Love To Hear From You</h3>
                        <p class="text-muted">Fill out the form below and our team will get back to you.</p>

                        @if (session('contact_success'))
                            <div class="alert alert-success">{{ session('contact_success') }}</div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="#" method="POST" class="row g-3">
                            @csrf

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    value="{{ old('name') }}" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email"
                                    value="{{ old('email') }}" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control" placeholder="Your Phone"
                                    value="{{ old('phone') }}">
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="subject" class="form-control" placeholder="Subject"
                                    value="{{ old('subject') }}">
                            </div>

                            <div class="col-12">
                                <textarea rows="6" name="message" class="form-control" placeholder="Write your message...">{{ old('message') }}</textarea>
                            </div>

                            <div class="col-12">
                                <form action="{{ route('contact.send') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="cs_btn cs_style_1 cs_color_1">
                                        Send Message
                                        <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </button>
                            </div>

                        </form>
                        </form>
                    </div>
                </div>
            </div>


            <div class="text-center mb-4">
                <p class="cs_section_subtitle cs_accent_color">
                    <span class="cs_shape_left"></span> FAQ <span class="cs_shape_right"></span>
                </p>
                <h2 class="cs_section_title">Frequently Asked Questions</h2>
            </div>

            <div class="row g-3 mb-5">
                <div class="col-lg-6">
                    <div class="bg-light rounded-3 p-4 h-100">
                        <h6 class="mb-2"><i class="fa-solid fa-circle-question text-success me-2"></i>How can I book an
                            appointment?</h6>
                        <p class="text-muted mb-0">You can contact our team through the form above or call us directly
                            during our working hours.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light rounded-3 p-4 h-100">
                        <h6 class="mb-2"><i class="fa-solid fa-circle-question text-success me-2"></i>Can I ask about
                            vaccination schedules?</h6>
                        <p class="text-muted mb-0">Yes. Our healthcare team can provide general information about
                            vaccination schedules and available services.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light rounded-3 p-4 h-100">
                        <h6 class="mb-2"><i class="fa-solid fa-circle-question text-success me-2"></i>What are your
                            working
                            hours?</h6>
                        <p class="text-muted mb-0">We are available Monday through Saturday from 9:00 AM to 7:00 PM.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light rounded-3 p-4 h-100">
                        <h6 class="mb-2"><i class="fa-solid fa-circle-question text-success me-2"></i>How can I reach
                            your
                            support team?</h6>
                        <p class="text-muted mb-0">You can call, email, or use the contact form and our team will assist
                            you.</p>
                    </div>
                </div>
            </div>

           
            <div class="text-center mb-4">
                <p class="cs_section_subtitle cs_accent_color">
                    <span class="cs_shape_left"></span> FIND US <span class="cs_shape_right"></span>
                </p>
                <h2 class="cs_section_title">Visit Our Location</h2>
            </div>

            <div class="position-relative rounded-4 overflow-hidden shadow">
                <iframe src="https://www.google.com/maps?q=Lahore,Pakistan&output=embed" width="100%" height="400"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <a href="https://www.google.com/maps/search/?api=1&query=13%2FA%2C+Miranda+Halim+City" target="_blank"
                    rel="noopener"
                    class="cs_btn cs_style_1 cs_color_1 position-absolute bottom-0 start-50 translate-middle-x mb-4 shadow">
                    <span>Get Directions</span>
                    <i class="fa-solid fa-angles-right"></i>
                </a>
            </div>

        </div>
    </section>


@endsection
