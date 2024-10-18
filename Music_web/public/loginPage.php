<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>

    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="asset/images/fave_icon.png"
      type="image/x-icon"
    />

    <!-- link css -->
    <link rel="stylesheet" href="asset/css/login.css" />
    <link rel="stylesheet" href="asset/css/style.css" />
    <link rel="stylesheet" href="asset/css/easy.css" />

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
        
      </div>
      <section class="login">
        <div class="container">
          <div class="logging_sect">
            <input type="checkbox" id="flip" />
            <div class="cover">
              <div class="front">
                <img src="asset/images/form/frontImg.jpg" alt="" />
                <div class="text">
                  <span class="text-1"
                    >Event.... <br />
                    Your Place</span
                  >
                  <span class="text-2">Welcome</span>
                </div>
              </div>
              <div class="back">
                <img
                  class="backImg"
                  src="asset/images/form/backImg.jpg"
                  alt=""
                />
                <div class="text">
                  <span class="text-1"
                    >If you use this web service <br />
                    you have a event life</span
                  >
                  <span class="text-2">Let's get started</span>
                </div>
              </div>
            </div>

            <div class="forms">
              <div class="form-content">

                <div class="login-form" id="signin-form">
                  <div class="title">Login</div>
                  <form method="post" action="register.php">
                    <div class="input-boxes">
                      <div class="input-box">
                        <i class="fas fa-user"></i>
                        <input
                          type="email"
                          name="email"
                          id="email"
                          placeholder="Enter your Email Address"                  
                        />
                      </div>
                      <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input
                          type="password"
                          name="password"
                          id="password"
                          placeholder="Enter your password"
                        />
                      </div>
                      <button type="submit" class="btn_hover1" value="Sign In" name="signIn">Submit</button>
                      <div class="text sign-up-text">
                        Don't have an account?
                        <label for="flip">Signup Now</label>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="signup-form" id="signup-form">
                  <div class="title">Signup</div>
                  <form method="post" action="register.php">
                    <div class="input-boxes">
                      <div class="input-box">
                        <i class="fas fa-user"></i>
                        <input
                          type="text"
                          name="name"
                          id="name"
                          placeholder="Enter your username"
                        />
                      </div>
                      <div class="input-box">
                        <i class="fas fa-envelope"></i>
                        <input
                          type="email"
                          name="email"
                          id="email"
                          placeholder="Enter your email"
                        />
                      </div>
                      <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input
                          type="password"
                          name="password"
                          id="password"
                          placeholder="Enter your password"
                        />
                      </div>
                      <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input
                          type="password"
                          name="repassword"
                          id="repassword"
                          placeholder="Re-Enter your password"
                        />
                      </div>
                      <button type="submit" class="btn_hover1" value="Sign Up" name="signUp">Submit</button>
                      <div class="text sign-up-text">
                        Already have an account?
                        <label for="flip">Login now</label>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
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
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est
                  quae amet ex voluptatum harum. Error asperiores neque ducimus
                  tempora quos distinctio officia at earum, quidem quibusdam
                  officiis fuga!
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
    <script src="asset/js/validation.js"></script>

  </body>
</html>
