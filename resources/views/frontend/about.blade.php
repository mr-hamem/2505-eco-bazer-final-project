@extends('layouts.frontendLayout')

@section('title')
About us
@endsection

@section('content')
<main>
      <section>
        <div class="smallNav">
          <div class="container">
            <div class="row">
              <ul class="d-flex">
                <li>
                  <a href="./index.html"
                    ><iconify-icon
                      icon="material-symbols-light:home-outline"
                      width="24"
                      height="24"
                    ></iconify-icon
                  ></a>
                </li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Vagetables</a></li>
                <li><a href="#" class="active">Chinese Cabbage</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    

    <section id="aboutOne">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 aboutLeft">
            <h2>100% Trusted Organic Food Store</h2>
            <p>
              Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi,
              laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit.
              Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan.
              Donec a eros non massa vulputate ornare. Vivamus ornare commodo
              ante, at commodo felis congue vitae.
            </p>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 aboutRight">
            <img class="img-fluid" src="{{ asset('frontend/img/aboutimg.png') }}" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section id="aboutTwo" class="about-section position-relative overflow-hidden">
  <!-- Desktop / Large Screen-er background image (Mobile-e d-none hoye thakbe) -->
  <div class="about-img-bg d-none d-lg-block">
    <img src="{{ asset('frontend/img/aboutimg2.png') }}" alt="About Us" />
  </div>

  <div class="container">
    <div class="row align-items-center">
      
      <!-- Mobile / Small Screen-er image (Desktop-e d-lg-none diye hide kora) -->
      <div class="col-12 d-lg-none mb-4">
        <div class="about-img-mobile">
          <img src="./img/aboutimg2.png" class="img-fluid rounded" alt="About Us" />
        </div>
      </div>

      <!-- Right Side Content Column -->
      <div class="col-lg-6 offset-lg-6 aboutLeft ps-lg-4">
        <h2>100% Trusted Organic Food Store</h2>
        <p>
          Pellentesque a ante vulputate leo porttitor luctus sed eget eros. Nulla et rhoncus neque. Duis non diam eget est luctus tincidunt a a mi. Nulla eu eros consequat tortor tincidunt feugiat. 
        </p>
        
        <!-- Feature Items Grid -->
        <div class="row g-4 mt-2">
          
          <div class="col-md-6">
            <div class="feature-card d-flex align-items-center">
              <div class="icon-box me-3">
                <i class="bi bi-flower1"></i>
              </div>
              <div>
                <h5 class="feature-title mb-1">100% Organic food</h5>
                <p class="feature-desc mb-0">100% healthy & Fresh food.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card d-flex align-items-center">
              <div class="icon-box me-3">
                <i class="bi bi-headset"></i>
              </div>
              <div>
                <h5 class="feature-title mb-1">Great Support 24/7</h5>
                <p class="feature-desc mb-0">Instant access to Contact</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card d-flex align-items-center">
              <div class="icon-box me-3">
                <i class="bi bi-star"></i>
              </div>
              <div>
                <h5 class="feature-title mb-1">Customer Feedback</h5>
                <p class="feature-desc mb-0">Our happy customer</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card d-flex align-items-center">
              <div class="icon-box me-3">
                <i class="bi bi-bag-check"></i>
              </div>
              <div>
                <h5 class="feature-title mb-1">100% Sucure Payment</h5>
                <p class="feature-desc mb-0">We ensure your money is save</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card d-flex align-items-center">
              <div class="icon-box me-3">
                <i class="bi bi-truck"></i>
              </div>
              <div>
                <h5 class="feature-title mb-1">Free Shipping</h5>
                <p class="feature-desc mb-0">Free shipping with discount</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card d-flex align-items-center">
              <div class="icon-box me-3">
                <i class="bi bi-box-seam"></i>
              </div>
              <div>
                <h5 class="feature-title mb-1">100% Organic Food</h5>
                <p class="feature-desc mb-0">100% healthy & Fresh food.</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<section id="aboutOne">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 aboutLeft">
            <h2>We Delivered, You Enjoy Your Order.</h2>
            <p>
              Ut suscipit egestas suscipit. Sed posuere pellentesque nunc, ultrices consectetur velit dapibus eu. Mauris sollicitudin dignissim diam, ac mattis eros accumsan rhoncus. Curabitur auctor bibendum nunc eget elementum.
            </p>
            <ul class="custom-list">
        <li>
            <span class="check-icon"><i class="bi bi-check-lg"></i></span>
            Sed in metus pellentesque.
        </li>
        <li>
            <span class="check-icon"><i class="bi bi-check-lg"></i></span>
            Fusce et ex commodo, aliquam nulla efficitur, tempus lorem.
        </li>
        <li>
            <span class="check-icon"><i class="bi bi-check-lg"></i></span>
            Maecenas ut nunc fringilla erat varius.
        </li>
    </ul>
    <a href="#">
                    <button>Shop now<iconify-icon icon="si:arrow-right-duotone"></iconify-icon></button>
                </a>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 aboutRight">
            <img class="img-fluid" src="{{ asset('frontend/img/aboutimg3.png') }}" alt="" />
          </div>
        </div>
      </div>
    </section>
