<?php
session_start();

    if (!isset($_SESSION["loggedin"]) && !isset($_SESSION['role'])){
        header("location: ../login.php");
        exit;
    } else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] === 2) {
        header("location: ../userprofile.php");
        exit;
    } else {
    include "../conn.php";

    $username = $_SESSION['username'];
    
    $query="SELECT * FROM info_accts WHERE username = '$username'";
    $result=mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KADS | Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/customerstyle.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,900&subset=latin-ext' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/logo.png">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Inter');
        @import url('https://fonts.googleapis.com/css?family=Readex Pro');
        body{
            overflow:hidden;
        }      
        a, a:hover {
          text-decoration:none;
          color:#141C07;
        }  
        .profile-card, .page-content-wrapper, .container-fluid{
            width: 600px;
        }
        body{font: 14px sans-serif; background-color:#e7e7e7; font-family: 'Readex Pro';color: #2C2A3A;}
        .wrapper{ width: 360px; padding: 20px; }
        .wrapper{
            width: 400px;
            margin: 0 auto;
        }
        .top-line{
            position: absolute;
            height: 8px;
            left: -0.21%;
            right: 0%;
            top: 0px;
            background: #C70800;
        }
        .edituserblock {
            background-color:#fff;
            border-radius:10px;
            padding:20px;
            width: 400px;
            margin-top:30px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
        }
        .edituserblock h2{
            font-weight: 700;
            font-size: 25px;
        }
        .btn-primary{
            background-color: #B2D62D;
            color: #141C07;
            border: none;
            font-weight: 600;
            font-size: 14px;
            border-radius:5px;
        }
        .btn-primary:hover,.btn-secondary:hover,.btn-primary:focus,.btn-secondary:focus{
            background-color: #7BB12F;
            color: #141C07;
        }
        .btn-secondary{
            background-color: #fff;
            color: #141C07;
            border: 1px solid #B2D62D;
            font-weight: 600;
            font-size: 14px;            
            border-radius:5px;
        }
        .back-icon img{
            width: 40px;
            height: 40px;
            top: 60px;
            left: calc(50% - 500px/2);
            position: absolute;            
        }
        .back-icon img:hover{
            opacity:0.7;
            transition: 0.25s all ease;      
        }
        label{
            margin-bottom: 0px;
            color:#7BB12F;
            font-weight:500;
        }
        .edituserblock{
            margin-top:150px;
        }
        .back-icon img{
            margin-top:110px;
        }
        .profile-item-label{
            color:#7BB12F;
            font-weight:500;
            font-family: 'Inter';
        }
        .title-style img{
            position: absolute;
            height: 70px;
            left: calc(50% - 70px/2);
            top: 60px;
        }
        .title-style h2{
            font-style: normal;
            font-weight: 700;
            font-size: 32px;            
            text-align: center;
            position: absolute;
            left: calc(50% - 125px);
            top: 140px;
            border-bottom: 8px solid #B2D62D;
            height: 38px;
        }
        .title-style p{
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 36px;
            text-align: center;
            position: absolute;
            left: calc(50% - 80px);
            top: 180px;
        }
        
        #mainwrapper.toggled #page-content-wrapper {
            position: absolute;
            margin-left: 0px;
            margin-right: 0px;
        }

        #page-content-wrapper {
            width: 100%;
            position: relative;
            margin-top: 200px;
            margin-left: 41%;
            padding: 15px;
            
        }

        .container-fluid {
            width: 100%;
            padding-right: 5px;
            padding-left: 5px;
            margin-right: auto;
            margin-left: auto;
        }


        .profile-card {
            width: calc(100% + 10rem);
            max-width: 300px;
            background-color: white;
            padding: 6em;
            border-radius: 10px;
            box-shadow: 0px 4px 16px -9px rgb(0 0 0 / 41%);
            -webkit-box-shadow: 0px 4px 16px -9px rgb(0 0 0 / 41%);
            -moz-box-shadow: 0px 4px 16px -9px rgba(0,0,0,0.41);
            overflow: hidden;
        }

        .flex {
            display: flex;
            justify-content: space-between;
        }

        .profile-center {
            padding-right: 2em;
            position: relative;
        }

        .profile-hello {
            color: #050607;
            font-size: clamp(1.5rem, 5vw, 2rem);
            font-weight: 600;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            margin-bottom: 1.5rem;

        }

        .h2, h2 {
            font-size: 2rem;
            margin-bottom: 25px;
        }

        .profile-item, .first-name, .middle-name, .last-name {
            border-bottom: 0.5px solid rgb(94, 109, 130, .2);
            margin-bottom: 1em;
        }

        .profile-item-label {
            color: #C70800;
            font-size: 0.9375rem;
            padding: 0;
            margin: 0;
        }

        img{            
            height: 180px;
            position: absolute;
            margin-top:-170px;
        }
    </style>
</head>

<body>  
    <div class="wrapper">
        <div class="top-line"></div>   
        <div class="back-icon">
            <a href="../admin/users.php">
                <img src="../img/backicon.png">
            </a>
        </div>                    
        <div class="edituserblock">
            <div class="d-flex justify-content-center">
                <img src="../images/kads_icon.png">    
            </div>
            <h2>Profile</h2>  
            <div>                                      
                <div class="profile-item first-name flex">
                    <p class="profile-item-label">Full Name:</p>
                    <p class="first-name-value"><?php echo $row['firstname'] .' '. $row['lastname'] ?></p>
                </div> 
                <div class="profile-item middle-name flex">
                    <p class="profile-item-label">Birthday:</p>
                    <p class="middle-name-value"><?php echo $row['birthday'] ?></p>
                </div> 
                <div class="profile-item last-name flex">
                    <p class="profile-item-label">Phone:</p>
                    <p class="last-name-value"><?php echo $row['phone'] ?></p>
                </div> 

                <div class="profile-item username flex">
                    <p class="profile-item-label">Username:</p>
                    <p class="username-value"><?php echo $row['username'] ?></p>
                </div> 
                <div class="profile-item role flex">
                    <p class="profile-item-label">Role:</p>
                    <p class="role-value"><?php if ($row['role'] == 1) {
                                            echo "Admin";
                                            } else {
                                                echo "Customer";
                                            } ?></p>
                </div>
                
            </div>  
        </div>
    </div>  
</body>
</html>


<?php 
    }
?>