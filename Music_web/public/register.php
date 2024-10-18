<?php

include 'connect.php';

if (isset($_POST['signUp'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $password=md5($password);
    $repassword=md5($repassword);

        $checkEmail="SELECT * FROM users WHERE email='$email'";
        $result=$conn->query($checkEmail);
        if($result->num_rows>0){
            echo "Email Address is already exists !";
        }
        else{
            $insertQuery="INSERT INTO users(name,email,password,repassword)
             VALUES ('$name','$email','$password','$repassword')";
                if($conn->query($insertQuery)==TRUE){
                    header("location: loginPage.php");
                }
                else{
                    echo "Error:".$conn->error;
                }
        }

}

if (isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        
        // Check if the email is the admin email
        if ($email == 'admin@example.com') {
            header("location: admin/index.php");
        } else {
            header("location: homepage.php");
        }
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }

}

?>

<?php

    include 'connect.php';

    if (isset($_POST['contactUp'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $insertQuery="INSERT INTO contact (contact_name,contact_phone,contact_email,contact_subject,contact_message)
            VALUES ('$name','$phone','$email','$subject','$message')";

        if($conn->query($insertQuery)==TRUE){
            echo "<script>
                    alert('Registration Successful!');
                    window.location.href = 'contactUs.php';
                </script>";
        }  
        else {
            echo "Error:".$conn->error;
        }
    }
?>