<section class="team-section">
  <div class="container">
    
    <!-- Section Header -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-7">
        <h2 class="fw-bold mb-3" style="color: #1a1a1a;">Our Awesome Team</h2>
        <p class="text-muted" style="font-size: 14px; line-height: 1.6;">
          Pellentesque a ante vulputate leo porttitor luctus sed eget eros. Nulla et rhoncus neque. Duis non diam eget est luctus tincidunt a a mi.
        </p>
      </div>
    </div>

    <!-- Swiper Slider Wrapper -->
    <div class="swiper team-slider">
      <div class="swiper-wrapper">

        <!-- Member 1 -->
        <div class="swiper-slide team-slide-item">
          <div class="team-card">
            <div class="team-img-wrapper">
              <img src="{{ asset('frontend/img/aboutimg4.png') }}" class="img-fluid" alt="Jenny Wilson">
              <div class="social-overlay">
                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-pinterest"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="team-info">
              <h5>Jenny Wilson</h5>
              <p>Ceo & Founder</p>
            </div>
          </div>
        </div>

        <!-- Member 2 -->
        <div class="swiper-slide team-slide-item">
          <div class="team-card">
            <div class="team-img-wrapper">
              <img src="{{ asset('frontend/img/aboutimg4.png') }}" class="img-fluid" alt="Jane Cooper">
              <div class="social-overlay">
                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-pinterest"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="team-info">
              <h5>Jane Cooper</h5>
              <p>Worker</p>
            </div>
          </div>
        </div>

        <!-- Member 3 -->
        <div class="swiper-slide team-slide-item">
          <div class="team-card">
            <div class="team-img-wrapper">
              <img src="{{ asset('frontend/img/aboutimg4.png') }}" class="img-fluid" alt="Cody Fisher">
              <div class="social-overlay">
                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-pinterest"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="team-info">
              <h5>Cody Fisher</h5>
              <p>Security Guard</p>
            </div>
          </div>
        </div>

        <!-- Member 4 -->
        <div class="swiper-slide team-slide-item">
          <div class="team-card">
            <div class="team-img-wrapper">
              <img src="{{ asset('frontend/img/aboutimg4.png') }}" class="img-fluid" alt="Robert Fox">
              <div class="social-overlay">
                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-pinterest"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="team-info">
              <h5>Robert Fox</h5>
              <p>Senior Farmer Manager</p>
            </div>
          </div>
        </div>

        <!-- Member 5 -->
        <div class="swiper-slide team-slide-item">
          <div class="team-card">
            <div class="team-img-wrapper">
              <img src="{{ asset('frontend/img/aboutimg4.png') }}" class="img-fluid" alt="Robert Fox">
              <div class="social-overlay">
                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-pinterest"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="team-info">
              <h5>Robert Fox</h5>
              <p>Senior Farmer Manager</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Custom Navigation Arrows -->
      <button type="button" class="swiper-button-prev team-prev">
        <i class="bi bi-arrow-left-short"></i>
      </button>
      <button type="button" class="swiper-button-next team-next">
        <i class="bi bi-arrow-right-short"></i>
      </button>
    </div>

  </div>
</section>
<section id="testimonial">
        <div class="container">
                <h2>Client Testimonial</h2>
            <img src="./img/Line.png" alt="">
            <div class="swiper swiperReview ">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="person">
        <img src="{{ asset('frontend/img/coma.png') }}" alt="">
        <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
        <div class="row clientsMain">
                        <div class="col-lg-8">
                            <div class="personName">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <img src="{{ asset('frontend/img/man1.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-7 col-7">
                                        <h6>Dianne Russell</h6>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                        </div>
                    </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="person">
        <img src="{{ asset('frontend/img/coma.png') }}" alt="">
        <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
        <div class="row clientsMain">
                        <div class="col-lg-8">
                            <div class="personName">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <img src="{{ asset('frontend/img/man1.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-7 col-7">
                                        <h6>Dianne Russell</h6>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                        </div>
                    </div>
        </div>
    </div>
      <div class="swiper-slide">
        <div class="person">
        <img src="{{ asset('frontend/img/coma.png') }}" alt="">
        <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
        <div class="row clientsMain">
                        <div class="col-lg-8">
                            <div class="personName">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <img src="{{ asset('frontend/img/man1.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-7 col-7">
                                        <h6>Dianne Russell</h6>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                        </div>
                    </div>
        </div>
    </div>
      <div class="swiper-slide">
        <div class="person">
        <img src="{{ asset('frontend/img/coma.png') }}" alt="">
        <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
        <div class="row clientsMain">
                        <div class="col-lg-8">
                            <div class="personName">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <img src="{{ asset('frontend/img/man1.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-7 col-7">
                                        <h6>Dianne Russell</h6>
                                        <p>Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                        </div>
                    </div>
        </div>
    </div>
    </div>
  </div>
  <div class="next"><iconify-icon icon="basil:arrow-right-solid"></iconify-icon></div>
    <div class="prev"><iconify-icon icon="basil:arrow-left-solid"></iconify-icon></div>
    <div class="dots"></div>
        </div>
    </section>

    <section class="logo-section">
  <div class="logo-container">
    <div class="logo-item">
      <img src="{{ asset('frontend/img/company-logo (1).png') }}" alt="Steps Logo" />
    </div>
    <div class="logo-item">
      <img src="{{ asset('frontend/img/company-logo (2).png') }}" alt="Mango Logo" />
    </div>
    <div class="logo-item">
      <img src="{{ asset('frontend/img/company-logo (3).png') }}" alt="Food Logo" />
    </div>
    <div class="logo-item">
      <img src="{{ asset('frontend/img/company-logo (4).png') }}" alt="Food Brand Logo" />
    </div>
    <div class="logo-item">
      <img src="{{ asset('frontend/img/company-logo (5).png') }}" alt="Book Off Logo" />
    </div>
    <div class="logo-item">
      <img src="{{ asset('frontend/img/company-logo (6).png') }}" alt="Brand Logo" />
    </div>
  </div>
