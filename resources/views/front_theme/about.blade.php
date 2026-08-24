@extends('front_theme._mastertheme')

@section('fornt_body')

  <section class="cs_page_heading cs_bg_filed cs_center"
    data-src="{{ asset('assets/frontend/img/pexels-pavel-danilyuk-7653095.jpg') }}"
    style="padding: 120px 0; position: relative; background-size: cover; background-position: center;">

    <div
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(5, 31, 32, 0.3) 0%, rgba(5, 31, 32, 0.6) 100%);">
    </div>

    <div class="container" style="position: relative; z-index: 2;">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p class="cs_section_subtitle"
            style="color: #ffffff; font-size: 16px; font-weight: 600; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 10px; background: rgba(142, 182, 155, 0.25); padding: 8px 30px; border-radius: 50px; display: inline-block; backdrop-filter: blur(2px);">
            Know More About Us
          </p>

          <h2 class="cs_section_title"
            style="color: #ffffff; font-size: 52px; font-weight: 700; line-height: 1.2; margin-bottom: 20px; text-shadow: 0 4px 30px rgba(0,0,0,0.4);">
            About Vaccination <br>Management System
          </h2>

          <div style="display: flex; align-items: center; justify-content: center; gap: 12px; font-size: 16px;">
            <a href="{{ url('/index') }}"
              style="color: rgba(255,255,255,0.9); text-decoration: none; transition: 0.3s; font-weight: 400;">
              <i class="fa-solid fa-house" style="font-size: 14px;"></i> Home
            </a>
            <span style="color: rgba(255,255,255,0.5); font-weight: 300;">/</span>
            <span style="color: #8eb69b; font-weight: 600; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">About Us</span>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="cs_about cs_style_1 position-relative">
  <div class="cs_height_120 cs_height_lg_80"></div>

  <div class="container">
    <div class="row align-items-center cs_gap_y_40">

     
      <div class="col-lg-6">
        <div class="cs_about_thumb">

          <div class="cs_about_thumb_1">
            <img src="{{ asset('assets/frontend/img/doctor.jfif') }}"
              alt="Healthcare professional providing vaccination care" />
          </div>

          <div class="cs_about_thumb_2">
            <img src="{{ asset('assets/frontend/img/doctor2.jfif') }}"
              alt="Child receiving vaccination" />

            <img src="{{ asset('assets/frontend/img/icons/about_shape_1.png') }}"
              alt="Decorative shape"
              class="cs_about_thumb_shape_2" />
          </div>

        
          <div class="cs_experience_box cs_center wow zoomIn"
            data-wow-duration="0.9s"
            data-wow-delay="0.25s">

            <p class="cs_experience_box_number">
              100%
            </p>

            <p class="cs_experience_box_title">
              Organized Vaccination Care
            </p>

          </div>

        </div>
      </div>


      <div class="col-lg-6">
        <div class="cs_about_content">

          <div class="cs_section_heading cs_style_1">

            <p class="cs_section_subtitle cs_accent_color wow fadeInLeft"
              data-wow-duration="0.9s"
              data-wow-delay="0.25s">

              <span class="cs_shape_left"></span>
              ABOUT CARE4KIDS

            </p>

            <h2 class="cs_section_title">
              Making Childhood Vaccination Management Simple and Reliable
            </h2>

          </div>

          <p class="cs_about_text">
            Care4Kids is a vaccination management platform designed to make
            childhood immunization easier for parents, hospitals, and
            administrators. The system brings vaccination records,
            appointments, vaccine information, and upcoming vaccination
            schedules together in one convenient platform.
          </p>

          <div class="row cs_gap_y_30">

           
            <div class="col-sm-6">
              <div class="cs_iconbox cs_style_1">

                <div class="cs_iconbox_head">

                  <div class="cs_iconbox_icon cs_center">
                    <img src="{{ asset('assets/frontend/img/icons/about_icon_1.png') }}"
                      alt="Vaccination tracking icon" />
                  </div>

                  <h3 class="cs_iconbox_title m-0">
                    Vaccination Tracking
                  </h3>

                </div>

                <p class="cs_iconbox_subtitle mb-0">
                  Maintain organized vaccination records and monitor each
                  child's immunization progress.
                </p>

              </div>
            </div>

            <div class="col-sm-6">
              <div class="cs_iconbox cs_style_1">

                <div class="cs_iconbox_head">

                  <div class="cs_iconbox_icon cs_center">
                    <img src="{{ asset('assets/frontend/img/icons/about_icon_2.png') }}"
                      alt="Appointment scheduling icon" />
                  </div>

                  <h3 class="cs_iconbox_title m-0">
                    Easy Appointments
                  </h3>

                </div>

                <p class="cs_iconbox_subtitle mb-0">
                  Find suitable vaccination services and manage hospital
                  appointments conveniently.
                </p>

              </div>
            </div>

          </div>

         
          <div class="cs_about_iconbox">

            <div class="cs_about_iconbox_icon cs_center">
              <i class="fa-regular fa-circle-check"></i>
            </div>

            <p class="cs_about_iconbox_subtitle">
              Care4Kids connects parents, hospitals, and administrators
              through one organized vaccination management system.
            </p>

          </div>

          <a class="cs_btn cs_style_1 cs_color_1"
            href="{{ route('vaccination') }}">

            <span>
              Explore Vaccination
            </span>

            <i class="fa-solid fa-angles-right"></i>

          </a>

        </div>
      </div>

    </div>
  </div>


  <div class="cs_section_img">
    <img src="{{ asset('assets/frontend/img/about_section_img_1.png') }}"
      alt="Decorative healthcare background" />
  </div>

  <div class="cs_height_120 cs_height_lg_80"></div>

