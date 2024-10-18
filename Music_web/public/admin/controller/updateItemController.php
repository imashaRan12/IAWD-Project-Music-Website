<?php
    include_once "../../connect.php";

    $artist_id=$_POST['product_id'];
    $artist_name= $_POST['p_name'];
    $artist_desc= $_POST['p_desc'];
    $artist_price= $_POST['p_price'];
    $category= $_POST['category'];

    if( isset($_FILES['newImage']) ){
        
        $location="./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = mysqli_query($conn,"UPDATE artist SET 
        artist_name='$artist_name', 
        artist_desc='$artist_desc', 
        price=$artist_price,
        category_id=$category,
        artist_image='$final_image' 
        WHERE artist_id=$artist_id");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>