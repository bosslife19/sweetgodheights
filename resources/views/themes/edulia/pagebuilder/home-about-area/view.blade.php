 <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<section class="section_padding about_us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                @if (!empty(pagesetting('home_about_area_image')))
                    <div class="about_us_img">
                        <div class="about_us_img_inner">
                            <img src="public/images/school-building.jpeg"
                                alt="{{ __('edulia.Image') }}">
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6">
                <div class="about_us_inner about_us_home">
                    <h3>Why Us?</h3>
                    <p>At Sweet God Heights School, we don’t just educate minds—we nurture hearts, build character, and shape futures. As a leading secondary school committed to academic excellence and holistic development, we provide an environment where every student is valued, guided, and empowered to reach their God-given potential.

<br/><br/>✨ What Sets Us Apart?</p>
                    @if (!empty(pagesetting('home_about_area_items')))
                        <ul>
                            {{-- @foreach (pagesetting('home_about_area_items') as $item)
                                <li><i class="far fa-check"></i>{{ $item['item_heading'] }}</li>
                            @endforeach --}}
                            <li><i class="far fa-check"></i>Christ-Centered Learning</li>
                            <li><i class="far fa-check"></i>Academic Excellence</li>
                            <li><i class="far fa-check"></i>Safe and Supportive Environment</li>
                        </ul>
                    @endif
                    <div class="about_us_inner_call">
                        <a href="tel:+2348036505051">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.957" height="31.002"
                                viewBox="0 0 30.957 31.002">
                                <g id="phone-call" transform="translate(0.154 0.502)">
                                    <path id="Path_3909" data-name="Path 3909"
                                        d="M24.031,44.254a2.951,2.951,0,0,0-2.14-.981,3.051,3.051,0,0,0-2.165.975l-2,1.994c-.165-.089-.329-.171-.488-.253-.228-.114-.443-.222-.627-.336A21.745,21.745,0,0,1,11.4,40.9a12.829,12.829,0,0,1-1.71-2.7c.519-.475,1-.969,1.469-1.444.177-.177.355-.361.532-.538a2.9,2.9,0,0,0,0-4.381L9.963,30.116c-.2-.2-.4-.4-.589-.6-.38-.393-.779-.8-1.19-1.178a3,3,0,0,0-2.121-.931,3.1,3.1,0,0,0-2.153.931l-.013.013L1.744,30.521A4.632,4.632,0,0,0,.371,33.465a11.1,11.1,0,0,0,.81,4.7,27.262,27.262,0,0,0,4.844,8.079,29.8,29.8,0,0,0,9.922,7.769,15.458,15.458,0,0,0,5.572,1.646c.133.006.272.013.4.013A4.771,4.771,0,0,0,25.57,54.1c.006-.013.019-.019.025-.032A14.393,14.393,0,0,1,26.7,52.922c.272-.26.551-.532.823-.817a3.159,3.159,0,0,0,.956-2.191,3.043,3.043,0,0,0-.975-2.172ZM26.3,50.921c-.006,0-.006.006,0,0-.247.266-.5.507-.772.772A16.647,16.647,0,0,0,24.3,52.96a3.052,3.052,0,0,1-2.381,1.007c-.095,0-.2,0-.291-.006a13.733,13.733,0,0,1-4.939-1.482A28.125,28.125,0,0,1,7.348,45.16a25.7,25.7,0,0,1-4.559-7.592A9.04,9.04,0,0,1,2.08,33.6a2.906,2.906,0,0,1,.874-1.88l2.159-2.159a1.439,1.439,0,0,1,.962-.45A1.354,1.354,0,0,1,7,29.559l.019.019c.386.361.753.734,1.14,1.133.2.2.4.405.6.614l1.729,1.729a1.208,1.208,0,0,1,0,1.963c-.184.184-.361.367-.545.545-.532.545-1.038,1.051-1.589,1.545-.013.013-.025.019-.032.032a1.291,1.291,0,0,0-.329,1.437l.019.057a13.877,13.877,0,0,0,2.045,3.337l.006.006a23.239,23.239,0,0,0,5.622,5.116,8.646,8.646,0,0,0,.779.424c.228.114.443.222.627.336.025.013.051.032.076.044a1.372,1.372,0,0,0,.627.158,1.354,1.354,0,0,0,.962-.437l2.165-2.165a1.432,1.432,0,0,1,.956-.475,1.29,1.29,0,0,1,.912.462l.013.013,3.489,3.489A1.252,1.252,0,0,1,26.3,50.921Z"
                                        transform="translate(0 -25.67)" fill="#68ca65" stroke="#68ca65"
                                        stroke-width="1" />
                                    <path id="Path_3910" data-name="Path 3910"
                                        d="M245.648,87.622a8.152,8.152,0,0,1,6.638,6.638.85.85,0,0,0,.842.709,1.131,1.131,0,0,0,.146-.013.856.856,0,0,0,.7-.988,9.857,9.857,0,0,0-8.032-8.032.86.86,0,0,0-.988.7A.846.846,0,0,0,245.648,87.622Z"
                                        transform="translate(-229.115 -80.485)" fill="#68ca65" stroke="#68ca65"
                                        stroke-width="1" />
                                    <path id="Path_3911" data-name="Path 3911"
                                        d="M262.995,13.239A16.232,16.232,0,0,0,249.769.013.854.854,0,1,0,249.49,1.7a14.5,14.5,0,0,1,11.82,11.82.85.85,0,0,0,.842.709,1.131,1.131,0,0,0,.146-.013A.839.839,0,0,0,262.995,13.239Z"
                                        transform="translate(-232.707)" fill="#68ca65" stroke="#68ca65"
                                        stroke-width="1" />
                                </g>
                            </svg>+2348036505051</a>
                    </div>
                    @if(!empty(pagesetting('home_about_area_button')))
                        <a href="{{ pagesetting('home_about_area_button_link') }}" class="site_btn">{{ pagesetting('home_about_area_button') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-20 px-6 lg:px-20">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-4xl font-bold text-gray-800 mb-4" data-aos="fade-up">Facilities & Features</h2>
    <p class="text-gray-600 mb-12 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
      Our school offers a robust academic environment, cutting-edge facilities, and student-centered programs to nurture tomorrow’s leaders.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Facility Card Template -->
      <!-- Repeat with variations -->

      <!-- ICT Lab -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-2xl transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in">
        <div class="text-blue-600 mb-4">
          <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M9 17v-2a1 1 0 011-1h4a1 1 0 011 1v2m-6 0h6M4 6h16v10H4V6z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">Modern ICT Lab</h3>
        <p class="text-gray-600 mt-2">Hands-on access to up-to-date computers, coding tools, and internet research in a connected digital lab.</p>
      </div>

      <!-- Library -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-2xl transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="100">
        <div class="text-yellow-500 mb-4">
          <svg class="w-10 h-10 mx-auto" stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M12 20h9M12 4H3m9 16V4m0 0L9 7m3-3l3 3" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">Extensive Library</h3>
        <p class="text-gray-600 mt-2">A quiet retreat filled with academic texts, storybooks, and digital archives to inspire lifelong reading.</p>
      </div>

      <!-- Clinic -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-2xl transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="200">
        <div class="text-red-500 mb-4">
          <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M12 4v16m8-8H4" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">Health & Wellness Clinic</h3>
        <p class="text-gray-600 mt-2">On-site medical care with a professional nurse ensures prompt attention and student well-being.</p>
      </div>

      <!-- School Bus -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-2xl transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="300">
        <div class="text-cyan-500 mb-4">
          <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M4 17h16M4 12h16M4 7h16M6 17v1a1 1 0 001 1h10a1 1 0 001-1v-1" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">School Transport</h3>
        <p class="text-gray-600 mt-2">A safe, punctual, and organized bus system with routes covering major areas in the city.</p>
      </div>

      <!-- Trained Teachers -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-2xl transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="400">
        <div class="text-green-600 mb-4">
          <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">Qualified Teaching Staff</h3>
        <p class="text-gray-600 mt-2">Experienced and passionate educators committed to nurturing curiosity and excellence in students.</p>
      </div>

      <!-- Projectors -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-2xl transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="500">
        <div class="text-purple-600 mb-4">
          <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M4 6h16M4 10h16M4 14h16M4 18h16" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">Smart Classrooms</h3>
        <p class="text-gray-600 mt-2">Classrooms equipped with projectors and digital tools to support engaging, visual learning.</p>
      </div>

      <!-- WAEC Certified -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-2xl transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="600">
        <div class="text-indigo-600 mb-4">
          <svg class="w-10 h-10 mx-auto" stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M12 20l4-4H8l4 4zm0-16L8 8h8l-4-4z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">WAEC Accreditation</h3>
        <p class="text-gray-600 mt-2">Fully accredited WAEC center, preparing students to confidently sit for national and international exams.</p>
      </div>

      <!-- Additional: Sports Arena -->
      <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-2xl transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="700">
        <div class="text-orange-500 mb-4">
          <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M5 3v4m0 0h4M5 7l10 10m4 0v4m0 0h-4m4 0L9 7" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">Sports Arena</h3>
        <p class="text-gray-600 mt-2">Track fields, indoor courts, and organized sports activities to support healthy living and teamwork.</p>
      </div>

      <!-- You can continue adding more blocks for Counseling, Boarding, Art Studio, etc. -->

    </div>
  </div>
</section>
