<?php
    /*session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] === 1){
        header("location: admin/dashboard.php");
        exit;
    } else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] === 2) {
        header("location: cashier/index.php");
        exit;
    }

    include "dbconnection.php";

    $username = $password = "";
    $username_err = $password_err = $login_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
        } else{
            $username = trim($_POST["username"]);
        }
        
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }

        if(empty($username_err) && empty($password_err)){
            $sql = "SELECT * FROM usertable WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $verifypassword = password_verify($password, $row['password']);
                if($username === $row['username'] && $verifypassword) {
                    if($row['roleid'] == 1){
                        $_SESSION['fname'] = $row['firstname'];
                        $_SESSION['lname'] = $row['lastname'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION["loggedin"] = true;
                        $_SESSION['role'] = $row['roleid'];
                        header("Location: admin/dashboard.php");
                        exit();
                    } else if ($row['roleid'] == 2) {
                        $_SESSION['fname'] = $row['firstname'];
                        $_SESSION['lname'] = $row['lastname'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION["loggedin"] = true;
                        $_SESSION['role'] = $row['roleid'];
                        header("Location: cashier/dashboard.php");
                        exit();
                    }
                } else {
                    $login_err = "Invalid username or password.";
                }
            } else {
                $login_err = "User does not exist.";
            }
        }
    }   */
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KADS | Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">   
    <link href='https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,900&subset=latin-ext' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon.ico">
    <link rel="stylesheet" href="../css/admin.css" />
</head>


<body>
<div class="top-line"></div>  
    <div class="wrapper d-flex justify-content-center">   
        <div class="block-style">
        <div class="d-flex justify-content-center">
            <img src="../images/kads_icon.png">    
        </div>
            <div class="content-style">
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>                
                <?php 
                    /*if(!empty($login_err)){
                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }        */
                ?>

                <form action="<?php /*echo htmlspecialchars($_SERVER["PHP_SELF"]);*/ ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control <?php /*echo (!empty($username_err)) ? 'is-invalid' : ''; */?>">
                        <span class="invalid-feedback"><?php /*echo $username_err; */?></span>
                    </div>    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control <?php /*echo (!empty($password_err)) ? 'is-invalid' : ''; */?>">
                        <span class="invalid-feedback"><?php /*echo $password_err; */?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>        
    </div>
</body>
</html>