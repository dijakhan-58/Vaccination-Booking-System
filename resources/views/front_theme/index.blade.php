@extends('front_theme._mastertheme')




@section('fornt_body')



<section class="position-relative">
    <div class="cs_hero_slider_thumb slick-slider">
     
        <div class="cs_hero_slider_thumb_item">
            <div class="cs_hero cs_style_1 cs_center cs_bg_filed" data-src="{{ asset('assets/frontend/img/hero_slider_2.jpg') }}">
                <div class="container">
                    <div class="cs_hero_text">
                        <div class="cs_hero_text_in">
                            <h1 class="cs_hero_title">Welcome to <span>Care4Kids</span></h1>
                            <p class="cs_hero_subtitle">Protecting your child’s health through timely immunizations, seamless hospital appointment bookings, automated dose reminders, and verified digital certificates.</p>
                            <div class="cs_hero_info">
                                <h3>Smart Immunization Care</h3>
                                <p>Easily register your child and track routine <br>doses across partner hospitals in Karachi.</p>
                            </div>
                            <div class="cs_hero_btns">
                                <a class='cs_btn cs_style_1 cs_color_1' href='{{ route('login') }}'>
                                    <span>Book Appointment</span>
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="cs_hero_shape">
                            <img src="{{ asset('assets/frontend/img/icons/hero_icon.png') }}" alt="Care4Kids Icon" class="cs_spinner_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="cs_hero_slider_thumb_item">
            <div class="cs_hero cs_style_1 cs_center cs_bg_filed" data-src="{{ asset('assets/frontend/img/pexels-pavel-danilyuk-5998475.jpg') }}">
                <div class="container">
                    <div class="cs_hero_text">
                        <div class="cs_hero_text_in">
                            <h1 class="cs_hero_title">Childhood Immunization <br><span>Made Simple</span></h1>
                            <p class="cs_hero_subtitle">Stay ahead of preventable childhood diseases with Care4Kids' automated EPI schedule tracking for BCG, Polio, Pentavalent, PCV, and Measles.</p>
                            <div class="cs_hero_info">
                                <h3>Automated Reminders</h3>
                                <p>Receive timely SMS and portal alerts for every upcoming vaccine dose.</p>
                            </div>
                            <div class="cs_hero_btns">
                                <a class='cs_btn cs_style_1 cs_color_1' href='{{ route('Website_contact') }}'>
                                    <span>Explore Schedule</span>
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="cs_hero_shape">
                            <img src="{{ asset('assets/frontend/img/icons/hero_icon.png') }}" alt="Care4Kids Icon" class="cs_spinner_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cs_hero_slider_thumb_item">
            <div class="cs_hero cs_style_1 cs_center cs_bg_filed" data-src="{{ asset('assets/frontend/img/doctor.jfif') }}">
                <div class="container">
                    <div class="cs_hero_text">
                        <div class="cs_hero_text_in">
                            <h1 class="cs_hero_title">Verified Hospitals & <span>Digital Cards</span></h1>
                            <p class="cs_hero_subtitle">Select accredited medical centers near you, reserve hassle-free vaccination slots, and download official Care4Kids immunization certificates.</p>
                            <div class="cs_hero_info">
                                <h3>Trusted Healthcare</h3>
                                <p>Connecting parents with authorized pediatric clinics and hospitals.</p>
                            </div>
                            <div class="cs_hero_btns">
                                <a class='cs_btn cs_style_1 cs_color_1' href='{{ route('Website_about') }}'>
                                    <span>Learn More</span>
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="cs_hero_shape">
                            <img src="{{ asset('assets/frontend/img/icons/hero_icon.png') }}" alt="Care4Kids Icon" class="cs_spinner_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    <div class="cs_hero_slider_nav slick-slider">
        <div class="cs_hero_slider_thumb_mini"><img src="{{ asset('assets/frontend/img/hero_slider_2.jpg') }}" alt="Care4Kids Home"></div>
        <div class="cs_hero_slider_thumb_mini"><img src="{{ asset('assets/frontend/img/pexels-pavel-danilyuk-5998475.jpg') }}" alt="Child Immunization"></div>
        <div class="cs_hero_slider_thumb_mini"><img src="{{ asset('assets/frontend/img/doctor.jfif') }}" alt="Pediatric Doctors"></div>
        <div class="cs_hero_slider_thumb_mini"><img src="{{ asset('assets/frontend/img/hero_slider_2.jpg') }}" alt="Care4Kids Home"></div>
        <div class="cs_hero_slider_thumb_mini"><img src="{{ asset('assets/frontend/img/pexels-pavel-danilyuk-5998475.jpg') }}" alt="Child Immunization"></div>
        <div class="cs_hero_slider_thumb_mini"><img src="{{ asset('assets/frontend/img/doctor.jfif') }}" alt="Pediatric Doctors"></div>
    </div>
