<?php 
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dj Artist</title>

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
                <li><a href="homepage.php" class="nav-link active">Home</a></li>
                <li><a href="artist_booking.php" class="nav-link">Booking</a></li>
                <li><a href="contactUs.php" class="nav-link">Contact</a></li>
                <li class="dropdown">
                  <a href="" class="nav-link dropdown-toggle"
                    >Artist Categories</a
                  >
                  <ul class="dropdown-menu">
                    <li>
                      <a href="djPageUser.php" class="dropdown-item">Dj Artist</a>
                    </li>
                    <li>
                      <a href="artistPageUser.php" class="dropdown-item"
                        >Music Artist</a
                      >
                    </li>
                    <li>
                      <a href="bandPageUser.php" class="dropdown-item"
                        >Music Band</a
                      >
                    </li>
                  </ul>
                </li>
                <li>
                    <p style="color: #f57c48;; font-size: 20px;">Hi, <?php
                    if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                        $query=mysqli_query($conn, "SELECT users. * FROM `users` WHERE users.email='$email'");
                        while($row=mysqli_fetch_array($query)){
                            echo $row['name'];
                        }
                    }
                    ?>
                    :)
                    </p>
                </li>
              </ul>
            </div>
            <div class="nav-right flex">
              <div class="log_btn">
                <a href="logout.php" class="btn_log">Log Out</a>
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
                <li><a href="homepage.php" class="nav-link active">Home</a></li>
                <li><a href="" class="nav-link">Booking</a></li>
                <li><a href="contactUs.php" class="nav-link">Contact</a></li>
                <li><a href="logout.php" class="nav-link">Log Out</a></li>
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
                        <a href="djPageUser.php" class="nav-link">Dj Artist</a>
                      </li>
                      <li>
                        <a href="artistPageUser.php" class="nav-link"
                          >Music Artist</a
                        >
                      </li>
                      <li>
                        <a href="bandPageUser.php" class="nav-link">Music Band</a>
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
        <!-- ====== 1.1 End of Header Section ======= -->
      </div>

      <!-- ====== 1.5 Artist-category Section ======= -->
      <section class="artist-category">
        <div class="container">
        <div class="w-50" data-aos="zoom-in">
          <div class="flex artist-title gap-1">
            <hr />
            <h5>DJ ARTIST</h5>
          </div> 
        </div>
          <?php
          // Fetch DJ category data (category_id = 3)
          $sql = "SELECT * FROM artist WHERE category_id = 2";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              echo "<div class='card-container' data-aos='fade-up'>";
              while($row = $result->fetch_assoc()) {
                  echo "<div class='card'>";
                  $imagePath = "admin/" . $row["artist_image"];
                  echo "<img src='" . $imagePath . "' alt='" . $row["artist_name"] . "' class='card-img'/>";
                  echo "<div class='card-content'>";
                  echo "<h2>" . $row["artist_name"] . "</h2>";
                  echo "<p><strong>Amount per Event:</strong> Rs." . $row["price"] . "</p>";
                  echo "<p><strong>Description:</strong> " . $row["artist_desc"] . "</p>";
                  echo "</div>";
                  echo "</div>";
              }
              echo "</div>";
          } else {
              echo "<p>No Music artists found.</p>";
          }

          $conn->close();
          ?>

      
        </div>
      </section>
      <!-- ====== 1.5 end of Artist-category Section ======= -->

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
  </body>
</html>
