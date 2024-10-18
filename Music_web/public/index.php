<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Echo Events</title>

    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="asset/images/fave_icon.png"
      type="image/x-icon"
    />

    <!-- link css -->
    <link rel="stylesheet" href="asset/css/style.css" />
    <link rel="stylesheet" href="asset/css/easy.css" />

    <!-- link slick css file -->
    <link rel="stylesheet" href="asset/css/slick.min.css" />

    <!-- /* Scroll cdn */ -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- font awesome cdn for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="site-wrapper">
      <div class="header-index">
        <!-- ====== 1.1 Header Section ======= -->
        <header>
          <div class="container navbar">
            <div class="container-nav flex">
              <!-- site logo -->
              <a href="index.php" class="navbar-logo"
                ><img src="asset/images/logo.png" alt=""
              /></a>
              <button onclick="openNav()" class="navbar-toggler" type="button">
                <span class="fa-solid fa-bars"></span>
              </button>
              <!-- menus -->
              <ul class="navbar-nav flex">
                <li><a href="index.php" class="nav-link active">Home</a></li>
                <li><a href="" id="noBooking" class="nav-link">Booking</a></li>
                <li><a href="contactUs.php" class="nav-link">Contact</a></li>
                <li class="dropdown">
                  <a href="" class="nav-link dropdown-toggle"
                    >Artist Categories</a
                  >
                  <ul class="dropdown-menu">
                    <li>
                      <a href="djPage.php" class="dropdown-item">Dj Artist</a>
                    </li>
                    <li>
                      <a href="artistPage.php" class="dropdown-item"
                        >Music Artist</a
                      >
                    </li>
                    <li>
                      <a href="bandPage.php" class="dropdown-item"
                        >Music Band</a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="nav-right flex">
              <div class="log_btn">
                <a href="loginPage.php" class="btn_log">Log In</a>
              </div>
              <!-- header buttons -->
              <i
                onclick="openSearch()"
                class="fa-solid fa-magnifying-glass"
              ></i>
              <i onclick="openRightPannel()" class="fa-solid fa-bars"></i>
            </div>
          </div>
          <!-- sidebar -->
          <aside id="mySidepanel" class="sidepanel">
            <div class="sidebar flex">
              <a href=""> <img src="asset/images/logo.png" alt="logo" /></a>
              <button
                onclick="closeNav()"
                type="button"
                class="closebtn btn_hover1"
              >
                <i class="fa-solid fa-xmark"></i>
              </button>
            </div>
            <div>
              <!-- side menus -->
              <ul>
                <li><a href="index.php" class="nav-link active">Home</a></li>
                <li><a href="noBook.php" class="nav-link">Booking</a></li>
                <li><a href="contactUs.php" class="nav-link">Contact</a></li>
                <li><a href="loginPage.php" class="nav-link">Log In</a></li>
                <li class="pages"><a href="/">More</a></li>
                <li class="collapse-btn">
                  <a
                    href=""
                    class="nav-link plus_collapse"
                    data-bs-toggale="collapse"
                    ><i class="fa-solid fa-plus"></i
                  ></a>
                  <div class="collapse" id="pages">
                    <ul>
                      <li><a href="/" class="nav-link">Services</a></li>
                      <li>
                        <a href="djPage.php" class="nav-link">Dj Artist</a>
                      </li>
                      <li>
                        <a href="artistPage.php" class="nav-link"
                          >Music Artist</a
                        >
                      </li>
                      <li>
                        <a href="bandPage.php" class="nav-link">Music Band</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </aside>

          <!-- searchbar -->
          <div id="search-bar">
            <div onclick="closeSearch()" class="btn_hover1">
              <i class="fa-solid fa-xmark"></i>
            </div>
            <form action="#" method="search">
              <input type="search" required placeholder="Search..." />
              <button type="submit" class="btn_hover1">Search</button>
            </form>
          </div>

          <!-- right sidebar-->
          <section class="header-right-sidebar" id="right_side">
            <div class="flex flex-sb">
              <a href="/"
                ><img src="asset/images/right-side-logo.png" alt="logo"
              /></a>
              <button
                onclick="closeRightPannel()"
                type="button"
                class="closeRight btn_hover1"
              >
                <i class="fa-solid fa-xmark"></i>
              </button>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
              cupiditate, ipsum maiores culpa iste similique aliquam natus illum
              suscipit necessitatibus non corrupti, error exercitationem, ab
              doloremque iure ea quia nam?
            </p>
            <a href="" class="btn_hover1" id="discover_btn">Discover More</a>
            <hr />
            <h5>Connected details</h5>
            <ul class="flex">
              <li>
                <a href="#"><i class="fa-solid fa-phone"></i></a>
                <a href="#" class="text-lowercase">+94766708443</a>
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                <a href="#" class="text-lowercase">echoevents@gmail.com</a>
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-regular fa-clock"></i></a>
                <a href="#" class="text-lowercase"
                  >Open Hours: 8AM - 10PM Weekdays</a
                >
              </li>
            </ul>
            <span class="flex" id="social_icons">
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </span>
          </section>
        </header>
        <video autoplay loop muted plays-inline class="background-clip">
          <source src="asset/images/bg/vid.mp4" type="video/mp4" />
        </video>
        <!-- ====== 1.1 End of Header Section ======= -->
        <!-- ====== 1.2 Hero Section ======= -->
        <section class="hero">
          <div class="container" data-aos="zoom-in">
            <div>
              <div class="hero-social-icon flex">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <hr />
              </div>
              <div class="center-data flex flex-col gap-1">
                <h3>Elevate Your Events with</h3>
                <h1>Live Music Magic</h1>
                <div class="center-btn flex">
                  <a href="#featureTag" class="btn_hover1"
                    ><i class="fa-solid fa-headphones"></i> Get Started</a
                  >
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- ====== 1.2 End of Hero Section ======= -->
      </div>
      <!-- ====== 1.3 card Section ======= -->
      <section class="feature">
        <div class="container">
          <div class="flex">
            <div class="header-card" id="featureTag" data-aos="fade-up">
              <div>
                <figure>
                  <img src="asset/images/icon/feature1.png" alt="img" />
                </figure>
                <h4>SERVICE</h4>
                <p>
                  Discover and book top music artists and DJ players online.
                  Explore our platform for seamless booking and unforgettable
                  events that you can discover 24 hours on our website.
                </p>
              </div>
            </div>
            <div class="header-card" data-aos="fade-down">
              <div>
                <figure>
                  <img src="asset/images/icon/feature2.png" alt="img" />
                </figure>
                <h4>YOUR PLACE</h4>
                <p>
                  Make every moment count with the perfect musical experience.
                  Find and book talented artists and DJs on our platform. You
                  can held your event any place.
                </p>
              </div>
            </div>
            <div class="header-card" data-aos="fade-up">
              <div>
                <figure>
                  <img src="asset/images/icon/feature3.png" alt="img" />
                </figure>
                <h4>DJ EVENT</h4>
                <p>
                  Join us for an epic DJ night with great music, vibrant lights,
                  and amazing vibes. Don't miss the chance to dance and have a
                  blast with unforgettable beats and an electric atmosphere!.
                </p>
              </div>
            </div>
            <div class="header-card" data-aos="fade-down">
              <div>
                <figure>
                  <img
                    class="figure_img4"
                    src="asset/images/icon/feature4.png"
                    alt="img"
                  />
                </figure>
                <h4>MUSIC EVENT</h4>
                <p>
                  Experience an unforgettable night of live music and great
                  vibes! Join us for an evening filled with amazing performances
                  and good times.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ====== 1.3 end of card Section ======= -->
      <!-- ====== 1.4 Logoipsum Section ======= -->
      <section class="logoipsum">
        <div class="container">
          <div class="flex flex-col gap-15">
            <hr class="hr1" />
            <h3 class="mb-15" data-aos="zoom-in">OUR BRANDS</h3>
          </div>
          <div class="logoipsum-slider sliderlogo" data-aos="zoom-in">
            <figure>
              <img src="asset/images/home/logoipsum1.svg" alt="logoipsum" />
            </figure>
            <figure>
              <img src="asset/images/home/logoipsum2.svg" alt="logoipsum" />
            </figure>
            <figure>
              <img src="asset/images/home/logoipsum3.svg" alt="logoipsum" />
            </figure>
            <figure>
              <img src="asset/images/home/logoipsum4.svg" alt="logoipsum" />
            </figure>
            <figure>
              <img src="asset/images/home/logoipsum5.svg" alt="logoipsum" />
            </figure>
            <figure>
              <img src="asset/images/home/logoipsum6.svg" alt="logoipsum" />
            </figure>
          </div>
          <hr class="hr2" />
        </div>
      </section>
      <!-- ====== 1.4 end of Logoipsum Section ======= -->
      <!-- ====== 1.5 About us Section ======= -->
      <section class="about">
        <div class="container">
          <div class="about-data flex-sb">
            <div class="w-50" data-aos="fade-up">
              <div class="flex about-title gap-1">
                <hr />
                <h5>ABOUT US</h5>
              </div>
              <h2>Explore Our Services and Get the Best Experience</h2>
              <p>
                Welcome to Echo Event, we are passionate about bringing your
                music events to life. Whether you're organizing a cozy acoustic
                night, a vibrant music festival, or a corporate gathering, our
                platform connects you with top-notch artists and professionals
                to ensure your event is a success. From start to finish, we’re
                here to simplify the planning process, offering artists that let
                you focus on the creative and exciting aspects of your event.
              </p>
              <div class="flex gap-1 mt-15">
                <i class="fa-solid fa-check"></i>
                <h5>
                  We connect you with talented musicians for any event size or
                  style.
                </h5>
              </div>
              <div class="flex gap-1 mt-15">
                <i class="fa-solid fa-check"></i>
                <h5>
                  Customize your event to make it truly unique and
                  unforgettable.
                </h5>
              </div>
              <div class="flex mt-3">
                <a href="#" class="btn_hover2">Discover More</a>
              </div>
            </div>
            <div class="w-50 about-imgs flex flex-center" data-aos="fade-down">
              <div>
                <figure>
                  <img src="asset/images/home/About.png" alt="img" />
                </figure>
              </div>
              <div class="ab-count flex flex-center">
                <div class="flex flexcenter">
                  <h2>10</h2>
                  <h2>+</h2>
                </div>
                <p>year of experience</p>
              </div>
              <div class="about-hr flex gap-1">
                <hr />
                <h6>Who we are</h6>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ====== 1.5 end of About us Section ======= -->
      <!-- ====== 1.6 Gallery Section ======= -->
      <section class="portfolio">
        <div class="portfolio-1">
          <div class="container">
            <div class="porto-center" data-aos="fade-up">
              <div class="w-50">
                <div class="flex gap-1">
                  <hr class="gallery-hr1" />
                  <h5>EVENTS</h5>
                </div>
                <h2 class="mt-15">Our Latest Events</h2>
                <p>
                This our latest events that we held on request from our customer.
                We give you an absolute expeerience that you never had.
                </p>
              </div>
              <div class="flex w-100 flex-end">
                <a href="/" class="btn_hover2">View All Events</a>
              </div>
              <hr class="mt-3" />
            </div>
          </div>
        </div>
        <div class="gallery">
          <div class="ga-bg"></div>
          <!-- overly -->
          <span></span>
          <div class="container" data-aos="fade-up">
            <!-- tab links -->
            <div class="tab mt-15">
              <button class="tablinks active" onclick="open_img(event, 'all')">
                All
              </button>
              <button class="tablinks" onclick="open_img(event, 'singers')">
                SINGERS
              </button>
              <button class="tablinks" onclick="open_img(event, 'dj')">
                DJ
              </button>
              <button class="tablinks" onclick="open_img(event, 'bands')">
                BANDS
              </button>
            </div>
            <!-- tab content -->
            <div id="all" class="tabcontent" style="display: block">
              <div class="flex flex-center">
                <div class="flex w-100">
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/band-gallery-1.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/dj-gallery-5.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/sing-gallery-2.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-66">
                    <figure>
                      <img src="asset/images/home/band-gallery-4.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/dj-gallery-6.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img
                        src="asset/images/home/sing-gallery-4.jpg"
                        alt="sm_img"
                      />
                    </figure>
                    <figure>
                      <img
                        src="asset/images/home/sing-gallery-5.jpg"
                        alt="sm_img"
                      />
                    </figure>
                  </div>
                  <div class="w-66">
                    <figure>
                      <img src="asset/images/home/band-gallery-2.jpg" alt="" />
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div id="singers" class="tabcontent">
              <div class="flex flex-center">
                <div class="flex w-100">
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/sing-gallery-1.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/sing-gallery-2.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/sing-gallery-3.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/sing-gallery-4.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/sing-gallery-5.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/sing-gallery-6.jpg" alt="" />
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div id="dj" class="tabcontent">
              <div class="flex flex-center">
                <div class="flex w-100">
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/dj-gallery-1.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/dj-gallery-2.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/dj-gallery-3.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/dj-gallery-4.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/dj-gallery-5.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/dj-gallery-6.jpg" alt="" />
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div id="bands" class="tabcontent">
              <div class="flex flex-center">
                <div class="flex w-100">
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/band-gallery-1.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-66">
                    <figure>
                      <img src="asset/images/home/band-gallery-2.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-66">
                    <figure>
                      <img src="asset/images/home/band-gallery-4.jpg" alt="" />
                    </figure>
                  </div>
                  <div class="w-33">
                    <figure>
                      <img src="asset/images/home/band-gallery-3.jpg" alt="" />
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div class="gallery-hr flex flex-end gap-1 mt-15">
              <h6>Feel Rythm</h6>
              <hr />
            </div>
          </div>
        </div>
      </section>
      <!-- ====== 1.6 end of Gallery Section ======= -->
      <!-- ====== 1.7  Section ======= -->

      <!-- ====== 1.8 Footer Section ======= -->

      <footer>
        <div class="container">
          <div class="footer-hr flex flex-col">
            <div class="flex gap-1" data-aos="fade-left">
              <hr />
              <h6>Newsletter</h6>
            </div>
            <h3>JOIN OUR MAILING LIST</h3>
            <p class="text-center">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus autem velit facilis, quia adipisci distinctio!
            </p>
          </div>
          <form
            action="#"
            method="get"
            id="footer-form"
            class="flex flex-sb gap-2"
            data-aos="zoom-in"
            data-aos-delay="400"
          >
            <div id="footer-message"></div>
            <input type="email" required placeholder="Enter your email" />
            <button type="submit" class="btn_hover1">Get Started</button>
          </form>
        </div>
        <div class="footer-menu">
          <div class="container">
            <div class="flex flex-start footer-center">
              <div class="w-33 flex flex-col gap-2 flex-start">
                <a href="#"
                  ><img src="asset/images/logo.png" alt="footer-logo"
                /></a>
                <p>
                Welcome to Echo Event, we are passionate about bringing your music events to life. 
                Whether you're organizing a cozy acoustic night, a vibrant music festival, or a corporate gathering, 
                our platform connects you with top-notch artists and professionals to ensure your event is a success.
                </p>
                <span class="flex gap-2"
                  ><a href="#"><i class="fa-brands fa-facebook"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-youtube"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </span>
              </div>
              <div class="w-16 mt-1">
                <h4>Quick Links</h4>
                <ul class="flex flex-col gap-2 flex-start">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">blabla</a></li>
                </ul>
              </div>
              <div class="w-16 mt-45 flex-end">
                <ul class="flex flex-col gap-2 flex-start">
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Privacy policy</a></li>
                </ul>
              </div>
              <div class="w-33 mt-1 flex flex-col flex-start">
                <h4>Get Connected</h4>
                <ul class="flex flex-col gap-2 flex-start">
                  <li>
                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                    <a href="#">+94766708456</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    <a href="#" class="text-lowercase">echoevents@gmail.com</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-sharp fa-regular fa-clock"></i></a>
                    <a href="#">Open Hours: 8AM - 10PM Weekdays</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="container flex flex-sb gap-2 flex-wrap">
            <h6>
              Copyright &copy; 2024 Coded By
              <a href="/" class="p-0">Echo Events</a>
            </h6>
            <h6>Powered By <b>Echo Events</b></h6>
          </div>
        </div>
      </footer>
    </div>

    <!-- End site wrapper -->
    <!-- button back to top -->
    <button onclick="scrollToTop()" id="backToTopBtn" class="btn_hover2">
      <i class="fa-solid fa-arrow-turn-up"></i>
    </button>

    <!-- Scroll animation lib -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 150,
        duration: 1250,
        once: true,
      });
    </script>

    <!-- jquery js cdn -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
      integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- jquery min js cdn -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- slick carousel min js cdn -->
    <script
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
      integrity="sha256-DHF4zGyjT7GOMPBwpeehwoey18z8uiz98G4PRu2lV0A="
      crossorigin="anonymous"
    ></script>

    <!-- customizable, accessible (WAI-ARIA) replacement for JavaScript's popup boxes -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- custom js -->
    <script src="asset/js/script.js"></script>
  </body>
</html>
