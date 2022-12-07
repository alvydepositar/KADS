<?php
session_start();

    if (!isset($_SESSION["loggedin"]) && !isset($_SESSION['role'])){
        header("location: ../admin.php");
        exit;
    } else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] === 2) {
        header("location: ../cashier/index.php");
        exit;
    } else {
    include "../dbconnection.php";

    $username = $_SESSION['username'];
    
    $query="SELECT * FROM usertable INNER JOIN roles ON usertable.roleid = roles.id WHERE username = '$username'";
    $result=mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protein Blends PH | Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/customerstyle.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,900&subset=latin-ext' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" sizes="16x16" href="https://64.media.tumblr.com/d6d0d1956a4ed0762dc43993ef8db1f7/b19e9aa061f0ba10-6c/s1280x1920/e9cb3cff30044e1d548420877709df1c5d4b51b0.pnj">
    <style>
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
        body{font: 14px sans-serif; background-color:#F2F9E7; font-family: 'Poppins';color: #141C07;}
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
            background: #FFB100;
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
        <div class="title-style">
            <img src="https://64.media.tumblr.com/d6d0d1956a4ed0762dc43993ef8db1f7/b19e9aa061f0ba10-6c/s1280x1920/e9cb3cff30044e1d548420877709df1c5d4b51b0.pnj">      
        </div>            
        <div class="edituserblock">
            <h2>Profile</h2>  
            <div>                                      
                <div class="profile-item first-name flex">
                    <p class="profile-item-label">FIRST NAME</p>
                    <p class="first-name-value"><?php echo $row['firstname'] ?></p>
                </div> 
                <div class="profile-item middle-name flex">
                    <p class="profile-item-label">MIDDLE NAME</p>
                    <p class="middle-name-value"><?php echo $row['middlename'] ?></p>
                </div> 
                <div class="profile-item last-name flex">
                    <p class="profile-item-label">LAST NAME</p>
                    <p class="last-name-value"><?php echo $row['lastname'] ?></p>
                </div> 

                <div class="profile-item username flex">
                    <p class="profile-item-label">USERNAME</p>
                    <p class="username-value"><?php echo $row['username'] ?></p>
                </div> 
                <div class="profile-item role flex">
                    <p class="profile-item-label">ROLE</p>
                    <p class="role-value"><?php echo $row['name'] ?></p>
                </div>
                
            </div>  
        </div>
    </div>  
</body>
</html>


<?php 
    }
?>