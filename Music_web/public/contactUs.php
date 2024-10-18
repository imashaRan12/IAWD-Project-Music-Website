<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>

    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="asset/images/fave_icon.png"
      type="image/x-icon"
    />

    <!-- Link to CSS file -->
    <style>
      /* Importing fonts from Google Fonts API */
      @import url("https://fonts.googleapis.com/css2?family=Belleza&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap");

      /* Resetting default margin and padding for all elements */
      * {
        margin: 0;
        padding: 0;
      }

      /* Setting font family for the body */
      body {
        font-family: "Raleway", sans-serif;
        background-color: #150725;
      }

      /* Container for the main content */
      .contactUs {
        width: 80%;
        margin: 50px auto;
      }

      /* Styling for main heading */
      .contactUs h1 {
        color: #ffffff;
        text-align: center;
        font-size: 50px;
        font-weight: 800;
        margin-bottom: 10px;
      }

      /* Styling for paragraph text */
      .contactUs p {
        color: #ffffff;
        text-align: center;
        font-size: 25px;
        margin-bottom: 40px;
      }

      /* Styling for contact box container */
      .contactUs .contact-box {
        background: #ffffff;
        display: flex;
        border-radius: 20px;
      }

      /* Styling for left container inside the contact box */
      .contactUs .container-left {
        flex-basis: 60%;
        padding: 40px 60px;
      }

      /* Styling for right container inside the contact box */
      .contactUs .container-right {
        flex-basis: 40%;
        padding: 40px 60px;
        background: linear-gradient(42deg, #7436bb 0.01%, #b520a3 100%);
        color: #ffffff;
        border-radius: 0px 20px 20px 0px;
      }

      /* Styling for heading inside left container */
      .contactUs .container-left h3 {
        font-size: 25px;
        color: #353535;
        margin-bottom: 20px;
      }

      /* Styling for heading inside right container */
      .contactUs .container-right h3 {
        font-size: 25px;
        color: #ffffff;
        margin-bottom: 20px;
      }

      /* Styling for input rows */
      .contactUs .input-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
      }

      /* Styling for input groups inside input rows */
      .contactUs .input-row .input-group {
        flex-basis: 45%;
      }

      /* Styling for input fields */
      .contactUs input {
        width: 95%;
        border: none;
        color: #353535;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        font-family: "Raleway", sans-serif;
      }

      /* .contactUs input:focus,
      .contactUs input:valid {
        border-color: #f57c48;
      } */

      /* Styling for textareas */
      .contactUs textarea {
        font-family: "Raleway", sans-serif;
        font-size: 15px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        padding: 10px;
        box-sizing: border-box;
      }

      /* Styling for labels */
      .contactUs label {
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: 600;
        display: block;
        color: #353535;
      }

      /* Styling for table cells */
      .contactUs tr td:first-child {
        font-size: 20px;
        font-weight: 600;
        padding-right: 20px;
      }

      .contactUs tr td {
        padding-top: 20px;
      }

      /* Styling for iframes */
      .contactUs iframe {
        width: 100%;
        border: none;
        border-radius: 10px;
        outline: none;
        margin-top: 30px;
      }

    </style>
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
      <!-- Main container -->
      <div class="contactUs">
        <h1>Get in Touch</h1>
        <p>Fill up the form to get in touch with us.</p>

        <!-- Contact form section -->
        <div class="contact-box">
          <!-- Left side of the form -->
          <div class="container-left">
            <h3>Fill the Form*</h3>
            <!-- Form -->
            <form id="contactForm" action="register.php" method="post" onsubmit="return validateContactForm()">
              <div class="input-row">
                <div class="input-group">
                  <label>Name*</label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Enter your Name"
                  />
                </div>

                <div class="input-group">
                  <label>Phone*</label>
                  <input
                    type="text"
                    name="phone"
                    id="phone"
                    placeholder="+94768708456"
                  />
                </div>
              </div>

              <!-- Input row for Email and Subject -->
              <div class="input-row">
                <div class="input-group">
                  <label>Email*</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="youremail@gmail.com"
                  />
                </div>

                <div class="input-group">
                  <label>Subject</label>
                  <input type="text" name="subject" id="subject" placeholder="Inquiry" />
                </div>
              </div>

              <!-- Label for Message textarea -->
              <label>Message*</label>
              <textarea
                rows="10"
                name="message"
                id="message"
                placeholder="Enter your Message"
              ></textarea>
              <div class="flex-sb">
                <button type="submit" value="Contact Up" name="contactUp" class="btn_hover1">SEND MESSAGE</button>
                <a href="feedback.php" style="color:#7436bb"><i class="fa-solid fa-star">Give us some Feedback</i></a>
              </div>
            </form>
          </div>
          <!-- Right side with contact information -->
          <div class="container-right">
            <h3>Reach Us</h3>
            <!-- Table for contact information -->
            <table>
              <tr>
                <td>Email:</td>
                <td>echoevents@gmail.com</td>
              </tr>

              <tr>
                <td>Phone:</td>
                <td>+94766708443</td>
              </tr>

              <tr>
                <td>Address:</td>
                <td>
                  Echo Events <br />
                  KCM Drive Off Millennium, <br />
                  Malabe 10115, Colombo
                </td>
              </tr>
            </table>

            <!-- Map section -->
            <div class="map">
              <!-- Google Map iframe -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7017707314844!2d79.95793477377164!3d6.926207393073561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2572088a0a727%3A0x7ad194975392a569!2sHorizon%20Campus!5e0!3m2!1sen!2slk!4v1729089832711!5m2!1sen!2slk"
                width="800"
                height="275"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>

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

      <script>
        // Function to validate contact form
        function validateContactForm() {
          // Get form field values
          const name = document.getElementById("name").value.trim();
          const phone = document.getElementById("phone").value.trim();
          const email = document.getElementById("email").value.trim();
          const subject = document.getElementById("subject").value.trim();
          const message = document.getElementById("message").value.trim();

          //Get the custom popup boxes
          const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer;
            },
          });

          // Name validation
          if (name === "") {
            Toast.fire({
            icon: "error",
            title: "Name is Required!",
            });
            return false;
          }

          // Phone validation (basic pattern for international numbers, adjust as necessary)
          const phonePattern = /^\+94[0-9]{9}$/;

          if (phone === "") {
            Toast.fire({
            icon: "error",
            title: "Phone Number is Required!",
            });
            return false;
          }

          if (!phonePattern.test(phone)) {
            Toast.fire({
            icon: "error",
            title: "Please enter a valid phone number!",
            });
            return false;
          }

          // Email validation
          const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

          if (email === "") {
            Toast.fire({
            icon: "error",
            title: "Email address is Required!",
            });
            return false;
          }

          if (!emailPattern.test(email)) {
            Toast.fire({
            icon: "error",
            title: "Please enter a valid email address!",
            });
            return false;
          }

          // Subject validation
          if (subject === "") {
            Toast.fire({
            icon: "error",
            title: "Subject is Required!",
            });
            return false;
          }

          // Message validation
          if (message === "") {
            Toast.fire({
            icon: "error",
            title: "Message is Required!",
            });
            return false;
          }

          // If all validations pass, allow form submission
          return true;
        }
      </script>

    <!-- custom js -->
    <script src="asset/js/script.js"></script>

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
  </body>
</html>
