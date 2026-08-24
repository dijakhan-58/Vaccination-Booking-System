@extends('front_theme._mastertheme')

@section('fornt_body')

    <section class="cs_page_heading cs_bg_filed cs_center"
        data-src="{{ asset('assets/frontend/img/service_details_1.jpg') }}"
        style="padding: 120px 0; position: relative; background-size: cover; background-position: center;">

        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(5, 31, 32, 0.3) 0%, rgba(5, 31, 32, 0.6) 100%);">
        </div>

        <div class="container" style="position: relative; z-index: 2;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="cs_section_subtitle"
                        style="color: #ffffff; font-size: 16px; font-weight: 600; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 10px; background: rgba(142, 182, 155, 0.25); padding: 8px 30px; border-radius: 50px; display: inline-block; backdrop-filter: blur(2px);">
                        Know More About Vaccines
                    </p>

                    <h2 class="cs_section_title"
                        style="color: #ffffff; font-size: 52px; font-weight: 700; line-height: 1.2; margin-bottom: 20px; text-shadow: 0 4px 30px rgba(0,0,0,0.4);">
                        Vaccination <br>Services
                    </h2>

                    <div style="display: flex; align-items: center; justify-content: center; gap: 12px; font-size: 16px;">
                        <a href="{{ url('/index') }}"
                            style="color: rgba(255,255,255,0.9); text-decoration: none; transition: 0.3s; font-weight: 400;">
                            <i class="fa-solid fa-house" style="font-size: 14px;"></i> Home
                        </a>
                        <span style="color: rgba(255,255,255,0.5); font-weight: 300;">/</span>
                        <span
                            style="color: #8eb69b; font-weight: 600; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Vaccines</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


   
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
                                    <div class="cs_iconbox_overlay cs_bg_filed"
                                        data-src="{{ asset('assets/img/service_bg.jpg') }}"></div>
                                    <div class="cs_iconbox_shape"></div>
                                    <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                                        <div class="cs_iconbox_icon cs_center">
                                            <img src="{{ asset('assets/frontend/img/icons/service_icon_1.png') }}"
                                                alt="Service Icon">
                                        </div>
                                        <h3 class="iconbox_index">01</h3>
                                    </div>
                                    <h3 class="cs_iconbox_title"><a href="#">Pre-Vaccination Screening</a></h3>
                                    <p class="cs_iconbox_subtitle m-0">Health and allergy check before every dose</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="cs_iconbox cs_style_2 cs_radius_15 cs_gray_bg">
                                    <div class="cs_iconbox_overlay cs_bg_filed"
                                        data-src="{{ asset('assets/img/service_bg.jpg') }}"></div>
                                    <div class="cs_iconbox_shape"></div>
                                    <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
                                        <div class="cs_iconbox_icon cs_center">
                                            <img src="{{ asset('assets/frontend/img/icons/service_icon_2.png') }}"
                                                alt="Service Icon">
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
                            <p class="cs_about_iconbox_subtitle">All patients are kept for a short observation period after
                                their
                                shot so our team can respond quickly if needed.</p>
                        </div>
                    </div>
                </div>

                <div class="cs_height_45 cs_height_lg_30"></div>

                <p class="cs_service_subtitle mb-0">To book a vaccination, patients can walk in during clinic hours or
                    schedule an appointment in advance. Please bring any previous vaccination record so our staff can
                    confirm
                    which doses are due and keep your immunization history accurate and up to date.</p>
            </div>
        </div>
        <div class="cs_height_110 cs_height_lg_70"></div>
    </section>
  


   <section class="cs_gray_bg vc_vaccine_section">
    <div class="cs_height_110 cs_height_lg_70"></div>

    <div class="container">

        <div class="cs_section_heading cs_style_1 text-center">
            <span class="vc_section_label">
                <i class="fa-solid fa-shield-virus"></i>
            Care4Kids
            </span>

            <h2 class="cs_section_title mt-2">
                Available Vaccines
            </h2>

            <p class="cs_section_subtitle">
                Browse the vaccines we currently offer, grouped by category.
            </p>
        </div>

        <div class="cs_height_45 cs_height_lg_30"></div>

        <div class="row cs_gap_y_30">

            @forelse ($vaccines as $vaccine)

                <div class="col-xl-4 col-md-6 d-flex">

                    <div class="vc_vaccine_card w-100">

                        <div class="vc_vaccine_inner">

                    
                            <div class="vc_vaccine_top">

                                <div class="vc_vaccine_icon">
                                    <i class="fa-solid fa-syringe"></i>
                                </div>

                                <div class="vc_vaccine_badges">

                                    <span class="vc_badge vc_badge_disease">
                                        {{ $vaccine->disease }}
                                    </span>

                                   
                                </div>

                            </div>

                            <div class="vc_vaccine_content">

                                <h3 class="vc_vaccine_title">
                                    {{ $vaccine->name }}
                                </h3>

                                @if ($vaccine->description)
                                    <p class="vc_vaccine_description">
                                        {{ $vaccine->description }}
                                    </p>
                                @endif

                            </div>

                            <div class="vc_vaccine_info">

                                @if ($vaccine->recommended_age_days)
                                    <div class="vc_info_item">

                                        <div class="vc_info_icon">
                                            <i class="fa-regular fa-clock"></i>
                                        </div>

                                        <div>
                                            <span class="vc_info_label">
                                                Recommended Age
                                            </span>

                                            <strong>
                                                {{ $vaccine->recommended_age_days }} days
                                            </strong>
                                        </div>

                                    </div>
                                @endif


                                <div class="vc_info_item">

                                    <div class="vc_info_icon">
                                        <i class="fa-solid fa-syringe"></i>
                                    </div>

                                    <div>
                                        <span class="vc_info_label">
                                            Dose Count
                                        </span>

                                        <strong>
                                            {{ $vaccine->dose_count }}
                                            {{ Str::plural('dose', $vaccine->dose_count) }}
                                        </strong>
                                    </div>

                                </div>


                                @if ($vaccine->manufacturer)

                                    <div class="vc_info_item">

                                        <div class="vc_info_icon">
                                            <i class="fa-solid fa-industry"></i>
                                        </div>

                                        <div>
                                            <span class="vc_info_label">
                                                Manufacturer
                                            </span>

                                            <strong>
                                                {{ $vaccine->manufacturer }}
                                            </strong>
                                        </div>

                                    </div>

                                @endif

                            </div>

           
                            <div class="vc_vaccine_footer">

                                <span>
                                    <i class="fa-solid fa-circle-check"></i>
                                    Verified Vaccine
                                </span>

                             

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="vc_empty_state text-center">

                        <div class="vc_empty_icon">
                            <i class="fa-solid fa-syringe"></i>
                        </div>

                        <h4>No Vaccines Available</h4>

                        <p>
                            No vaccines are currently available.
                            Please check back soon.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

    <div class="cs_height_110 cs_height_lg_70"></div>
</section>
  
   
@endsection