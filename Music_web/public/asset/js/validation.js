//Get the custom popup boxes
const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 2500,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  },
});

// Function to validate login form
function validateLoginForm() {
  let email = document.querySelector(".login-form input[type='email']");
  let password = document.querySelector(".login-form input[type='password']");

  if (email.value.trim() === "") {
    Toast.fire({
      icon: "error",
      title: "Email Address is Required!",
    });
    return false;
  }

  if (password.value.trim() === "") {
    Toast.fire({
      icon: "error",
      title: "Password is Required!",
    });
    return false;
  }

  return true;
}

// Function to validate signup form
function validateSignupForm() {
  let name = document.querySelector(".signup-form input[type='text']");
  let email = document.querySelector(".signup-form input[type='email']");
  let password = document.querySelectorAll(
    ".signup-form input[type='password']"
  )[0];
  let confirmPassword = document.querySelectorAll(
    ".signup-form input[type='password']"
  )[1];
  let emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (name.value.trim() === "") {
    Toast.fire({
      icon: "error",
      title: "Name is Required!",
    });
    return false;
  }

  if (!email.value.match(emailPattern)) {
    Toast.fire({
      icon: "error",
      title: "Please enter a valid email address!",
    });
    return false;
  }

  if (password.value.trim() === "") {
    Toast.fire({
      icon: "error",
      title: "Password is Required!",
    });
    return false;
  }

  if (confirmPassword.value.trim() === "") {
    Toast.fire({
      icon: "error",
      title: "Re-Password is Required!",
    });
    return false;
  }

  if (password.value !== confirmPassword.value) {
    Toast.fire({
      icon: "error",
      title: "Passwords do not match!",
    });
    return false;
  }
  return true;
}

// Attach validation functions to forms
document.querySelector(".login-form form").onsubmit = function (e) {
  if (!validateLoginForm()) {
    e.preventDefault();
  }
};

document.querySelector(".signup-form form").onsubmit = function (e) {
  if (!validateSignupForm()) {
    e.preventDefault();
  }
};

// document.querySelector(".contactUs form").onsubmit = function (e) {
//   if (!validateContactForm()) {
//     e.preventDefault();
//   }
// };