</section>

<section class="cs_cta cs_style_1 cs_blue_bg position-relative overflow-hidden">
    <div class="container">
        <div class="cs_cta_in">
            <div class="cs_cta_left">
                <div class="cs_cta_thumb wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
                    <img src="{{ asset('assets/frontend/img/doctor2.jfif') }}" alt="Care4Kids Medical Team">
                </div>
                <div class="cs_cta_info">
                    <h2 class="cs_cta_title">Care4Kids Healthcare Network</h2>
                    <p class="cs_cta_subtitle">Certified pediatric specialists and partner hospitals dedicated to safe child immunizations.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_cta_shape"></div>
</section>

<section class="cs_about cs_style_1 position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="row align-items-center cs_gap_y_40">
            <div class="col-lg-6">
                <div class="cs_about_thumb">
                    <div class="cs_about_thumb_1">
                        <img src="{{ asset('assets/frontend/img/doctor.jfif') }}" alt="Care4Kids Vaccination">
                    </div>
                    <div class="cs_about_thumb_2">
                        <img src="{{ asset('assets/frontend/img/download(34).jfif') }}" alt="Child Healthcare">
                    </div>
                    <div class="cs_experience_box cs_center">
                        <p class="cs_experience_box_number">100%</p>
                        <p class="cs_experience_box_title">Verified EPI Schedules</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
                <div class="cs_about_content">
                    <div class="cs_section_heading cs_style_1">
                        <p class="cs_section_subtitle cs_accent_color">
                            <span class="cs_shape_left"></span> ABOUT CARE4KIDS
                        </p>
                        <h2 class="cs_section_title">Streamlining Childhood Vaccination Management</h2>
                    </div>
                    <p class="cs_about_text">Care4Kids is an all-in-one digital Vaccination Management System designed to help parents, pediatricians, and hospitals coordinate routine immunizations. We eliminate missed doses through automated tracking and instant digital record access.</p>
                    <div class="row cs_gap_y_30">
                        <div class="col-sm-6">
                            <div class="cs_iconbox cs_style_1">
                                <div class="cs_iconbox_head">
                                    <div class="cs_iconbox_icon cs_center">
                                        <img src="{{ asset('assets/frontend/img/icons/about_icon_1.png') }}" alt="Parent Support">
                                    </div>
                                    <h3 class="cs_iconbox_title m-0">Parent Portal</h3>
                                </div>
                                <p class="cs_iconbox_subtitle mb-0">Manage child profiles and appointment schedules effortlessly.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="cs_iconbox cs_style_1">
                                <div class="cs_iconbox_head">
                                    <div class="cs_iconbox_icon cs_center">
                                        <img src="{{ asset('assets/frontend/img/icons/about_icon_2.png') }}" alt="Hospital Network">
                                    </div>
                                    <h3 class="cs_iconbox_title m-0">Hospital Network</h3>
                                </div>
                                <p class="cs_iconbox_subtitle mb-0">Direct integration with accredited healthcare centers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cs_about_iconbox">
                        <div class="cs_about_iconbox_icon cs_center">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <p class="cs_about_iconbox_subtitle">Generate official vaccination cards and certificates upon dose completion. <a href="{{ route('Website_about') }}">LEARN MORE +</a></p>
                    </div>
                    <a class='cs_btn cs_style_1 cs_color_1' href='{{ route('Website_about') }}'>
                        <span>About Care4Kids</span>
                        <i class="fa-solid fa-angles-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_section_img"><img src="{{ asset('assets/frontend/img/about_section_img_1.png') }}" alt="Care4Kids Background"></div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>

  <div class="cs_counter_area cs_gray_bg">
    <div class="container">
      <div class="cs_counter_content cs_blue_bg">
        <div class="cs_counter_shape position-absolute">
          <img src="{{ asset('assets/frontend/img/counter_shape.png') }}" alt="Shape">
        </div>
        <div class="cs_counter_1_wrap">
          <div class="cs_counter cs_style_1">
            <div class="cs_counter_icon cs_center">
              <img src="{{ asset('assets/frontend/img/icons/counter_icon_1.png') }}" alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="1234" class="odometer"></span>+</div>
            <p class="cs_counter_title mb-0">Vaccines Given</p>
          </div>
          <div class="cs_counter cs_style_1">
            <div class="cs_counter_icon cs_center">
              <img src="{{asset('assets/frontend/img/icons/counter_icon_2.png')}}" alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="15" class="odometer"></span>K+</div>
            <p class="cs_counter_title mb-0">Happy Families</p>
          </div>
          <div class="cs_counter cs_style_1">
            <div class="cs_counter_icon cs_center">
              <img src="{{ asset('assets/frontend/img/icons/counter_icon_3.png ') }}" alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="98" class="odometer"></span>%</div>
            <p class="cs_counter_title mb-0">On-Time Vaccination</p>
          </div>
          <div class="cs_counter cs_style_1">
            <div class="cs_counter_icon cs_center">
              <img src="{{ asset('assets/frontend/img/icons/counter_icon_4.png') }}" alt="Icon">
            </div>
            <div class="cs_counter_nmber"><span data-count-to="10" class="odometer"></span>K+</div>
            <p class="cs_counter_title mb-0">Digital Records</p>
          </div>
        </div>
      </div>
    </div>
  </div>

 
  <section class="cs_gray_bg">
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <!-- Section Heading -->
      <div class="cs_section_heading cs_style_1 cs_type_1">
        <div class="cs_section_heading_left">
          <p class="cs_section_subtitle cs_accent_color wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <span class="cs_shape_left"></span>
            OUR VACCINATION SERVICES
          </p>
          <h2 class="cs_section_title">Complete Immunization Care for Every Child</h2>
        </div>
        <div class="cs_section_heading_right">
          We partner with leading pediatricians, vaccine manufacturers, and child health experts to provide safe,
          timely, and stress-free vaccination experiences for your little ones.
        </div>
      </div>

      <div class="cs_height_50 cs_height_lg_50"></div>

      <!-- Service Grid -->
      <div class="row cs_row_gap_30 cs_gap_y_30">
        <!-- 1. Newborn Vaccination -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_radius_15 cs_hover_layer_2">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="{{ asset('assets/frontend/img/icons/service_icon_1.png') }}" alt="Vaccination Icon">
              </div>
              <h3 class="iconbox_index">01</h3>
            </div>
            <h3 class="cs_iconbox_title">Newborn Immunization


            </h3>
            <p class="cs_iconbox_subtitle m-0">BCG, Hepatitis B, and Polio doses for healthy start</p>
          </div>
        </div>

        <!-- 2. Routine Vaccines -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="{{ asset('assets/frontend/img/icons/service_icon_2.png') }}" alt="Vaccination Icon">
              </div>
              <h3 class="iconbox_index">02</h3>
            </div>
            <h3 class="cs_iconbox_title"><a href='service-details.html'>Routine Child Vaccines</a></h3>
            <p class="cs_iconbox_subtitle m-0">DTaP, IPV, Hib, and PCV as per national schedule</p>
          </div>
        </div>

        <!-- 3. MMR & Varicella -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="{{ asset('assets/frontend/img/icons/service_icon_3.png') }}" alt="Vaccination Icon">
              </div>
              <h3 class="iconbox_index">03</h3>
            </div>
            <h3 class="cs_iconbox_title">MMR & Chickenpox</h3>
            <p class="cs_iconbox_subtitle m-0">Protection vs measles, mumps, rubella & varicella</p>
          </div>
        </div>

        <!-- 4. Booster Doses -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="{{ asset('assets/frontend/img/icons/service_icon_4.png') }}" alt="Vaccination Icon">
              </div>
              <h3 class="iconbox_index">04</h3>
            </div>
            <h3 class="cs_iconbox_title">Booster Shots</h3>
            <p class="cs_iconbox_subtitle m-0">DTaP, MMR, and Polio boosters for school-age kids</p>
          </div>
        </div>

        <!-- 5. Flu Vaccination -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="{{ asset('assets/frontend/img/icons/service_icon_5.png') }}" alt="Vaccination Icon">
              </div>
              <h3 class="iconbox_index">05</h3>
            </div>
            <h3 class="cs_iconbox_title">Flu (Influenza) Shots</h3>
            <p class="cs_iconbox_subtitle m-0">Annual flu shot for children 6 months and above</p>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="{{ asset('assets/frontend/img/icons/service_icon_6.png') }}" alt="Vaccination Icon">
              </div>
              <h3 class="iconbox_index">06</h3>
            </div>
            <h3 class="cs_iconbox_title">HPV Vaccine</h3>
            <p class="cs_iconbox_subtitle m-0">HPV protection for adolescents and young adults</p>
          </div>
        </div>

        
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="{{ asset('assets/frontend/img/icons/service_icon_7.png') }}" alt="Vaccination Icon">
              </div>
              <h3 class="iconbox_index">07</h3>
            </div>
            <h3 class="cs_iconbox_title">Travel Vaccines</h3>
            <p class="cs_iconbox_subtitle m-0">Yellow fever, typhoid, hepatitis A for travel needs</p>
          </div>
        </div>

       
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="cs_iconbox cs_style_2 cs_radius_15">
            <div class="cs_iconbox_overlay cs_bg_filed" data-src="assets/img/service_bg.jpg"></div>
            <div class="cs_iconbox_shape"></div>
            <div class="cs_iconbox_header d-flex align-items-center justify-content-between">
              <div class="cs_iconbox_icon cs_center">
                <img src="{{ asset('assets/frontend/img/icons/service_icon_8.png') }}" alt="Vaccination Icon">
              </div>
              <h3 class="iconbox_index">08</h3>
            </div>
            <h3 class="cs_iconbox_title">Catch-up Immunization</h3>
            <p class="cs_iconbox_subtitle m-0">Custom plans for missed or delayed vaccine doses</p>
          </div>
        </div>
      </div>


    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>


  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_accent_color wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <span class="cs_shape_left"></span>OUR VACCINATION EXPERTS<span class="cs_shape_right"></span>
        </p>
        <h2 class="cs_section_title">Meet Our Immunization <br>Specialists</h2>
      </div>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="cs_slider cs_style_1 cs_slider_gap_24">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
          data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
          data-md-slides="3" data-lg-slides="4" data-add-slides="4">
          <div class="cs_slider_wrapper">
            <div class="cs_slide">
              <div class="cs_team cs_style_1 cs_blue_bg">
                <div class="cs_team_shape cs_accent_bg"></div>
               
                  <img src="{{ asset('assets/frontend/img/doctore6.jpg') }}" alt="Dr. Sarah">
           
                <div class="cs_team_bio">
                  <h3 class="cs_team_title cs_extra_bold mb-0"><a href='doctor-details.html'>Dr. Ayesha Khan</a></h3>
                  <p class="cs_team_subtitle">Pediatric Vaccination Specialist</p>
                  <div class="cs_social_btns cs_style_1">
                    <a href="#" class="cs_center"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_team cs_style_1 cs_blue_bg">
                <div class="cs_team_shape cs_accent_bg"></div>
                <a class='cs_team_thumbnail' href='doctor-details.html'>
                  <img src="{{ asset('assets/frontend/img/doctore3.jpg') }}" alt="Dr. James">
                </a>
                <div class="cs_team_bio">
                  <h3 class="cs_team_title cs_extra_bold mb-0"><a href='doctor-details.html'>DDr. Muhammad Ali</a></h3>
                  <p class="cs_team_subtitle">Child Immunization Specialist</p>
                  <div class="cs_social_btns cs_style_1">
                    <a href="#" class="cs_center"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_team cs_style_1 cs_blue_bg">
                <div class="cs_team_shape cs_accent_bg"></div>
                <a class='cs_team_thumbnail' href='doctor-details.html'>
                  <img src="{{ asset('assets/frontend/img/doctore5.jpg') }}" alt="Dr. Maria">
                </a>
                <div class="cs_team_bio">
                  <h3 class="cs_team_title cs_extra_bold mb-0"><a href='doctor-details.html'>Dr. Fatima Zahra</a></h3>
                  <p class="cs_team_subtitle">Infant Vaccination Specialist</p>
                  <div class="cs_social_btns cs_style_1">
                    <a href="#" class="cs_center"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_team cs_style_1 cs_blue_bg">
                <div class="cs_team_shape cs_accent_bg"></div>
                <a class='cs_team_thumbnail' href='doctor-details.html'>
                  <img src="{{ asset('assets/frontend/img/doctore4.jpg') }}" alt="Dr. Robert">
                </a>
                <div class="cs_team_bio">
                  <h3 class="cs_team_title cs_extra_bold mb-0"><a href='doctor-details.html'>Dr. Hamza Ali</a></h3>
                  <p class="cs_team_subtitle">Pediatric Infectious Disease Specialist</p>
                  <div class="cs_social_btns cs_style_1">
                    <a href="#" class="cs_center"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_team cs_style_1 cs_blue_bg">
                <div class="cs_team_shape cs_accent_bg"></div>
                <a class='cs_team_thumbnail' href='doctor-details.html'>
                  <img src="{{ asset('assets/frontend/img/doctor7.jpg') }}" alt="Dr. Linda">
                </a>
                <div class="cs_team_bio">
                  <h3 class="cs_team_title cs_extra_bold mb-0"><a href='doctor-details.html'>Dr. Maham Shah</a></h3>
                  <p class="cs_team_subtitle">Vaccine Researcher</p>
                  <div class="cs_social_btns cs_style_1">
                    <a href="#" class="cs_center"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="cs_center"><i class="fa-brands fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_pagination cs_style_2"></div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
    <hr>
  </section>

  


  <section>
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_accent_color wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <span class="cs_shape_left"></span>OUR VACCINATION SERVICES<span class="cs_shape_right"></span>
        </p>
        <h2 class="cs_section_title">Vaccination Management<br>System Modules</h2>
      </div>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="cs_tabs">
        <ul class="cs_tab_links cs_style_1 cs_bold">
          <li class="active">
            <a href="#child_records">
              <span class="cs_tab_link_icon cs_center"><img
                  src="{{ asset('assets/frontend/img/icons/tab_link_icon_1.png') }}" alt="Icon"></span>
              <span>Child Records</span>
            </a>
          </li>
          <li>
            <a href="#vaccine_schedule">
              <span class="cs_tab_link_icon cs_center"><img
                  src="{{ asset('assets/frontend/img/icons/tab_link_icon_2.png') }}" alt="Icon"></span>
              <span>Vaccine Schedule</span>
            </a>
          </li>
          <li>
            <a href="#appointment_booking">
              <span class="cs_tab_link_icon cs_center"><img
                  src="{{ asset('assets/frontend/img/icons/tab_link_icon_3.png') }}" alt="Icon"></span>
              <span>Appointment Booking</span>
            </a>
          </li>
          <li>
            <a href="#reports">
              <span class="cs_tab_link_icon cs_center"><img
                  src="{{ asset('assets/frontend/img/icons/tab_link_icon_4.png') }}" alt="Icon"></span>
              <span>Reports</span>
            </a>
          </li>
        </ul>
        <div class="cs_height_50 cs_height_lg_50"></div>
        <div class="tab-content">
          <div id="child_records" class="cs_tab active">
            <div class="cs_card cs_style_2">
              <div class="row cs_gap_y_30 align-items-xl-center">
                <div class="col-lg-6">
                  <div class="cs_card_thumb cs_radius_5">
                    <img src="{{ asset('assets/frontend/img/pexels-pavel-danilyuk-5998475.jpg') }}" alt="Child Records">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="cs_card_text">
                    <h2 class="cs_card_title">Child Vaccination Records</h2>
                    <p class="cs_card_subtitle">Maintain complete digital records of each child's vaccination history.
                      Track doses, dates, and next due dates with our secure database system.</p>
                    <ul class="cs_list cs_style_1 cs_mp0">
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}" alt="Icon"></i>Store
                        child demographic details.</li>
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}" alt="Icon"></i>Track
                        vaccination history.</li>
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}" alt="Icon"></i>Generate
                        vaccination certificates.</li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="vaccine_schedule" class="cs_tab">
            <div class="cs_card cs_style_2">
              <div class="row cs_gap_y_30 align-items-xl-center">
                <div class="col-lg-6">
                  <div class="cs_card_thumb cs_radius_5">
                    <img src="{{ asset('assets/frontend/img/vaccineschedule.jpg') }}" alt="Vaccine Schedule">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="cs_card_text">
                    <h2 class="cs_card_title">Vaccination Schedule Management</h2>
                    <p class="cs_card_subtitle">Set up and manage immunization schedules based on national guidelines.
                      Automatically calculate next due dates and send reminders.</p>
                    <ul class="cs_list cs_style_1 cs_mp0">
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}"
                            alt="Icon"></i>Pre-defined vaccine schedules.</li>
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}"
                            alt="Icon"></i>Auto-calculate next dose dates.</li>
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}" alt="Icon"></i>Email and
                        SMS reminders.</li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="appointment_booking" class="cs_tab">
            <div class="cs_card cs_style_2">
              <div class="row cs_gap_y_30 align-items-xl-center">
                <div class="col-lg-6">
                  <div class="cs_card_thumb cs_radius_5">
                    <img src="{{ asset('assets/frontend//img/download(34).jfif') }}" alt="Appointment Booking">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="cs_card_text">
                    <h2 class="cs_card_title">Online Appointment Booking</h2>
                    <p class="cs_card_subtitle">Allow parents to book vaccination appointments online. Manage
                      availability, schedule, and track attendance with ease.</p>
                    <ul class="cs_list cs_style_1 cs_mp0">
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}" alt="Icon"></i>Book
                        appointments online.</li>
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}" alt="Icon"></i>Manage
                        doctor availability.</li>
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}" alt="Icon"></i>Send
                        appointment confirmations.</li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="reports" class="cs_tab">
            <div class="cs_card cs_style_2">
              <div class="row cs_gap_y_30 align-items-xl-center">
                <div class="col-lg-6">
                  <div class="cs_card_thumb cs_radius_5">
                    <img src="{{ asset('assets/frontend/img/thenormal.jfif') }}" alt="Reports">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="cs_card_text">
                    <h2 class="cs_card_title">Reports & Analytics</h2>
                    <p class="cs_card_subtitle">Generate comprehensive reports on vaccination coverage, upcoming due
                      dates, and overall clinic performance for better decision making.</p>
                    <ul class="cs_list cs_style_1 cs_mp0">
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}"
                            alt="Icon"></i>Vaccination coverage reports.</li>
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}" alt="Icon"></i>Due list
                        and pending reports.</li>
                      <li><i><img src="{{ asset('assets/frontend/img/icons/check_icon_1.png') }}" alt="Icon"></i>Export to
                        PDF/Excel.</li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
    <hr>
  </section>


