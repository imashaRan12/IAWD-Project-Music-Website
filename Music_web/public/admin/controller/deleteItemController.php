<?php

    include_once "../../connect.php";
    
    $p_id=$_POST['record'];
    $query="DELETE FROM artist where artist_id='$p_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Artist Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>