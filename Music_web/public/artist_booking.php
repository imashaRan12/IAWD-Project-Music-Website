<?php 
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Booking</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Akaya Telivigala', cursive;
            background-color: #1a1a1a;
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #333;
        }

        .about {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            background-color: #b520a3;
            padding: 20px;
        }

        .form {
            width: 650px;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: #f57c48;
        }

        .form-text {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-text h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .main-form div {
            margin: 10px 0;
        }

        .main-form div input {
            width: 100%;
            background: none;
            border: 1px solid #f57c48;
            font-size: 20px;
            color: #fff;
            outline: none;
            padding: 3px 10px;
            margin-top: 10px;
        }

        .main-form div select {
            width: 100%;
            background: none;
            border: 1px solid #f57c48;
            font-size: 20px;
            color: #808080;
            outline: none;
            padding: 3px 10px;
            margin-top: 10px;
        }

        #submit input {
            width: 200px;
            background-color: #5b13b9;
            color: black;
            transition: all 0.3s;
        }

        #submit input:hover {
            background-color: black;
            color: white;
        }

        footer {
            background-color: #333;
            padding: 20px;
            text-align: center;
        }

        @media screen and (max-width: 710px) {
            .form {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<section class="about dark-theme">
    <div class="form">
        <div class="form-text">
            <h1>Book Now</h1>
            <p>Fill the following form to get the service of the artist you need.</p>
        </div>
        <div class="main-form">
            <form action="artist_booking.php" method="POST" onsubmit="return validateForm()">
                <div>
                    <span>Your full name?</span>
                    <input type="text" name="full_name" id="name" placeholder="Write your name here...">
                </div>
                <div>
                    <span>Artist Category?</span>
                    <select name="Artist" id="Artist">
                        <option disabled selected>Select category</option>
                        <?php
                        $sql="SELECT * from category";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo"<option value='".$row['category_name']."'>".$row['category_name'] ."</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <span>Artist Name</span>
                    <select name="artist_name" id="artistName">
                        <option disabled selected>Select Artist</option>
                        <?php
                        $sql="SELECT * from artist";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<option value='".$row['artist_name']."'>".$row['artist_name']."</option>";
                            }
                        }
                        ?>
                     </select>
                </div>
                <div>
                    <span>Your email address?</span>
                    <input type="text" name="email" id="email" placeholder="Write your email here...">
                </div>
                <div>
                    <span>What time?</span>
                    <input type="text" name="time" id="time" placeholder="Time">
                </div>
                <div>
                    <span>What is the date?</span>
                    <input type="date" name="date" id="date">
                </div>
                <div>
                    <span>Your phone number?</span>
                    <input type="number" name="number" id="number" placeholder="Write your number here...">
                </div>
                <div id="submit">
                    <input type="submit" value="Booking Up" name="bookingUp">
                </div>
            </form>
            <!-- Back Button -->
            <div style="text-align: center; margin-top: 20px;">
                <a href="homepage.php" style="text-decoration: none; color: white; font-size: 18px;">&#8592; Back to Home</a>
            </div>
        </div>
    </div>
</section>
<?php

    include 'connect.php';

    if(isset($_POST['bookingUp'])) {
        $fullName = $_POST['full_name'];
        $artistType = $_POST['Artist'];
        $artistName = $_POST['artist_name'];
        $email = $_POST['email'];
        $time = $_POST['time'];
        $date = $_POST['date'];
        $phoneNumber = $_POST['number'];
    
        // Insert data into the database
        $insertQuery = "INSERT INTO booking (full_name, category_name, artist_name, email, time_slot, booking_date, phone_number) 
                VALUES ('$fullName', '$artistType', '$artistName', '$email', '$time', '$date', '$phoneNumber')";
    
        if($conn->query($insertQuery)==TRUE){
            echo "<script>
                    alert('Booking Successful!');
                    window.location.href = 'artist_booking.php';
                </script>";
        }  
        else {
            echo "Error:".$conn->error;
        }
    }
        
?>

<footer>
    <p>&copy; 2024 Artist Booking. All Rights Reserved.</p>
</footer>

<script>
        function validateForm() {
            let name = document.getElementById('name').value.trim();
            let artistName = document.getElementById('artistName').value.trim();
            let email = document.getElementById('email').value.trim();
            let artistType = document.getElementById('Artist').value;
            let time = document.getElementById('time').value.trim();
            let date = document.getElementById('date').value;
            let phoneNumber = document.getElementById('number').value.trim();

            // Name Validation
            if (name === '') {
                alert("Please enter your full name.");
                return false;
            }

            // Artist Name Validation
            if (artistName === '') {
                alert("Please enter the artist's name.");
                return false;
            }

            // Email Validation
            let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (email === '' || !email.match(emailPattern)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // Artist Type Validation
            if (artistType === '') {
                alert("Please select an artist type.");
                return false;
            }

            // Time Validation
            if (time === '') {
                alert("Please enter a time.");
                return false;
            }

            // Date Validation
            if (date === '') {
                alert("Please select a date.");
                return false;
            }

            // Phone Number Validation
            let phonePattern = /^[0-9]{10}$/;
            if (phoneNumber === '' || !phoneNumber.match(phonePattern)) {
                alert("Please enter a valid 10-digit phone number.");
                return false;
            }

            return true;
        }
    </script>

</body>
</html>
