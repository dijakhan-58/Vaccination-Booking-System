@extends('front_theme._mastertheme')

@section('fornt_body')

  <!-- Page Heading -->
    <section class="cs_page_heading cs_bg_filed cs_center"
      data-src="{{ asset('assets/frontend/img//hospiatl4.jfif') }}"
      style="padding: 120px 0; position: relative; background-size: cover; background-position: center;">

      <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(5, 31, 32, 0.3) 0%, rgba(5, 31, 32, 0.6) 100%);">
      </div>

      <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
          <div class="col-lg-12 text-center">
        

            <h2 class="cs_section_title"
              style="color: #ffffff; font-size: 52px; font-weight: 700; line-height: 1.2; margin-bottom: 20px; text-shadow: 0 4px 30px rgba(0,0,0,0.4);">
            Find Vaccination Centers
            </h2>

            <div style="display: flex; align-items: center; justify-content: center; gap: 12px; font-size: 16px;">
              <a href="{{ url('/index') }}"
                style="color: rgba(255,255,255,0.9); text-decoration: none; transition: 0.3s; font-weight: 400;">
                <i class="fa-solid fa-house" style="font-size: 14px;"></i> Home
              </a>
              <span style="color: rgba(255,255,255,0.5); font-weight: 300;">/</span>
              <span style="color: #8eb69b; font-weight: 600; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Hospiatl</span>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Search & Filter Section -->
  <section class="cs_search_filter">
    <div class="cs_height_80 cs_height_lg_50"></div>
    <div class="container">
      <div class="cs_search_filter_wrapper">
        <div class="row cs_gap_y_20">
          <div class="col-lg-4">
            <div class="cs_search_box">
              <input type="text" placeholder="Search by hospital name, city or area..." class="cs_search_input">
              <i class="fa-solid fa-search"></i>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <select class="cs_select_box">
              <option value="">All Cities</option>
              <option>New York</option>
              <option>Los Angeles</option>
              <option>Chicago</option>
              <option>Houston</option>
              <option>Miami</option>
            </select>
          </div>
          <div class="col-lg-2 col-md-4">
            <select class="cs_select_box">
              <option value="">All Vaccines</option>
              <option>BCG</option>
              <option>Hepatitis B</option>
              <option>DPT</option>
              <option>Polio</option>
              <option>Measles</option>
              <option>MMR</option>
            </select>
          </div>
          <div class="col-lg-2 col-md-4">
            <select class="cs_select_box">
              <option value="">Sort By</option>
              <option>Nearest First</option>
              <option>Highest Rating</option>
              <option>Most Vaccines</option>
              <option>Most Reviews</option>
            </select>
          </div>
          <div class="col-lg-2">
            <button class="cs_btn cs_style_1 cs_color_1 w-100">
              <span>Search</span>
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_80 cs_height_lg_50"></div>
  </section>

  <!-- Hospital List Section -->
  <section class="cs_hospital_list">
    <div class="container">
      <div class="row cs_gap_y_30">

        <!-- Hospital Card 1 -->
        <div class="col-lg-6">
          <div class="cs_hospital_card">
            <div class="cs_hospital_card_inner">
              <div class="row">
                <div class="col-md-4">
                  <div class="cs_hospital_img">
                    <img src="{{ asset('assets/frontend/img/about_img_6.png') }}" alt="City Medical Center">
                    <div class="cs_hospital_status cs_active">
                      <i class="fa-solid fa-circle"></i> Open Now
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="cs_hospital_info">
                    <div class="cs_hospital_header">
                      <h4>City Medical Center</h4>
                      <span class="cs_verified_badge">
                        <i class="fa-solid fa-circle-check"></i> Verified
                      </span>
                    </div>

                    <div class="cs_hospital_meta">
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-location-dot"></i> 2.5 km away
                      </span>
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-star" style="color: #f39c12;"></i> 4.8 (120 reviews)
                      </span>
                    </div>

                    <div class="cs_hospital_address">
                      123 Main Street, New York, NY 10001
                    </div>

                    <div class="cs_hospital_services">
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> BCG</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> Hepatitis B</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> DPT</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> Polio</span>
                      <span class="cs_service_tag cs_more">+4 more</span>
                    </div>

                    <div class="cs_hospital_footer">
                      <div class="cs_vaccine_stats">
                        <span><i class="fa-regular fa-clock"></i> 8:00 AM - 8:00 PM</span>
                        <span><i class="fa-solid fa-syringe"></i> 5,230 Vaccines</span>
                      </div>
                      <div class="cs_hospital_actions">
                        <a href="#" class="cs_btn_link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hospital Card 2 -->
        <div class="col-lg-6">
          <div class="cs_hospital_card">
            <div class="cs_hospital_card_inner">
              <div class="row">
                <div class="col-md-4">
                  <div class="cs_hospital_img">
                    <img src="{{ asset('assets/frontend/img/about_img_5.jpg') }}" alt="HealthCare Plus">
                    <div class="cs_hospital_status cs_active">
                      <i class="fa-solid fa-circle"></i> Open Now
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="cs_hospital_info">
                    <div class="cs_hospital_header">
                      <h4>HealthCare Plus</h4>
                      <span class="cs_verified_badge">
                        <i class="fa-solid fa-circle-check"></i> Verified
                      </span>
                    </div>

                    <div class="cs_hospital_meta">
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-location-dot"></i> 5.8 km away
                      </span>
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-star" style="color: #f39c12;"></i> 4.9 (95 reviews)
                      </span>
                    </div>

                    <div class="cs_hospital_address">
                      456 Health Avenue, Los Angeles, CA 90001
                    </div>

                    <div class="cs_hospital_services">
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> Measles</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> MMR</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> Hepatitis A</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> DPT</span>
                      <span class="cs_service_tag cs_more">+3 more</span>
                    </div>

                    <div class="cs_hospital_footer">
                      <div class="cs_vaccine_stats">
                        <span><i class="fa-regular fa-clock"></i> 24/7 Open</span>
                        <span><i class="fa-solid fa-syringe"></i> 3,450 Vaccines</span>
                      </div>
                      <div class="cs_hospital_actions">
                        <a href="#" class="cs_btn_link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hospital Card 3 -->
        <div class="col-lg-6">
          <div class="cs_hospital_card">
            <div class="cs_hospital_card_inner">
              <div class="row">
                <div class="col-md-4">
                  <div class="cs_hospital_img">
                    <img src="{{ asset('assets/frontend/img/contact.png') }}" alt="Children's Clinic">
                    <div class="cs_hospital_status cs_closed">
                      <i class="fa-solid fa-circle"></i> Closed Now
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="cs_hospital_info">
                    <div class="cs_hospital_header">
                      <h4>Children's Clinic</h4>
                      <span class="cs_verified_badge">
                        <i class="fa-solid fa-circle-check"></i> Verified
                      </span>
                    </div>

                    <div class="cs_hospital_meta">
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-location-dot"></i> 3.2 km away
                      </span>
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-star" style="color: #f39c12;"></i> 4.7 (78 reviews)
                      </span>
                    </div>

                    <div class="cs_hospital_address">
                      789 Pediatric Street, Chicago, IL 60601
                    </div>

                    <div class="cs_hospital_services">
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> BCG</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> Polio</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> Rotavirus</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> Hib</span>
                    </div>

                    <div class="cs_hospital_footer">
                      <div class="cs_vaccine_stats">
                        <span><i class="fa-regular fa-clock"></i> 9:00 AM - 6:00 PM</span>
                        <span><i class="fa-solid fa-syringe"></i> 2,890 Vaccines</span>
                      </div>
                      <div class="cs_hospital_actions">
                        <a href="#" class="cs_btn_link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hospital Card 4 -->
        <div class="col-lg-6">
          <div class="cs_hospital_card">
            <div class="cs_hospital_card_inner">
              <div class="row">
                <div class="col-md-4">
                  <div class="cs_hospital_img">
                    <img src="{{ asset('assets/frontend/img/about_img_7.jpg') }}" alt="MediCare Hospital">
                    <div class="cs_hospital_status cs_active">
                      <i class="fa-solid fa-circle"></i> Open Now
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="cs_hospital_info">
                    <div class="cs_hospital_header">
                      <h4>MediCare Hospital</h4>
                      <span class="cs_verified_badge">
                        <i class="fa-solid fa-circle-check"></i> Verified
                      </span>
                    </div>

                    <div class="cs_hospital_meta">
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-location-dot"></i> 1.8 km away
                      </span>
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-star" style="color: #f39c12;"></i> 4.6 (150 reviews)
                      </span>
                    </div>

                    <div class="cs_hospital_address">
                      321 Medical Plaza, Houston, TX 77001
                    </div>

                    <div class="cs_hospital_services">
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> All Vaccines</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> COVID-19</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> Flu</span>
                      <span class="cs_service_tag cs_more">+6 more</span>
                    </div>

                    <div class="cs_hospital_footer">
                      <div class="cs_vaccine_stats">
                        <span><i class="fa-regular fa-clock"></i> 7:00 AM - 10:00 PM</span>
                        <span><i class="fa-solid fa-syringe"></i> 7,120 Vaccines</span>
                      </div>
                      <div class="cs_hospital_actions">
                        <a href="#" class="cs_btn_link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hospital Card 5 -->
        <div class="col-lg-6">
          <div class="cs_hospital_card">
            <div class="cs_hospital_card_inner">
              <div class="row">
                <div class="col-md-4">
                  <div class="cs_hospital_img">
                    <img src="{{ asset('assets/frontend/img/about_img_3.png') }}" alt="Family Health Center">
                    <div class="cs_hospital_status cs_closed">
                      <i class="fa-solid fa-circle"></i> Closed Now
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="cs_hospital_info">
                    <div class="cs_hospital_header">
                      <h4>Family Health Center</h4>
                      <span class="cs_verified_badge">
                        <i class="fa-solid fa-circle-check"></i> Verified
                      </span>
                    </div>

                    <div class="cs_hospital_meta">
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-location-dot"></i> 4.5 km away
                      </span>
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-star" style="color: #f39c12;"></i> 4.5 (65 reviews)
                      </span>
                    </div>

                    <div class="cs_hospital_address">
                      654 Family Lane, Miami, FL 33101
                    </div>

                    <div class="cs_hospital_services">
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> MMR</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> Varicella</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> HPV</span>
                    </div>

                    <div class="cs_hospital_footer">
                      <div class="cs_vaccine_stats">
                        <span><i class="fa-regular fa-clock"></i> 8:30 AM - 5:30 PM</span>
                        <span><i class="fa-solid fa-syringe"></i> 1,560 Vaccines</span>
                      </div>
                      <div class="cs_hospital_actions">
                        <a href="#" class="cs_btn_link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hospital Card 6 -->
        <div class="col-lg-6">
          <div class="cs_hospital_card">
            <div class="cs_hospital_card_inner">
              <div class="row">
                <div class="col-md-4">
                  <div class="cs_hospital_img">
                    <img src="{{ asset('assets/frontend/img/about_img_2.jpg') }}" alt="Pediatric Care">
                    <div class="cs_hospital_status cs_active">
                      <i class="fa-solid fa-circle"></i> Open Now
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="cs_hospital_info">
                    <div class="cs_hospital_header">
                      <h4>Pediatric Care Center</h4>
                      <span class="cs_verified_badge">
                        <i class="fa-solid fa-circle-check"></i> Verified
                      </span>
                    </div>

                    <div class="cs_hospital_meta">
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-location-dot"></i> 6.2 km away
                      </span>
                      <span class="cs_meta_item">
                        <i class="fa-solid fa-star" style="color: #f39c12;"></i> 4.9 (210 reviews)
                      </span>
                    </div>

                    <div class="cs_hospital_address">
                      987 Child Street, Boston, MA 02101
                    </div>

                    <div class="cs_hospital_services">
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> All Pediatric</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> BCG</span>
                      <span class="cs_service_tag"><i class="fa-solid fa-syringe"></i> Hepatitis B</span>
                      <span class="cs_service_tag cs_more">+8 more</span>
                    </div>

                    <div class="cs_hospital_footer">
                      <div class="cs_vaccine_stats">
                        <span><i class="fa-regular fa-clock"></i> 24/7 Open</span>
                        <span><i class="fa-solid fa-syringe"></i> 8,450 Vaccines</span>
                      </div>
                      <div class="cs_hospital_actions">
                        <a href="#" class="cs_btn_link">View Details <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Pagination -->
      {{-- <div class="cs_height_50 cs_height_lg_30"></div> --}}
      {{-- <div class="cs_pagination_wrapper">
        <nav aria-label="Page navigation">
          <ul class="cs_pagination">
            <li class="cs_page_item cs_prev"><a href="#"><i class="fa-solid fa-arrow-left"></i></a></li>
            <li class="cs_page_item cs_active"><a href="#">1</a></li>
            <li class="cs_page_item"><a href="#">2</a></li>
            <li class="cs_page_item"><a href="#">3</a></li>
            <li class="cs_page_item"><a href="#">4</a></li>
            <li class="cs_page_item cs_next"><a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
          </ul>
        </nav>
      </div> --}}
    </div>
    <div class="cs_height_110 cs_height_lg_80"></div>
  </section>

  <!-- Quick Booking CTA -->
  <section class="cs_quick_booking cs_blue_bg m-5">
    <div class="cs_height_80 cs_height_lg_50"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="cs_booking_text">
            <h3 class="cs_white_color">Can't find a suitable center?</h3>
            <p class="cs_white_color">We'll help you find the best vaccination center near you</p>
          </div>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a class="cs_btn cs_style_1 cs_color_3" href="{{ url('/contact') }}">
            <span>Contact Support</span>
            <i class="fa-solid fa-headset"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="cs_height_80 cs_height_lg_50"></div>
  </section>

@endsection

