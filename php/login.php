<?php

@include 'config.php';

if(isset($_POST['submit'])){

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);

$select = "SELECT * FROM user_info WHERE email = '$email' && password = '$pass'";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result)>0){
    header('location:index.php');
}else{
 $error[] = 'Incorrect password or email';

}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
</head>
<body>
    <div class="form-con"> 
        <form action="" method="post">
            <h3>Login now</h3><span><img class="logoo" src="../image/logo3.png" height="60" width ="60" alt="logo"></span>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class = "error-mess">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="submit" name="submit"value="Login" class ="form-btn">
            <p>Don't have an account? <a href="register.php">Register now</a></p>

    </div>
</body>
</html>