<?php
    require 'conn.php';
    include 'header-guest.html';

    if(isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/registration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="grid-container">

        <div class="right-container">
            <div class="title">Sign Up</div>
            <div class="subcontent"> Tell us more about you so we can give you a better delivery experience.</div>
            <div class="content">
                <form action="">
                    <div class="wrapper">

                    <div class="row">
                        <h6>Name</h6>
                        <div class="col">
                        <input type="text" name="firstname" id="firstname" placeholder="First Name" require>
                        </div>
                        <div class="col">
                        <input type="text" name="lastname" id="lastname" placeholder="Last Name" require>
                        </div> 
                    </div>

                    <div class="row"> 
                        <h6>Email Address</h6>
                        <div class="col">
                        <input type="email" name="address" id="address" placeholder="abc@gmail.com" require>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col">
                        <h6>Birthday</h6>
                        <input type="date" name="bday" id="bday" placeholder="mm/dd/yyyy" require>
                        </div>
                        <div class="col">
                        <h6>Contact Number</h6>
                        <input type="tel" name="phone" id="phone" placeholder="09*********" require>
                        </div> 
                    </div>

                    <div class="row"> 
                        <h6>Password</h6>
                        <div class="col">
                        <input type="password" name="password" id="password" placeholder="********" require>
                        </div>
                    </div>

                    <div class="row"> 
                        <h6>Re-enter Password</h6>
                        <div class="col">
                        <input type="password" name="repassword" id="repassword" placeholder="********" require>
                        </div>
                    </div>

                    </div>
                </form>
            </div>
        </div>
    
        <div class="left-container">
            <img src="images/dummy-img.jpg" alt="dummy image">
        </div>

    </div>
    
    
</body>
</html>