<?php
    include_once "../../connect.php";
    
    if(isset($_POST['upload'])) {
       
        $artistName = mysqli_real_escape_string($conn, $_POST['p_name']);
        $desc = mysqli_real_escape_string($conn, $_POST['p_desc']);
        $price = $_POST['p_price'];
        $category = $_POST['category'];
       
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location = "./uploads/";
        $image = $location . basename($name);

        $target_dir = "../uploads/";
        $finalImage = $target_dir . basename($name);

        // Check if the file was moved successfully
        if (move_uploaded_file($temp, $finalImage)) {
            // Perform the database insert query
            $insert = mysqli_query($conn, "INSERT INTO artist
            (artist_name, artist_image, price, artist_desc, category_id) 
            VALUES ('$artistName', '$image', $price, '$desc', '$category')");
    
            if(!$insert) {
                echo "Error inserting data: " . mysqli_error($conn);
            } else {
                echo "Records added successfully.";
            }
        } else {
            echo "File upload failed.";
        }
    }
?>
