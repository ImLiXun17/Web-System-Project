<?php

@include 'config.php';

if(isset($_POST['submit'])){

$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5( $_POST['password']);
$cpass = md5( $_POST['cpassword']);

$select = "SELECT * FROM user_info WHERE email = '$email'";

$result = mysqli_query($conn, $select);
if(mysqli_num_rows($result)>0){

    $error[] = 'User already exist!';
}
else{ 
   if($pass != $cpass){
    $error[] = 'password does not match!';
    }else{
        $insert = "INSERT INTO user_info(last_name, first_name, email, password) 
        VALUES('$lname','$fname','$email','$pass')";
        mysqli_query($conn, $insert);
        header('location:content.php');
    }
    }

};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
</head>
<body>
    <div class="form-con"> 
        <form action="" method="post">
            <h3>Register now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class = "error-mess">'.$error.'</span>';
                };
            };


            ?>
            <input type="text" name="lname" placeholder="Last name" required>
            <input type="text" name="fname" placeholder="First name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="password" name="cpassword" placeholder="Confirm your password" required>
            <input type="submit" name="submit"value="register now" class ="form-btn">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>

    </div>
</body>
</html>