<?php
@include 'config.php';

// Query to get the first name of the user with the given user ID
$query = "SELECT first_name FROM user_info";
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Go to the last row in the result
    $result->data_seek($result->num_rows - 1);

    // Fetch the last row from the result
    $row = $result->fetch_assoc();

    // Get the first name
    $first_name = $row['first_name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
</head>
<body>
<div class="container">
        <div class="content">
            <?php
            echo "<h3>Hi, <span>$first_name</span></h3>"
?>
            <h1>Welcome!!<span> Enjoy your Tour! </span></h1>
            <p>Welcome to PSU-College of Sciences</p>
            <a href="login.php" class=btn>Log out</a>
            <a href="index.php" class=btn>Continue</a>
        </div>
    </div>
</body>
</html>
