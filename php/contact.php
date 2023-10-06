<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact us now</title>
    <link rel = "stylesheet" href="../css/contact.css" media = "screen" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
</head>
<body>
    <div id = "container">
        <img src="../image/logo3.png"class="logo">
        <div id = "navig">
        <ul>
       <li><a href = "index.php">Home</a></li>
        <li><a href = "buildings.php">Buildings</a></li>
        <div class="scen-drop">
            <li><button class="sdrop">Programs
                <i class="fa fa-caret-down" style="font-size: 20px"></i>
            </button></li>
            <div class="sce-content">
                <a href="bsit.php">BS Informtion Technology</a>
                <a href="bscs.php">BS Computer Science</a>
                <a href="bsmb.php">BS Medical Biology</a>
                <a href="bses.php">BS Environmental Science</a>
            </div>
        </div>
        <li><a href ="contact.php" id="current">Contact Us</a></li>
        </div>
    </ul>
        <div class="header-img">
            <h1 style="text-align: center"><b>CONTACT US</b></h1>
            <i class="fa fa-phone" style="font-size:60px;color:white" id="phone"></i>
            <i class="fa fa-envelope" style="font-size:58px;color:white" id="message"></i>
            <form>
                <i class="fa fa-search" style=></i>
                <input type="text" placeholder="what is it?">
                <button type="submit">Search</button>
            </form>
        </div>

        <div id="small-head">
            <h2>GET IN TOUCH</h2>
                <p>Contact us by email, phone or through our web form below.</p>
        </div>
        <div class="prof">
            <center><img src="../image/logo3.png" alt="profile" style="width:118px"></center>
            <h2 style="text-align: center;">College of Sciences</h2>
            <a href="#" class="fa fa-phone" id="call">+639123456789</a>
            <div class="icons">
                <a href="https://www.facebook.com/CollegeOfSciencesPSU" class="fa fa-facebook" id="soc"></a>
                <a href="https://sites.google.com/psu.palawan.edu.ph/collegeofsciences/about-us/college-goals?authuser=0" class="fa fa-google"id="soc"></a>
                <a href="https://instagram.com/psucollegeofsciences?igshid=ZmVmZTY5ZGE=" class="fa fa-instagram"id="soc"></a>
            </div>
        </div>
        <div class="uwu">
            <div class="comment">
        <center><img src="../image/it-logo.jpg" alt="profile" style="width:118px"></center>
        <center><img src="../image/acs.jpg" alt="profile" style="width:118px"></center>
        <center><img src="../image/yba.jpg" alt="profile" style="width:118px"></center>
        <center><img src="../image/essa.jpg" alt="profile" style="width:118px"></center>
        </div>
        <div class="comment-o">
            <div class="mess">
                <p>Comment or Message..</p>
                     <textarea name="DY" rows="5" cols="65"
                         placeholder="Write Something.." required></textarea>
                            <br>
                             <a href="contact.php"><input type="button" id = "alert" onclick="myFunction()" value="submit"></a>
</div>
        </div>
        </div>
        <script>
            function myFunction() {
                alert("Comment sent successfully!");
            }
        </script>
        </body>
</html>