</section>

    <section id="newsletter">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-md-2">
                    <div class="newsletterLogo">
                        <img src="{{ asset('frontend/img/Logo.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-lg-flex justify-content-lg-end">
                    <div class="newsletterTypo">
                        <h5>Subscribe to our Newsletter</h5>
                        <p>Pellentesque eu nibh eget mauris congue mattis matti</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-lg-flex justify-content-end">
                    <div class="mailSubmit">
                        <input type="mail" placeholder="Your Email Address">
                        <a href="#">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <footer>
      <div class="container">
        <div class="row pb-lg-5">
          <div class="col-lg-3">
            <div class="about d-none d-lg-block">
              <h5>About Shopery</h5>
              <p>
                Morbi cursus porttitor enim lobortis molestie. Duis gravida
                turpis dui, eget bibendum magna congue nec.
              </p>
              <a class="contact" href="callto:(219) 555-0114">(219) 555-0114</a>
              <span>or</span>
              <a class="contact" href="mailto:proxy@gmail.com"
                >proxy@gmail.com</a
              >
            </div>
          </div>
          <div class="col-lg-2">
            <h5>My Account</h5>
            <ul>
              <li><a href="./signin.html">My Account</a></li>
              <li><a href="#">Order History</a></li>
              <li><a href="#">Shopping Cart</a></li>
              <li><a href="#">Wishlist</a></li>
              <li><a href="#">Setting</a></li>
            </ul>
          </div>
          <div class="col-lg-2">
            <h5>Help</h5>
            <ul>
              <li><a href="./contact.html">Contact</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-lg-2">
            <h5>Proxy</h5>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Shop</a></li>
              <li><a href="#">Product</a></li>
              <li><a href="#">Products Details</a></li>
              <li><a href="#">Track Order</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <div class="apps">
              <h5>Download Our Mobile App</h5>
              <div class="row justify-content-between">
                <div class="col-lg-6 col-6">
                  <div class="appStore">
                    <div class="row align-items-center">
                      <div class="col-lg-3 col-3">
                        <span class="appsLogo"
                          ><iconify-icon icon="ic:baseline-apple"></iconify-icon
                        ></span>
                      </div>
                      <div class="col-lg-9 col-9">
                        <a href="#"> Download on the <span>App Store</span> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-6">
                  <div class="playStore">
                    <div class="row align-items-center">
                      <div class="col-lg-3 col-3">
                        <span class="apps_logo"
                          ><iconify-icon icon="mage:playstore"></iconify-icon
                        ></span>
                      </div>
                      <div class="col-lg-9 col-9">
                        <a href="#">
                          Download on the <span>Play Store</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="row align-items-center justify-content-lg-between copyright"
        >
          <div class="col-lg-3">
            <div class="socialMedia">
              <ul>
                <li>
                  <a href="#"
                    ><iconify-icon icon="ri:facebook-fill"></iconify-icon
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><iconify-icon icon="mynaui:twitter"></iconify-icon
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><iconify-icon icon="mingcute:pinterest-line"></iconify-icon
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><iconify-icon icon="mdi:instagram"></iconify-icon
                  ></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="copyright col-lg-4 d-lg-flex justify-content-lg-center">
            <p>Ecobazar eCommerce © 2021. All Rights Reserved</p>
          </div>
          <div class="col-lg-4 d-lg-flex justify-content-lg-end">
            <ul class="payment d-flex">
              <li>
                <a href="#"
                  ><img src="./img/pay1.png" class="img-fluid" alt=""
                /></a>
              </li>
              <li>
                <a href="#"
                  ><img src="./img/pay2.png" class="img-fluid" alt=""
                /></a>
              </li>
              <li>
                <a href="#"
                  ><img src="./img/pay3.png" class="img-fluid" alt=""
                /></a>
              </li>
              <li>
                <a href="#"
                  ><img src="./img/pay4.png" class="img-fluid" alt=""
                /></a>
              </li>
              <li>
                <a href="#"
                  ><img src="./img/pay5.png" class="img-fluid" alt=""
                /></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </main>
@endsection