</section>

<div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
  <div class="container feature px-lg-0">
    <div class="row g-0 mx-lg-0">

  
      <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="p-lg-5 ps-lg-0">

          <p class="d-inline-block border rounded-pill text-light py-1 px-4">
            Features
          </p>

          <h1 class="text-white mb-4">
            Why Choose Care4Kids?
          </h1>

          <p class="text-white mb-4 pb-2">
            Care4Kids makes childhood vaccination management simple, organized,
            and convenient. Parents can manage their children's vaccination
            records, book appointments with hospitals, and stay informed about
            upcoming vaccinations through one easy-to-use platform.
          </p>

          <div class="row g-4">

  
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                  style="width: 55px; height: 55px;">
                  <i class="fa fa-syringe text-primary"></i>
                </div>

                <div class="ms-4">
                  <p class="text-white mb-2">Complete</p>
                  <h5 class="text-white mb-0">Vaccination Care</h5>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                  style="width: 55px; height: 55px;">
                  <i class="fa fa-calendar-check text-primary"></i>
                </div>

                <div class="ms-4">
                  <p class="text-white mb-2">Easy</p>
                  <h5 class="text-white mb-0">Appointment Booking</h5>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                  style="width: 55px; height: 55px;">
                  <i class="fa fa-child text-primary"></i>
                </div>

                <div class="ms-4">
                  <p class="text-white mb-2">For Your</p>
                  <h5 class="text-white mb-0">Children</h5>
                </div>
              </div>
            </div>

           
            <div class="col-6">
              <div class="d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                  style="width: 55px; height: 55px;">
                  <i class="fa fa-bell text-primary"></i>
                </div>

                <div class="ms-4">
                  <p class="text-white mb-2">Stay</p>
                  <h5 class="text-white mb-0">Updated</h5>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s"
        style="min-height: 400px;">
        <div class="position-relative h-100">

          <img class="position-absolute img-fluid w-100 h-100"
            src="{{ asset('assets/frontend/img/pexels-pavel-danilyuk-7653324.jpg') }}"
            style="object-fit: cover;"
            alt="Child receiving vaccination">

        </div>
      </div>

    </div>
  </div>
</div>

  <div class="cs_counter_area_2">
    <div class="container">
      <div class="cs_counter_2_wrap">
        <div class="cs_counter cs_style_2">
          <div class="cs_counter_icon cs_center">
            <img src="{{ asset('assets/frontend/img/icons/counter_icon_1.png') }}" alt="Icon" />
          </div>
          <div class="cs_counter_nmber">
            <span data-count-to="10567" class="odometer"></span>+
          </div>
          <p class="cs_counter_title mb-0">Children Vaccinated</p>
        </div>
        <div class="cs_counter cs_style_2">
          <div class="cs_counter_icon cs_center">
            <img src="{{ asset('assets/frontend/img/icons/counter_icon_2.png') }}" alt="Icon" />
          </div>
          <div class="cs_counter_nmber">
            <span data-count-to="23" class="odometer"></span>K+
          </div>
          <p class="cs_counter_title mb-0">Registered Parents</p>
        </div>
        <div class="cs_counter cs_style_2">
          <div class="cs_counter_icon cs_center">
            <img src="{{ asset('assets/frontend/img/icons/counter_icon_3.png') }}" alt="Icon" />
          </div>
          <div class="cs_counter_nmber">
            <span data-count-to="1241" class="odometer"></span>+
          </div>
          <p class="cs_counter_title mb-0">Vaccine Centers</p>
        </div>
        <div class="cs_counter cs_style_2">
          <div class="cs_counter_icon cs_center">
            <img src="{{ asset('assets/frontend/img/icons/counter_icon_4.png') }}" alt="Icon" />
          </div>
          <div class="cs_counter_nmber">
            <span data-count-to="16" class="odometer"></span>+
          </div>
          <p class="cs_counter_title mb-0">Vaccine Types Available</p>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </div>


@endsection