@extends('front_theme._mastertheme')

@section('fornt_body')


  <!-- Start Page Heading -->
  <section class="cs_page_heading cs_bg_filed cs_center" data-src="{{ asset('assets/frontend/img/page_heading_bg.jpg') }}">
    <div class="container">
      <h1 class="cs_page_title">Vaccination Services</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active">Vaccination Services</li>
      </ol>
    </div>
  </section>
  <!-- End Page Heading -->

  <!-- Start Service Details Section -->
  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row cs_gap_y_40">
        <div class="col-xl-4 col-lg-5">
          <div class="cs_solution_content_wrapper cs_gray_bg cs_type_1">
            <h3 class="cs_service_heading">Vaccine Categories:</h3>
            <ul class="cs_solution_links cs_style_2 cs_mp0">
              <li>
                <a href="#">
                  <span class="cs_tab_link_icon_left cs_center"><i class="fa-solid fa-check"></i></span>
                  <span>Routine Childhood Immunization</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="cs_tab_link_icon_left cs_center"><i class="fa-solid fa-check"></i></span>
                  <span>Seasonal Flu Vaccine</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="cs_tab_link_icon_left cs_center"><i class="fa-solid fa-check"></i></span>
                  <span>COVID-19 Vaccine</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="cs_tab_link_icon_left cs_center"><i class="fa-solid fa-check"></i></span>
                  <span>Travel Vaccines</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="cs_tab_link_icon_left cs_center"><i class="fa-solid fa-check"></i></span>
                  <span>Adult Booster Shots</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-8 col-lg-7">
          <div class="cs_service_details_thumbnail">
            <img src="{{ asset('assets/frontend/img/service_details_1.jpg') }}" alt="Image">
          </div>
        </div>
      </div>

      <div class="cs_height_35 cs_height_lg_30"></div>

      <div class="cs_service_details">
        <h3 class="cs_service_heading">About Our Vaccination Program:</h3>
        <p class="cs_service_subtitle">Our clinic provides safe, on-schedule vaccinations for children, adults, and
          travelers, administered by licensed nurses and physicians under strict cold-chain and hygiene protocols.
          We follow the national immunization schedule for routine childhood vaccines and keep every patient's
          vaccination record on file so booster doses are never missed. Walk-in and appointment-based slots are
          both available, and every vaccine is stored and handled according to manufacturer guidelines.</p>
        <p class="cs_service_subtitle">Before every vaccination, our staff reviews the patient's medical history and
          any known allergies, and a short observation period is required after the shot to watch for reactions.
          We also maintain digital vaccination certificates that patients can download for school, work, or travel
          requirements, and our team is available to answer questions about side effects, dosing intervals, and
          which vaccines are recommended for a patient's age and health condition.</p>

        <div class="cs_height_35 cs_height_lg_30"></div>

        <div class="row cs_gap_y_30">
          <div class="col-lg-6">
            <div class="cs_service_details_thumbnail">
              <img src="{{ asset('assets/frontend/img/service_details_2.jpg') }}" alt="Image">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row cs_gap_y_30">
              <div class="col-xl-6 col-lg-12 col-md-6">
                <div class="cs_iconbox cs_style_2 cs_radius_15 cs_gray_bg">
                  <div class="cs_iconbox_overlay cs_bg_filed" data-src="{{ asset('assets/img/service_bg.jpg') }}"></div>
                  <div class="cs_iconbox_shape"></div>
                  <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                    <div class="cs_iconbox_icon cs_center">
                      <img src="{{ asset('assets/frontend/img/icons/service_icon_1.png') }}" alt="Service Icon">
                    </div>
                    <h3 class="iconbox_index">01</h3>
                  </div>
                  <h3 class="cs_iconbox_title"><a href="#">Pre-Vaccination Screening</a></h3>
                  <p class="cs_iconbox_subtitle m-0">Health and allergy check before every dose</p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-12 col-md-6">
                <div class="cs_iconbox cs_style_2 cs_radius_15 cs_gray_bg">
                  <div class="cs_iconbox_overlay cs_bg_filed" data-src="{{ asset('assets/img/service_bg.jpg') }}"></div>
                  <div class="cs_iconbox_shape"></div>
                  <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                    <div class="cs_iconbox_icon cs_center">
                      <img src="{{ asset('assets/frontend/img/icons/service_icon_2.png') }}" alt="Service Icon">
                    </div>
                    <h3 class="iconbox_index">02</h3>
                  </div>
                  <h3 class="cs_iconbox_title"><a href="#">Certified Vaccination Care</a></h3>
                  <p class="cs_iconbox_subtitle m-0">Administered by licensed nurses and physicians</p>
                </div>
              </div>
            </div>
            <div class="cs_about_iconbox">
              <div class="cs_about_iconbox_icon cs_center">
                <i class="fa-regular fa-circle-check"></i>
              </div>
              <p class="cs_about_iconbox_subtitle">All patients are kept for a short observation period after their
                shot so our team can respond quickly if needed.</p>
            </div>
          </div>
        </div>

        <div class="cs_height_45 cs_height_lg_30"></div>

        <p class="cs_service_subtitle mb-0">To book a vaccination, patients can walk in during clinic hours or
          schedule an appointment in advance. Please bring any previous vaccination record so our staff can confirm
          which doses are due and keep your immunization history accurate and up to date.</p>
      </div>
    </div>
    <div class="cs_height_110 cs_height_lg_70"></div>
  </section>
  <!-- End Service Details Section -->

  <!-- Start Counter Section -->
  <div class="cs_counter_area_2">
    <div class="container">
      <div class="cs_counter_2_wrap">
        <div class="cs_counter cs_style_2">
          <div class="cs_counter_icon cs_center">
            <img src="{{ asset('assets/frontend/img/icons/counter_icon_1.png') }}" alt="Icon">
          </div>
          <div class="cs_counter_nmber"><span data-count-to="567" class="odometer"></span>+</div>
          <p class="cs_counter_title mb-0">Active Clients</p>
        </div>
        <div class="cs_counter cs_style_2">
          <div class="cs_counter_icon cs_center">
            <img src="{{ asset('assets/frontend/img/icons/counter_icon_2.png') }}" alt="Icon">
          </div>
          <div class="cs_counter_nmber"><span data-count-to="23" class="odometer"></span>K+</div>
          <p class="cs_counter_title mb-0">Team Support</p>
        </div>
        <div class="cs_counter cs_style_2">
          <div class="cs_counter_icon cs_center">
            <img src="{{ asset('assets/frontend/img/icons/counter_icon_3.png') }}" alt="Icon">
          </div>
          <div class="cs_counter_nmber"><span data-count-to="241" class="odometer"></span>+</div>
          <p class="cs_counter_title mb-0">Projects Completed</p>
        </div>
        <div class="cs_counter cs_style_2">
          <div class="cs_counter_icon cs_center">
            <img src="{{ asset('assets/frontend/img/icons/counter_icon_4.png') }}" alt="Icon">
          </div>
          <div class="cs_counter_nmber"><span data-count-to="16" class="odometer"></span>K+</div>
          <p class="cs_counter_title mb-0">Award winner</p>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </div>


    <section class="cs_gray_bg">
      <div class="cs_height_110 cs_height_lg_70"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
          <h2 class="cs_section_title">Available Vaccines</h2>
          <p class="cs_section_subtitle">Browse the vaccines we currently offer, grouped by category.</p>
        </div>
        <div class="cs_height_45 cs_height_lg_30"></div>
        <div class="row cs_gap_y_30">
         
            <div class="col-lg-4 col-md-6">
              <a href="#" class="vc_vaccine_card">
                <div class="cs_iconbox cs_style_2 cs_radius_15 cs_white_bg">
                  <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                    <span class="vc_badge" style="background:#DAF1DE;color:#051F20;">
                      {{ $vaccine['category'] }}
                    </span>
                    <span class="vc_price_tag">Rs {{ number_format($vaccine['price']) }}</span>
                  </div>
                  <h3 class="cs_iconbox_title">{{ $vaccine['name'] }}</h3>
                  <p class="cs_iconbox_subtitle m-0">{{ $vaccine['description'] }}</p>
                  <div class="cs_height_15"></div>
                  <ul class="cs_mp0" style="list-style:none;">
                    <li><i class="fa-regular fa-clock"></i> Age group: {{ $vaccine['age_group'] }}</li>
                    <li><i class="fa-solid fa-syringe"></i> {{ $vaccine['doses'] }}</li>
                  </ul>
                  <div class="cs_height_15"></div>
                  <span class="cs_btn cs_style_1 cs_color_1" style="pointer-events:none;">
                    <span>View &amp; Book</span>
                    <i class="fa-solid fa-angles-right"></i>
                  </span>
                </div>
              </a>
            </div>
          
            <p class="text-center">No vaccines available right now. Please check back soon.</p>
        
        </div>
      </div>
      <div class="cs_height_110 cs_height_lg_70"></div>
    </section>
    <!-- End Vaccines List Section -->
    <!-- Start Counter Section -->
    <div class="cs_counter_area_2">
      <div class="container">
        <div class="cs_counter_2_wrap">
          <div class="cs_counter cs_style_2">
            <div class="cs_counter_icon cs_center">
              <img src="{{ asset('assets/img/icons/counter_icon_1.png') }}" alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="567" class="odometer"></span>+</div>
            <p class="cs_counter_title mb-0">Active Clients</p>
          </div>
          <div class="cs_counter cs_style_2">
            <div class="cs_counter_icon cs_center">
              <img src="{{ asset('assets/img/icons/counter_icon_2.png') }}" alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="23" class="odometer"></span>K+</div>
            <p class="cs_counter_title mb-0">Team Support</p>
          </div>
          <div class="cs_counter cs_style_2">
            <div class="cs_counter_icon cs_center">
              <img src="{{ asset('assets/img/icons/counter_icon_3.png') }}" alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="241" class="odometer"></span>+</div>
            <p class="cs_counter_title mb-0">Projects Completed</p>
          </div>
          <div class="cs_counter cs_style_2">
            <div class="cs_counter_icon cs_center">
              <img src="{{ asset('assets/img/icons/counter_icon_4.png') }}" alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="16" class="odometer"></span>K+</div>
            <p class="cs_counter_title mb-0">Award winner</p>
          </div>
        </div>
      </div>
      <div class="cs_height_120 cs_height_lg_80"></div>
    </div>
@endsection