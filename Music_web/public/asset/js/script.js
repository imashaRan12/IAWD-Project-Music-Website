//Booking alert
const bookingLink = document.getElementById("noBooking");

// Add an event listener to the booking link
bookingLink.addEventListener("click", function (event) {
  event.preventDefault(); // Prevent the default action
  Swal.fire({
    icon: "info",
    title: "Oops...",
    text: "You need a User Account to Book!",
    footer: '<a href="loginPage.php">Click here to Login!</a>',
  });
  // Optionally, navigate to the link after the alert
  // window.location.href = this.href;
});

// side bar start

function openNav() {
  "use strict";
  const sidepanel = document.getElementById("mySidepanel");
  if (sidepanel) {
    sidepanel.style.left = "0";
  } else {
    console.error("error: side panel not found");
  }
}

function closeNav() {
  "use strict";
  const sidepanel = document.getElementById("mySidepanel");
  if (sidepanel) {
    sidepanel.style.left = "-320px";
  } else {
    console.error("error: side panel not found");
  }
}

//searchbar

function openSearch() {
  "use strict";
  const searchpanel = document.getElementById("search-bar");
  if (searchpanel) {
    searchpanel.style.height = "100vh";
    searchpanel.style.borderRadius = "0";
  } else {
    console.error("error: search panel not found");
  }
}

function closeSearch() {
  "use strict";
  const searchpanel = document.getElementById("search-bar");
  if (searchpanel) {
    searchpanel.style.height = "0";
    searchpanel.style.borderTopLeftRadius = "100%";
    searchpanel.style.borderTopRightRadius = "100%";
  } else {
    console.error("error: search panel not found");
  }
}

//Right sidebar

function openRightPannel() {
  "use strict";
  const sidepanel2 = document.getElementById("right_side");
  if (sidepanel2) {
    sidepanel2.style.right = "0";
  } else {
    console.error("error: side panel not found");
  }
}

function closeRightPannel() {
  "use strict";
  const sidepanel2 = document.getElementById("right_side");
  if (sidepanel2) {
    sidepanel2.style.right = "-355px";
  } else {
    console.error("error: side panel not found");
  }
}

// portfolio gallary tab

function open_img(evt, cityName) {
  let i, tabcontent, tablinks;

  // hide all tab content
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // remove active class from all tab links
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }

  // show the selected tab content and mark the corresponding tab link as active
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("active");
}

// responsive logoipsum slider

$(".sliderlogo").slick({
  arrows: false,
  dots: false,
  infinite: false,
  autoplay: false,
  speed: 300,
  slidesToShow: 5,
  sliderToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      setting: {
        slidesToShow: 4,
        sliderToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      setting: {
        slidesToShow: 2,
        sliderToScroll: 1,
      },
    },
  ],
});

// footer validation start

const form = documnet.getElementById("footer-form");
const footerMessage = document.getElementById("footer-message");

form.addEventListener("submit", (event) => {
  event.preventDefault();
  footerMessage.innerHTML = "~ Form Submitted successfully";
  footerMessage.style.display = "flex";
  form.reset();
  setTimeout(() => {
    footerMessage.style.display = "none";
  }, 3000);
});

// Button back to top

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("backToTopBtn").style.display = "block";
  } else {
    document.getElementById("backToTopBtn").style.display = "none";
  }
}

function scrollToTop() {
  const scrollToTopBtn = document.documentElement || document.body;
  scrollToTopBtn.scrollIntoView({
    behavior: "smooth",
  });
}
