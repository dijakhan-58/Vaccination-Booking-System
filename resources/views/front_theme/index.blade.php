@extends('front_theme._mastertheme')




@section('fornt_body')


  <!-- Start Hero Section -->
  <section class="position-relative">
    <div class="cs_hero_slider_thumb slick-slider">
      <!-- Slide 1: Vaccination Focus -->
      <div class="cs_hero_slider_thumb_item">
        <div class="cs_hero cs_style_1 cs_center cs_bg_filed"
          data-src="{{ asset('assets/frontend/img/hero_slider_2.jpg') }} ">

          <div class="container">
            <div class="cs_hero_text">
              <div class="cs_hero_text_in">
                <h1 class="cs_hero_title">Protect Their Health, Stay <span> Vaccinated.</span></h1>
                <p class="cs_hero_subtitle">Keep your child’s immunization schedule on track with easy appointment
                  booking, timely reminders, and secure digital records—all in one trusted platform.</p>
                <div class="cs_hero_info">
                  <h3>Complete Vaccination Care.</h3>
                  <p>Book appointments and manage your <br>child’s vaccination history with ease.</p>
                </div>
                <div class="cs_hero_btns">
                  <a class='cs_btn cs_style_1 cs_color_1' href='contact.html'>
                    <span>Book Vaccination</span>
                    <i class="fa-solid fa-angles-right"></i>
                  </a>

                </div>
              </div>
              <div class="cs_hero_shape">
                <img src="{{ asset('assets/frontend/img/icons/hero_icon.png') }} " alt="Icon" class="cs_spinner_img">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 2: Childhood Immunization -->
      <div class="cs_hero_slider_thumb_item">
        <div class="cs_hero cs_style_1 cs_center cs_bg_filed"
          data-src="{{ asset('assets/frontend/img/pexels-pavel-danilyuk-5998475.jpg') }} ">
          <div class="container">
            <div class="cs_hero_text">
              <div class="cs_hero_text_in">
                <h1 class="cs_hero_title">Childhood Immunization <br><span>Made Simple.</span></h1>
                <p class="cs_hero_subtitle">Stay ahead of preventable diseases with our comprehensive vaccination
                  scheduler, expert guidance, and instant access to your child's immunization records.</p>
                <div class="cs_hero_info">
                  <h3>Vaccination Reminders.</h3>
                  <p>Get alerts for upcoming doses and boosters.</p>
                </div>
                <div class="cs_hero_btns">
                  <a class='cs_btn cs_style_1 cs_color_1' href='contact.html'>
                    <span>Explore Vaccines</span>
                    <i class="fa-solid fa-angles-right"></i>
                  </a>

                </div>
              </div>
              <div class="cs_hero_shape">
                <img src="{{ asset('assets/frontend/img/icons/hero_icon.png') }}" alt="Icon" class="cs_spinner_img">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 3: Travel Vaccines -->
      <div class="cs_hero_slider_thumb_item">
        <div class="cs_hero cs_style_1 cs_center cs_bg_filed" data-src="{{ asset('assets/frontend/img/doctor.jfif') }}">
          <div class="container">
            <div class="cs_hero_text">
              <div class="cs_hero_text_in">
                <h1 class="cs_hero_title">Travel Vaccines & <span>Health Certificates.</span></h1>
                <p class="cs_hero_subtitle">Prepare for your next journey with recommended travel vaccinations, digital
                  yellow fever certificates, and personalized health advice for global travel.</p>
                <div class="cs_hero_info">
                  <h3>Travel Health.</h3>
                  <p>Get vaccinated for your destination.</p>
                </div>

                <div class="cs_hero_btns">
                  <a class='cs_btn cs_style_1 cs_color_1' href='#'>
                    <span>View Schedule</span>
                    <i class="fa-solid fa-angles-right"></i>
                  </a>

                </div>
              </div>
              <div class="cs_hero_shape">
                <img src="{{ asset('assets/frontend/img/icons/hero_icon.png') }}" alt="Icon" class="cs_spinner_img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Thumbnail Navigation -->
    <div class="cs_hero_slider_nav slick-slider">
      <div class="cs_hero_slider_thumb_mini"><img src="{{ asset('assets/frontend/img/hero_slider_2.jpg') }}"
          alt="Vaccination"></div>
      <div class="cs_hero_slider_thumb_mini"><img
          src="{{ asset('assets/frontend/img/pexels-pavel-danilyuk-5998475.jpg') }}" alt="Child"></div>
      <div class="cs_hero_slider_thumb_mini"><img src="{{ asset('assets/frontend/img/doctor.jfif') }}" alt="Travel"></div>
      <div class="cs_hero_slider_thumb_mini"><img src="{{ asset('assets/frontend/img/hero_slider_2.jpg') }}"
          alt="Vaccination"></div>
      <div class="cs_hero_slider_thumb_mini"><img src="{{asset('assets/frontend/img/pexels-pavel-danilyuk-5998475.jpg')}}"
          alt="Child">
      </div>
      <div class="cs_hero_slider_thumb_mini"><img src="{{ asset('assets/frontend/img/doctor.jfif') }}" alt="Travel"></div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cs_cta cs_style_1 cs_blue_bg position-relative overflow-hidden">
    <div class="container">
      <div class="cs_cta_in">
        <div class="cs_cta_left">
          <div class="cs_cta_thumb wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <img src="{{ asset('assets/frontend/img/doctor2.jfif') }}" alt="Vaccination Team">
          </div>
          <div class="cs_cta_info">
            <h2 class="cs_cta_title">Meet Our Vaccination Specialists.</h2>
            <p class="cs_cta_subtitle">Expert care for every stage of immunization.</p>
          </div>
        </div>

      </div>
    </div>
    <div class="cs_cta_shape"></div>
  </section>

  <!-- About Section -->
  <section class="cs_about cs_style_1 position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="row align-items-center cs_gap_y_40">
        <div class="col-lg-6">
          <div class="cs_about_thumb">
            <div class="cs_about_thumb_1">
              <img src="{{ asset('assets/frontend/img/doctor.jfif') }}" alt="Vaccination">

            </div>
            <div class="cs_about_thumb_2">
              <img src="{{ asset('assets/frontend/img/download(34).jfif') }}" alt="Immunization">

            </div>
            <div class="cs_experience_box cs_center">
              <p class="cs_experience_box_number">15+</p>
              <p class="cs_experience_box_title">Years of Immunization Care</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <div class="cs_about_content">
            <div class="cs_section_heading cs_style_1">
              <p class="cs_section_subtitle cs_accent_color">
                <span class="cs_shape_left"></span> ABOUT OUR VACCINATION SERVICES
              </p>
              <h2 class="cs_section_title">Trusted Immunization for Every Age.</h2>
            </div>
            <p class="cs_about_text">We are proud to partner with leading health organizations to provide safe, effective,
              and up-to-date vaccinations for children, travelers, and adults. Your health is our priority.</p>
            <div class="row cs_gap_y_30">
              <div class="col-sm-6">
                <div class="cs_iconbox cs_style_1">
                  <div class="cs_iconbox_head">
                    <div class="cs_iconbox_icon cs_center">
                      <img src="{{ asset('assets/frontend/img/icons/about_icon_1.png') }}" alt="Support">
                    </div>
                    <h3 class="cs_iconbox_title m-0">Client Support</h3>
                  </div>
                  <p class="cs_iconbox_subtitle mb-0">We answer all your vaccination questions.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="cs_iconbox cs_style_1">
                  <div class="cs_iconbox_head">
                    <div class="cs_iconbox_icon cs_center">
                      <img src="{{ asset('assets/frontend/img/icons/about_icon_2.png') }}" alt="Doctor">
                    </div>
                    <h3 class="cs_iconbox_title m-0">Vaccine Experts</h3>
                  </div>
                  <p class="cs_iconbox_subtitle mb-0">Our doctors specialize in immunization.</p>
                </div>
              </div>
            </div>
            <div class="cs_about_iconbox">
              <div class="cs_about_iconbox_icon cs_center">
                <i class="fa-regular fa-circle-check"></i>
              </div>
              <p class="cs_about_iconbox_subtitle">We provide comprehensive vaccination records and travel health
                certificates. <a href="#">LEARN MORE +</a></p>
            </div>
            <a class='cs_btn cs_style_1 cs_color_1' href='about.html'>
              <span>About More</span>
              <i class="fa-solid fa-angles-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_section_img"><img src="{{ asset('assets/frontend/img/about_section_img_1.png') }}" alt=""></div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>

  <!-- Counter -->
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

  <!-- Start Service Section -->
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
            <h3 class="cs_iconbox_title"><a href='service-details.html'>Newborn Immunization</a></h3>
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
            <h3 class="cs_iconbox_title"><a href='service-details.html'>MMR & Chickenpox</a></h3>
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
            <h3 class="cs_iconbox_title"><a href='service-details.html'>Booster Shots</a></h3>
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
            <h3 class="cs_iconbox_title"><a href='service-details.html'>Flu (Influenza) Shots</a></h3>
            <p class="cs_iconbox_subtitle m-0">Annual flu shot for children 6 months and above</p>
          </div>
        </div>

        <!-- 6. HPV Vaccination -->
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
            <h3 class="cs_iconbox_title"><a href='service-details.html'>HPV Vaccine</a></h3>
            <p class="cs_iconbox_subtitle m-0">HPV protection for adolescents and young adults</p>
          </div>
        </div>

        <!-- 7. Travel Vaccines -->
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
            <h3 class="cs_iconbox_title"><a href='service-details.html'>Travel Vaccines</a></h3>
            <p class="cs_iconbox_subtitle m-0">Yellow fever, typhoid, hepatitis A for travel needs</p>
          </div>
        </div>

        <!-- 8. Catch-up Schedules -->
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
            <h3 class="cs_iconbox_title"><a href='service-details.html'>Catch-up Immunization</a></h3>
            <p class="cs_iconbox_subtitle m-0">Custom plans for missed or delayed vaccine doses</p>
          </div>
        </div>
      </div>


    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>

  <!-- Team Section -->
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
                <a class='cs_team_thumbnail' href='doctor-details.html'>
                  <img src="{{ asset('assets/frontend/img/doctore6.jpg') }}" alt="Dr. Sarah">
                </a>
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

  <!-- Why Choose Us Section -->
  <section class="cs_gray_bg cs_bg_filed" data-src="{{ asset('assets/frontend/img/service_bg_2.jpg') }}">
    <div class="cs_height_110 cs_height_lg_70"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle cs_accent_color wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
              <span class="cs_shape_left"></span> WHY CHOOSE US
            </p>
            <h2 class="cs_section_title">Your Trusted Partner in <br>Immunization.</h2>
          </div>
          <div class="cs_height_50 cs_height_lg_50"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-xxl-7 col-xl-8 col-lg-9">
          <div class="cs_service_wrapper">
            <div class="cs_service_list">
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="{{ asset('assets/frontend/img/icons/service_icon_9.png') }}" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Expert Vaccine Guidance</h3>
                  <p class="cs_iconbox_subtitle">Evidence-based advice for all ages.</p>
                </div>
              </div>
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="{{ asset('assets/frontend/img/icons/service_icon_10.png') }}" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Convenient Booking</h3>
                  <p class="cs_iconbox_subtitle">Schedule appointments online in minutes.</p>
                </div>
              </div>
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="{{ asset('assets/frontend/img/icons/service_icon_11.png') }}" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Digital Records Access</h3>
                  <p class="cs_iconbox_subtitle">Your vaccination history, always at hand.</p>
                </div>
              </div>
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="{{ asset('assets/frontend/img/icons/service_icon_12.png') }}" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Certified Vaccines</h3>
                  <p class="cs_iconbox_subtitle">Only WHO-approved and safe vaccines.</p>
                </div>
              </div>
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="{{ asset('assets/frontend/img/icons/service_icon_13.png') }}" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Qualified Immunizers</h3>
                  <p class="cs_iconbox_subtitle">Trained nurses and doctors.</p>
                </div>
              </div>
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center cs_radius_5">
                  <img src="{{ asset('assets/frontend/img/icons/service_icon_14.png') }}" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title">Affordable Plans</h3>
                  <p class="cs_iconbox_subtitle">Quality care at accessible prices.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>

  <!-- Medical Tab Section (Vaccination Focus) -->
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

<!-- Appointment/Contact Section -->
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