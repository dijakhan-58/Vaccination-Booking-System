@extends('dashboard._mastertheme')


@section('body')
    <section class="cs_page_heading cs_bg_filed cs_center" data-src="{{ asset('assets/img/page_heading_bg.jpg') }}">
        <div class="container">
            <h1 class="cs_page_title">Contact Us</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
        </div>
    </section>
    <!-- End Page Heading -->
    <!-- Start Get In Touch Info Section -->
    <section>
        <div class="cs_height_90 cs_height_lg_60"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_accent_color">
                    <span class="cs_shape_left"></span>GET IN TOUCH<span class="cs_shape_right"></span>
                </p>
                <h2 class="cs_section_title">Reach Us However Works Best For You</h2>
            </div>
            <div class="cs_height_50 cs_height_lg_40"></div>
            <div class="row cs_gap_y_20">
                <div class="col-md-6 col-lg-3">
                    <a href="tel:0996956953" style="text-decoration:none; color:inherit;">
                        <div class="cs_iconbox cs_style_2 cs_radius_15 cs_white_bg"
                            style="text-align:center; box-shadow:0 10px 30px rgba(35,83,71,0.08); transition: transform .25s ease, box-shadow .25s ease; border:1px solid #eef1ef;"
                            onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 36px rgba(35,83,71,0.14)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(35,83,71,0.08)';">
                            <div class="cs_iconbox_icon cs_center"
                                style="width:64px; height:64px; margin:0 auto 18px; border-radius:50%; background:#e9f3ef; display:flex; align-items:center; justify-content:center;">
                                <i class="fa-solid fa-phone" style="font-size:24px;color:#235347;"></i></div>
                            <h3 class="cs_iconbox_title" style="font-size:18px;">Call Us</h3>
                            <p class="cs_iconbox_subtitle m-0">099 695 695 35<br>Mon – Fri, 8am – 6pm</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="mailto:care@vaccicare.com" style="text-decoration:none; color:inherit;">
                        <div class="cs_iconbox cs_style_2 cs_radius_15 cs_white_bg"
                            style="text-align:center; box-shadow:0 10px 30px rgba(35,83,71,0.08); transition: transform .25s ease, box-shadow .25s ease; border:1px solid #eef1ef;"
                            onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 36px rgba(35,83,71,0.14)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(35,83,71,0.08)';">
                            <div class="cs_iconbox_icon cs_center"
                                style="width:64px; height:64px; margin:0 auto 18px; border-radius:50%; background:#e9f3ef; display:flex; align-items:center; justify-content:center;">
                                <i class="fa-solid fa-envelope" style="font-size:24px;color:#235347;"></i></div>
                            <h3 class="cs_iconbox_title" style="font-size:18px;">Email Us</h3>
                            <p class="cs_iconbox_subtitle m-0">care@vaccicare.com<br>We reply within 24 hours</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="https://www.google.com/maps/search/?api=1&query=13%2FA%2C+Miranda+Halim+City" target="_blank"
                        rel="noopener" style="text-decoration:none; color:inherit;">
                        <div class="cs_iconbox cs_style_2 cs_radius_15 cs_white_bg"
                            style="text-align:center; box-shadow:0 10px 30px rgba(35,83,71,0.08); transition: transform .25s ease, box-shadow .25s ease; border:1px solid #eef1ef;"
                            onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 36px rgba(35,83,71,0.14)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(35,83,71,0.08)';">
                            <div class="cs_iconbox_icon cs_center"
                                style="width:64px; height:64px; margin:0 auto 18px; border-radius:50%; background:#e9f3ef; display:flex; align-items:center; justify-content:center;">
                                <i class="fa-solid fa-location-dot" style="font-size:24px;color:#235347;"></i></div>
                            <h3 class="cs_iconbox_title" style="font-size:18px;">Visit Us</h3>
                            <p class="cs_iconbox_subtitle m-0">13/A, Miranda Halim City<br>Get directions on the map</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="cs_iconbox cs_style_2 cs_radius_15 cs_white_bg"
                        style="text-align:center; box-shadow:0 10px 30px rgba(35,83,71,0.08); transition: transform .25s ease, box-shadow .25s ease; border:1px solid #eef1ef;"
                        onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 36px rgba(35,83,71,0.14)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(35,83,71,0.08)';">
                        <div class="cs_iconbox_icon cs_center"
                            style="width:64px; height:64px; margin:0 auto 18px; border-radius:50%; background:#e9f3ef; display:flex; align-items:center; justify-content:center;">
                            <i class="fa-regular fa-clock" style="font-size:24px;color:#235347;"></i></div>
                        <h3 class="cs_iconbox_title" style="font-size:18px;">Working Hours</h3>
                        <p class="cs_iconbox_subtitle m-0">Mon – Fri: 8am – 6pm<br>Sat: 9am – 2pm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Get In Touch Info Section -->
    <!-- Start Contact Section -->
    <section>
        <div class="container">

            <!-- Section Heading -->
            <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_accent_color">
                    <span class="cs_shape_left"></span>
                    CONTACT US
                    <span class="cs_shape_right"></span>
                </p>

                <h2 class="cs_section_title">
                    We're Here To Help You
                </h2>

                <p style="max-width: 650px; margin: 15px auto 0; color: #666; line-height: 1.8;">
                    Whether you have questions about vaccines, need help with an appointment,
                    or simply want to speak with our team, we're always happy to help.
                </p>
            </div>

            <div class="cs_height_50 cs_height_lg_40"></div>


            <!-- Contact Information Cards -->
            <div class="row">

                <!-- Phone -->
                <div class="col-lg-4 col-md-6">
                    <div
                        style="
          padding: 30px;
          background: #f1fafa;
          border-radius: 15px;
          text-align: center;
          height: 100%;
        ">

                        <div
                            style="
            width: 65px;
            height: 65px;
            line-height: 65px;
            margin: 0 auto 18px;
            background: #4db6ac;
            color: #fff;
            border-radius: 50%;
            font-size: 22px;
          ">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <h4>Call Us</h4>

                        <p style="color: #666; margin-bottom: 0;">
                            +92 300 1234567<br>
                            +92 321 7654321
                        </p>

                    </div>
                </div>


                <!-- Email -->
                <div class="col-lg-4 col-md-6">
                    <div
                        style="
          padding: 30px;
          background: #f1fafa;
          border-radius: 15px;
          text-align: center;
          height: 100%;
        ">

                        <div
                            style="
            width: 65px;
            height: 65px;
            line-height: 65px;
            margin: 0 auto 18px;
            background: #4db6ac;
            color: #fff;
            border-radius: 50%;
            font-size: 22px;
          ">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <h4>Email Us</h4>

                        <p style="color: #666; margin-bottom: 0;">
                            info@vaccicare.com<br>
                            support@vaccicare.com
                        </p>

                    </div>
                </div>


                <!-- Opening Hours -->
                <div class="col-lg-4 col-md-12">
                    <div
                        style="
          padding: 30px;
          background: #f1fafa;
          border-radius: 15px;
          text-align: center;
          height: 100%;
        ">

                        <div
                            style="
            width: 65px;
            height: 65px;
            line-height: 65px;
            margin: 0 auto 18px;
            background: #4db6ac;
            color: #fff;
            border-radius: 50%;
            font-size: 22px;
          ">
                            <i class="fa-solid fa-clock"></i>
                        </div>

                        <h4>Opening Hours</h4>

                        <p style="color: #666; margin-bottom: 0;">
                            Monday - Saturday<br>
                            9:00 AM - 7:00 PM
                        </p>

                    </div>
                </div>

            </div>


            <div class="cs_height_70 cs_height_lg_50"></div>


            <!-- Main Contact Area -->
            <div class="row align-items-stretch">

                <!-- Left Side -->
                <div class="col-lg-5">

                    <div
                        style="
          background: #eaf7f7;
          padding: 40px;
          border-radius: 18px;
          height: 100%;
        ">

                        <p class="cs_section_subtitle cs_accent_color">
                            <span class="cs_shape_left"></span>
                            HOW CAN WE HELP?
                        </p>

                        <h3 style="margin-bottom: 15px;">
                            Your Questions Matter
                        </h3>

                        <p style="color: #666; line-height: 1.8;">
                            Our team is available to help you with vaccination information,
                            appointment support, general questions, and other healthcare concerns.
                        </p>


                        <!-- Support Item -->
                        <div
                            style="
            display: flex;
            align-items: flex-start;
            margin-top: 28px;
          ">

                            <div
                                style="
              min-width: 48px;
              height: 48px;
              line-height: 48px;
              text-align: center;
              background: #4db6ac;
              color: white;
              border-radius: 10px;
              margin-right: 15px;
            ">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>

                            <div>
                                <h5 style="margin-bottom: 5px;">
                                    Appointment Support
                                </h5>

                                <p style="color: #777; margin: 0;">
                                    Need help booking or changing an appointment?
                                    Our team can guide you.
                                </p>
                            </div>

                        </div>


                        <!-- Support Item -->
                        <div
                            style="
            display: flex;
            align-items: flex-start;
            margin-top: 25px;
          ">

                            <div
                                style="
              min-width: 48px;
              height: 48px;
              line-height: 48px;
              text-align: center;
              background: #4db6ac;
              color: white;
              border-radius: 10px;
              margin-right: 15px;
            ">
                                <i class="fa-solid fa-syringe"></i>
                            </div>

                            <div>
                                <h5 style="margin-bottom: 5px;">
                                    Vaccine Information
                                </h5>

                                <p style="color: #777; margin: 0;">
                                    Have questions about vaccines or vaccination schedules?
                                    We're here to help.
                                </p>
                            </div>

                        </div>


                        <!-- Support Item -->
                        <div
                            style="
            display: flex;
            align-items: flex-start;
            margin-top: 25px;
          ">

                            <div
                                style="
              min-width: 48px;
              height: 48px;
              line-height: 48px;
              text-align: center;
              background: #4db6ac;
              color: white;
              border-radius: 10px;
              margin-right: 15px;
            ">
                                <i class="fa-solid fa-headset"></i>
                            </div>

                            <div>
                                <h5 style="margin-bottom: 5px;">
                                    General Support
                                </h5>

                                <p style="color: #777; margin: 0;">
                                    For general questions, contact our support team
                                    during working hours.
                                </p>
                            </div>

                        </div>


                        <!-- Emergency -->
                        <div
                            style="
            margin-top: 30px;
            padding: 18px;
            background: #fff;
            border-left: 4px solid #4db6ac;
            border-radius: 8px;
          ">

                            <strong>
                                <i class="fa-solid fa-circle-info"></i>
                                Need urgent assistance?
                            </strong>

                            <p style="margin: 6px 0 0; color: #777;">
                                For medical emergencies, please contact your local emergency
                                services immediately.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Contact Form -->
                <div class="col-lg-7">

                    <div
                        style="
          padding: 40px;
          background: #fff;
          border-radius: 18px;
          box-shadow: 0 8px 35px rgba(0,0,0,0.07);
        ">

                        <p class="cs_section_subtitle cs_accent_color">
                            <span class="cs_shape_left"></span>
                            SEND US A MESSAGE
                        </p>

                        <h3 style="margin-bottom: 10px;">
                            We'd Love To Hear From You
                        </h3>

                        <p style="color: #777;">
                            Fill out the form below and our team will get back to you.
                        </p>

                        <div class="cs_height_20"></div>


                        @if (session('contact_success'))
                            <div class="alert alert-success" role="alert"
                                style="
                margin-bottom: 20px;
                padding: 15px 20px;
                border-radius: 8px;
                background: #e6f4ea;
                color: #1e7e34;
                border: 1px solid #b7dfc0;
              ">
                                {{ session('contact_success') }}
                            </div>
                        @endif


                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert"
                                style="
                margin-bottom: 20px;
                padding: 15px 20px;
                border-radius: 8px;
                background: #fdecea;
                color: #b3261e;
                border: 1px solid #f3b8b3;
              ">
                                <ul style="margin: 0; padding-left: 18px;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form class="cs_contact_form row cs_gap_y_30" action="#"
                            method="POST">

                            @csrf


                            <div class="col-md-6">
                                <input type="text" name="name" class="cs_form_field" placeholder="Your Name"
                                    value="{{ old('name') }}" required>
                            </div>


                            <div class="col-md-6">
                                <input type="email" name="email" class="cs_form_field" placeholder="Your Email"
                                    value="{{ old('email') }}" required>
                            </div>


                            <div class="col-md-6">
                                <input type="text" name="phone" class="cs_form_field" placeholder="Your Phone"
                                    value="{{ old('phone') }}">
                            </div>


                            <div class="col-md-6">
                                <input type="text" name="subject" class="cs_form_field" placeholder="Subject"
                                    value="{{ old('subject') }}">
                            </div>


                            <div class="col-lg-12">
                                <textarea rows="6" name="message" class="cs_form_field" placeholder="Write your message..." required>{{ old('message') }}</textarea>
                            </div>


                            <div class="col-lg-12">
                                <button type="submit" class="cs_btn cs_style_1 cs_color_1">
                                    Send Message
                                    <i class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i>
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>


            <div class="cs_height_80 cs_height_lg_60"></div>


            <!-- FAQ Section -->
            <div class="cs_section_heading cs_style_1 text-center">

                <p class="cs_section_subtitle cs_accent_color">
                    <span class="cs_shape_left"></span>
                    FAQ
                    <span class="cs_shape_right"></span>
                </p>

                <h2 class="cs_section_title">
                    Frequently Asked Questions
                </h2>

            </div>


            <div class="cs_height_40 cs_height_lg_30"></div>


            <div class="row">

                <div class="col-lg-6">

                    <div
                        style="
          padding: 25px;
          margin-bottom: 20px;
          background: #f7fbfb;
          border-radius: 12px;
        ">

                        <h5>
                            <i class="fa-solid fa-circle-question" style="color: #4db6ac; margin-right: 8px;"></i>
                            How can I book an appointment?
                        </h5>

                        <p style="color: #777; margin: 10px 0 0; line-height: 1.7;">
                            You can contact our team through the form above or call us
                            directly during our working hours.
                        </p>

                    </div>

                </div>


                <div class="col-lg-6">

                    <div
                        style="
          padding: 25px;
          margin-bottom: 20px;
          background: #f7fbfb;
          border-radius: 12px;
        ">

                        <h5>
                            <i class="fa-solid fa-circle-question" style="color: #4db6ac; margin-right: 8px;"></i>
                            Can I ask about vaccination schedules?
                        </h5>

                        <p style="color: #777; margin: 10px 0 0; line-height: 1.7;">
                            Yes. Our healthcare team can provide general information
                            about vaccination schedules and available services.
                        </p>

                    </div>

                </div>


                <div class="col-lg-6">

                    <div
                        style="
          padding: 25px;
          margin-bottom: 20px;
          background: #f7fbfb;
          border-radius: 12px;
        ">

                        <h5>
                            <i class="fa-solid fa-circle-question" style="color: #4db6ac; margin-right: 8px;"></i>
                            What are your working hours?
                        </h5>

                        <p style="color: #777; margin: 10px 0 0; line-height: 1.7;">
                            We are available Monday through Saturday from 9:00 AM
                            to 7:00 PM.
                        </p>

                    </div>

                </div>


                <div class="col-lg-6">

                    <div
                        style="
          padding: 25px;
          margin-bottom: 20px;
          background: #f7fbfb;
          border-radius: 12px;
        ">

                        <h5>
                            <i class="fa-solid fa-circle-question" style="color: #4db6ac; margin-right: 8px;"></i>
                            How can I reach your support team?
                        </h5>

                        <p style="color: #777; margin: 10px 0 0; line-height: 1.7;">
                            You can call, email, or use the contact form and our team
                            will assist you.
                        </p>

                    </div>

                </div>

            </div>


            <div class="cs_height_70 cs_height_lg_50"></div>


            <!-- Location -->
            <div class="cs_section_heading cs_style_1 text-center">

                <p class="cs_section_subtitle cs_accent_color">
                    <span class="cs_shape_left"></span>
                    FIND US
                    <span class="cs_shape_right"></span>
                </p>

                <h2 class="cs_section_title">
                    Visit Our Location
                </h2>

            </div>


            <div class="cs_height_35 cs_height_lg_30"></div>


            <div
                style="
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    ">

                <iframe src="https://www.google.com/maps?q=Lahore,Pakistan&output=embed" width="100%" height="400"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>

        </div>

        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End Contact Section -->
    <!-- Start Team Section -->
    <section>
        <div class="container">

            <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_accent_color">
                    <span class="cs_shape_left"></span>
                    OUR TEAM
                    <span class="cs_shape_right"></span>
                </p>

                <h2 class="cs_section_title">
                    Meet Our Healthcare Specialists
                </h2>

                <p style="max-width: 650px; margin: 15px auto 0; color: #666; line-height: 1.8;">
                    Our dedicated healthcare professionals are available to answer your
                    questions and provide guidance about vaccinations and healthcare services.
                </p>
            </div>

            <div class="cs_height_50 cs_height_lg_40"></div>

            <div class="row">

                <!-- Doctor 1 -->
                <div class="col-lg-4 col-md-6">
                    <div
                        style="background:#fff; border-radius:18px; overflow:hidden; box-shadow:0 8px 30px rgba(0,0,0,.08); margin-bottom:30px;">

                        <div style="height:330px; overflow:hidden; background:#eef8f8;">
                            <img src="{{ asset('assets/img/team_1.jpg') }}" alt="Dr. Norma Pedric"
                                style="width:100%; height:100%; object-fit:cover; object-position:center top;">
                        </div>

                        <div style="padding:25px;">

                            <h3 style="margin-bottom:5px;">
                                Dr. Norma Pedric
                            </h3>

                            <p style="color:#4db6ac; font-weight:600; margin-bottom:12px;">
                                Neurologist
                            </p>

                            <p style="color:#777; line-height:1.7;">
                                Experienced in providing professional healthcare guidance
                                and personalized support for patients.
                            </p>

                            <div style="margin-top:18px; padding-top:15px; border-top:1px solid #eee;">
                                <i class="fa-solid fa-phone" style="color:#4db6ac;"></i>
                                <span style="margin-left:8px; color:#666;">
                                    Available for consultation
                                </span>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Doctor 2 -->
                <div class="col-lg-4 col-md-6">
                    <div
                        style="background:#fff; border-radius:18px; overflow:hidden; box-shadow:0 8px 30px rgba(0,0,0,.08); margin-bottom:30px;">

                        <div style="height:330px; overflow:hidden; background:#eef8f8;">
                            <img src="{{ asset('assets/img/team_4.jpg') }}" alt="Dr. Aaron Whitfield"
                                style="width:100%; height:100%; object-fit:cover; object-position:center top;">
                        </div>

                        <div style="padding:25px;">

                            <h3 style="margin-bottom:5px;">
                                Dr. Aaron Whitfield
                            </h3>

                            <p style="color:#4db6ac; font-weight:600; margin-bottom:12px;">
                                Pediatrician
                            </p>

                            <p style="color:#777; line-height:1.7;">
                                Focused on children's healthcare and helping families
                                make informed healthcare decisions.
                            </p>

                            <div style="margin-top:18px; padding-top:15px; border-top:1px solid #eee;">
                                <i class="fa-solid fa-calendar-check" style="color:#4db6ac;"></i>
                                <span style="margin-left:8px; color:#666;">
                                    Appointment support available
                                </span>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Doctor 3 -->
                <div class="col-lg-4 col-md-6">
                    <div
                        style="background:#fff; border-radius:18px; overflow:hidden; box-shadow:0 8px 30px rgba(0,0,0,.08); margin-bottom:30px;">

                        <div style="height:330px; overflow:hidden; background:#eef8f8;">
                            <img src="{{ asset('assets/img/team_7.jpg') }}" alt="Dr. Layla Simmons"
                                style="width:100%; height:100%; object-fit:cover; object-position:center top;">
                        </div>

                        <div style="padding:25px;">

                            <h3 style="margin-bottom:5px;">
                                Dr. Layla Simmons
                            </h3>

                            <p style="color:#4db6ac; font-weight:600; margin-bottom:12px;">
                                Immunization Specialist
                            </p>

                            <p style="color:#777; line-height:1.7;">
                                Helps patients understand immunization options,
                                schedules, and preventive healthcare.
                            </p>

                            <div style="margin-top:18px; padding-top:15px; border-top:1px solid #eee;">
                                <i class="fa-solid fa-syringe" style="color:#4db6ac;"></i>
                                <span style="margin-left:8px; color:#666;">
                                    Vaccination guidance available
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="cs_height_100 cs_height_lg_70"></div>
    </section>
    <!-- End Team Section -->

    <!-- Start Location Map -->
    <section>
        <div class="cs_height_100 cs_height_lg_60"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <p class="cs_section_subtitle cs_accent_color">
                    <span class="cs_shape_left"></span>FIND US<span class="cs_shape_right"></span>
                </p>
                <h2 class="cs_section_title">Come Say Hello In Person</h2>
            </div>
            <div class="cs_height_40 cs_height_lg_30"></div>
        </div>
    </section>
    <div class="cs_location_map" style="position:relative;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.5851960224!2d-0.2664050245106056!3d51.52852620113951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2z4Kay4Kao4KeN4Kah4KaoLCDgpq_gp4HgppXgp43gpqTgprDgpr7gppzgp43gpq8!5e0!3m2!1sbn!2sbd!4v1723284219451!5m2!1sbn!2sbd"></iframe>
        <a href="https://www.google.com/maps/search/?api=1&query=13%2FA%2C+Miranda+Halim+City" target="_blank"
            rel="noopener" class="cs_btn cs_style_1 cs_color_1"
            style="position:absolute; bottom:30px; left:50%; transform:translateX(-50%); z-index:5; box-shadow:0 10px 25px rgba(0,0,0,0.25);">
            <span>Get Directions</span>
            <i class="fa-solid fa-angles-right"></i>
        </a>
    </div>
@endsection