<section class="cs_card cs_style_3 cs_gray_bg position-relative">
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
        <div class="row cs_gap_y_40">
            <div class="col-lg-6">
                <div class="cs_section_heading cs_style_1">
                    <p class="cs_section_subtitle cs_accent_color">
                        <span class="cs_shape_left"></span>BOOK VACCINATION
                    </p>
                    <h2 class="cs_section_title">Schedule Your Child's <br>Vaccination Today.</h2>
                </div>
                <div class="cs_height_25 cs_height_lg_25"></div>
                <form class="cs_contact_form row cs_gap_y_30 home_form_area">
                    <div class="col-md-6">
                        <input type="text" name="name" class="cs_form_field" placeholder="Parent/Guardian name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" class="cs_form_field" placeholder="Your email">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="subject" class="cs_form_field" placeholder="Child's name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="phone" class="cs_form_field" placeholder="Your phone">
                    </div>
                    <div class="col-lg-12">
                        <textarea rows="5" name="message" class="cs_form_field" placeholder="Vaccine type or request"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="cs_btn cs_style_1 cs_color_1">Book Appointment</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="cs_solution_thumbnail cs_bg_filed"
                    data-src="{{ asset('assets/frontend/img/pexels-pavel-danilyuk-7653101.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="cs_solution_shape position-absolute">
        <img src="assets/img/stethoscope.png" alt="Shape">
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>



@endsection