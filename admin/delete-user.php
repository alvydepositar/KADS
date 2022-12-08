<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "../dbconnection.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM usertable WHERE id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: users.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Protein Blends | Delete User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://64.media.tumblr.com/d6d0d1956a4ed0762dc43993ef8db1f7/b19e9aa061f0ba10-6c/s1280x1920/e9cb3cff30044e1d548420877709df1c5d4b51b0.pnj">
    <link rel="stylesheet" href="./css/customerstyle.css">
    <link href="../css/style.min.css" rel="stylesheet">

    <style>
        body{font: 14px sans-serif; background-color:#F2F9E7; font-family: 'Poppins';color: #141C07;}
        .wrapper{
            width: 600px;
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
        h2 {
            font-weight: 700;
            font-size: 25px;        
        }
        .btn{
            border-radius:5px;            
            width: 70px;
            margin-bottom:0px;
            margin-left:0px;
        }
        .alert-danger{
            margin-top:80px;
            background-color:#fff;
            border:none;
            color:#141C07;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
            padding: 20px;
        }
        .btn-danger{
            color:#fff;
            margin-bottom:0px;
            margin-right:10px;
        }
        .btn-secondary{
            background-color: #fff;
            color: #141C07;
            border: 1px solid #B2D62D;
            font-weight: 600;
            font-size: 14px;            
            border-radius:5px;
            margin-bottom:0px;
        }
        .btn-secondary:hover,.btn-secondary:focus{
            background-color: #7BB12F;
            color: #141C07;
        }
        .back-icon img{
            width: 40px;
            height: 40px;
            top: 80px;
            left: calc(50% - 700px/2);
            position: absolute;            
        }
        .back-icon img:hover{
            opacity:0.7;
            transition: 0.25s all ease;      
        }
        p{
            margin-top:15px;
        }
        .buttonsalign{
            margin-left:380px;
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <h2>Delete User</h2>
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this user?</p>
                            <div class="buttonsalign">
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="users.php" class="btn btn-secondary">No</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>