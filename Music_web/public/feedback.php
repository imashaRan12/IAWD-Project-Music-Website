<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback Form</title>
    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="asset/images/fave_icon.png"
      type="image/x-icon"
    />
    <style>
      /* General Popup Style */
      .popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        max-width: 900px;
        padding: 20px;
        background: linear-gradient(135deg, #6a1b9a, #8e24aa);
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        color: #fff;
        font-family: "Arial", sans-serif;
        z-index: 999;
      }

      .popup-content h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
      }

      /* Horizontal Form */
      .feedback-form {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
      }

      .form-group {
        flex: 1 1 45%;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .form-group label {
        margin-bottom: 5px;
        font-size: 14px;
      }

      .feedback-form input[type="text"],
      .feedback-form input[type="email"],
      .feedback-form select,
      .feedback-form textarea {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: #f3e5f5;
        color: #6a1b9a;
        font-size: 14px;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .satisfaction-group {
        flex: 1 1 100%;
      }

      .satisfaction-rating {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
      }

      .satisfaction-rating label {
        font-size: 14px;
        margin-right: 10px;
      }

      .satisfaction-rating input[type="radio"] {
        margin-right: 5px;
      }

      .feedback-form select {
        appearance: none;
        background: #f3e5f5;
      }

      .feedback-form textarea {
        resize: none;
      }

      .feedback-form button[type="submit"] {
        width: 100%;
        padding: 10px;
        background: #ab47bc;
        color: white;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
      }

      .feedback-form button[type="submit"]:hover {
        background: #8e24aa;
      }
    </style>
  </head>
  <body>
    <div id="popupForm" class="popup">
      <div class="popup-content">
        <h2>Contact Us</h2>

        <form
          class="feedback-form"
          action="feedback.php"
          method="POST"
          onsubmit="return validateForm()"
        >
          <div class="form-group">
            <label for="name">Name: *</label>
            <input type="text" name="name" id="name" placeholder="Your Name" />
          </div>

          <div class="form-group">
            <label for="email">Email: *</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Your Email"
            />
          </div>

          <div class="form-group satisfaction-group">
            <label>Are you satisfied with this service? *</label>
            <div class="satisfaction-rating" id="satisfaction">
              <label
                ><input
                  type="radio"
                  name="satisfaction"
                  value="Very Dissatisfied"
                />
                Very Dissatisfied</label
              >
              <label
                ><input type="radio" name="satisfaction" value="Dissatisfied" />
                Dissatisfied</label
              >
              <label
                ><input type="radio" name="satisfaction" value="Average" />
                Average</label
              >
              <label
                ><input type="radio" name="satisfaction" value="Satisfied" />
                Satisfied</label
              >
              <label
                ><input
                  type="radio"
                  name="satisfaction"
                  value="Very Satisfied"
                />
                Very Satisfied</label
              >
            </div>
          </div>

          <div class="form-group">
            <label for="service_value"
              >Value you can provide for this service: *</label
            >
            <select name="service_value" id="service_value">
              <option value="" disabled selected>Select a value</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>

          <div class="form-group">
            <label for="service_received">The service you received: *</label>
            <textarea
              name="service_received"
              id="service_received"
              placeholder="Enter your feedback (max 120 characters)"
              rows="2"
              maxlength="120"
            ></textarea>
          </div>

          <button type="submit" value="feedback In" name="feedbackIn">
            Send Feedback
          </button>
          <a
            href="index.php"
            style="text-decoration: none; color: white; font-size: 18px"
            >&#8592; Back to Home</a
          >
        </form>
      </div>
    </div>
    <script>
        function validateForm() {
            let name = document.getElementById('name').value.trim();
            let email = document.getElementById('email').value.trim();
            let satisfaction = document.querySelector('input[name="satisfaction"]:checked');
            let service_value = document.getElementById('service_value').value.trim();
            let service_received = document.getElementById('service_received').value.trim();
            
            // Name Validation
            if (name === '') {
                alert("Name is required.");
                return false;
            }

            // Email Validation
            let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (email === '' || !email.match(emailPattern)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // Validate satisfaction rating
            if (!satisfaction){
                alert("Please choose an option.");
                return false;
            }
            
            // service value Validation
            if (service_value === '') {
                alert("select an value.");
                return false;
            }

            // serveice meassge Validation
            if (service_received === '') {
                alert("Please provide feedback for the service.");
                return false;
            }
            
            return true;
        }
    </script>

    <?php

    include 'connect.php';

    if(isset($_POST['feedbackIn'])){

      $name = $_POST['name'];
      $email = $_POST['email'];
      $satisfaction = $_POST['satisfaction'];
      $service_value = $_POST['service_value'];
      $service_received = $_POST['service_received'];

      $sql = "INSERT INTO feedback (feed_name, feed_email, feed_rate, feed_value, feed_mesage)
            VALUES ('$name', '$email', '$satisfaction', '$service_value', '$service_received')";

          if($conn->query($sql)==TRUE){
            echo "<script>
                    alert('Successful!');
                    window.location.href = 'feedback.php';
                </script>";
          }  
          else {
            echo "Error:".$conn->error;
          }
    }
    ?>
  </body>
</html>
