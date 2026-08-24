@extends('front_theme._mastertheme')

@section('fornt_body')


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
            <span style="color: #8eb69b; font-weight: 600; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Hospital</span>
          </div>
        </div>
      </div>
    </div>
  </section>


 <section class="cs_search_filter">
    <div class="cs_height_80 cs_height_lg_50"></div>
    <div class="container">
      <form action="{{ route('Website_hospital') }}" method="GET" class="cs_search_filter_wrapper">
        <div class="row cs_gap_y_20">
          <div class="col-lg-4">
            <div class="cs_search_box">
              <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search by hospital name, city or area..."
                class="cs_search_input">
              <i class="fa-solid fa-search"></i>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <select name="city" class="cs_select_box">
              <option value="">All Cities</option>
              @foreach ($cities as $city)
                <option value="{{ $city }}" {{ request('city') === $city ? 'selected' : '' }}>
                  {{ $city }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="col-lg-2 col-md-4">
            <button type="submit" class="cs_btn cs_style_1 cs_color_1 w-100">
              <span>Search</span>
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="cs_height_80 cs_height_lg_50"></div>
  </section>

  <section class="cs_hospital_list">
    <div class="container">
      <div class="row cs_gap_y_30">

        @forelse ($hospitals as $hospital)
          <div class="col-lg-6">
            <div class="cs_hospital_card">
              <div class="cs_hospital_card_inner">
                <div class="row">
                  <div class="col-md-4">
                    <div class="cs_hospital_img">
                      <img
                        src="{{ $hospital->profile_img ? asset('storage/' . $hospital->profile_img) : asset('assets/frontend/img/about_img_6.png') }}"
                        alt="{{ $hospital->name }}">
                     
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="cs_hospital_info">
                      <div class="cs_hospital_header">
                        <h4>{{ $hospital->name }}</h4>
                        <span class="cs_verified_badge">
                          <i class="fa-solid fa-circle-check"></i> Verified
                        </span>
                      </div>

                      <div class="cs_hospital_meta">
                        <span class="cs_meta_item">
                          <i class="fa-solid fa-location-dot"></i> {{ $hospital->city }}
                        </span>
                        <span class="cs_meta_item">
                          <i class="fa-solid fa-layer-group"></i> {{ $hospital->floors }} Floors
                        </span>
                      </div>

                      <div class="cs_hospital_address">
                        {{ $hospital->address }}
                      </div>

                      <div class="cs_hospital_footer">
                        <div class="cs_vaccine_stats">
                          <span><i class="fa-regular fa-clock"></i> {{ $hospital->timings_slot }}</span>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center py-5">
            <p class="cs_body_color mb-0">No hospitals available at the moment. Please check back soon.</p>
          </div>
        @endforelse

      </div>
    </div>
    <div class="cs_height_110 cs_height_lg_80"></div>
  </section>


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