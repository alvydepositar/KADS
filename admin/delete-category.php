<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "../dbconnection.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM category WHERE id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: category.php");
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
    <title>KADS | Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/logo.png">
    <link rel="stylesheet" href="./css/customerstyle.css">
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="../css/pagestyles.css" rel="stylesheet">
    <style>
        body{font: 14px sans-serif; background-color:#e7e7e7; font-family: 'Poppins';color: #141C07;}
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        .btn-danger{
            background-color:#C70800;
            color:#fff;
            margin-bottom:0px;
            margin-right:10px;
            border:none;
        }
        .btn-secondary{
            background-color: #fff;
            color: #2C2A3A;
            border: 1px solid #C70800;
            font-weight: 600;
            font-size: 14px;            
            border-radius:5px;
            margin-bottom:0px;
        }
        .btn-secondary:hover,.btn-secondary:focus,.btn-danger:hover,.btn-danger:focus{
            background-color: #8e0001;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="top-line"></div> 
        <div class="back-icon2">
            <a href="../admin/category.php">
                <img src="../img/backicon.png">
            </a>
        </div>  
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">                   
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <h2>Delete Category</h2>
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this category?</p>
                            <p class="buttonsalign2">
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="category.php" class="btn btn-secondary btn-style2">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>