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

    $query="SELECT * FROM usertable ";
    $result=mysqli_query($conn,$query);

 
$fname = $mname = $lname = $username = $role = $password = $confirm_password = "";
$fname_err = $lname_err = $username_err = $role_err = $username_err = $password_err = $confirm_password_err = "";

// Process data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["firstname"]))){
        $fname_err = "Please enter a first name.";
    } elseif(!preg_match('/^[a-zA-Z ]+$/', trim($_POST["firstname"]))){
        $fname_err = "Name can only contain letters.";
    } else {
        $fname = trim($_POST["firstname"]);
    }

    if(!preg_match('/^[a-zA-Z ]+$/', trim($_POST["middlename"]))){
        $mname_err = "Name can only contain letters.";
    } else {
        $mname = trim($_POST["middlename"]);
    }

    if(empty(trim($_POST["lastname"]))){
        $lname_err = "Please enter a first name.";
    } elseif(!preg_match('/^[a-zA-Z ]+$/', trim($_POST["lastname"]))){
        $lname_err = "Name can only contain letters.";
    } else {
        $lname = trim($_POST["lastname"]);
    }


    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        $sql = "SELECT id FROM usertable WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = trim($_POST["username"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }

    $role = trim($_POST["role"]);
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    if(empty($fname_err) && empty($lname_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        $sql = "INSERT INTO usertable (firstname, middlename, lastname, username, password, roleid) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "sssssi", $param_fname, $param_mname, $param_lname, $param_username, $param_password, $param_role);
            
            $param_fname = $fname;
            $param_mname = $mname;
            $param_lname = $lname;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_role = $role;
            
            if(mysqli_stmt_execute($stmt)){
                header("location: users.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Protein Blends | Add User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="https://64.media.tumblr.com/d6d0d1956a4ed0762dc43993ef8db1f7/b19e9aa061f0ba10-6c/s1280x1920/e9cb3cff30044e1d548420877709df1c5d4b51b0.pnj">
    <link rel="stylesheet" href="./css/customerstyle.css">
    <link href="../css/style.min.css" rel="stylesheet">
    <style>
        body{font: 14px sans-serif; background-color:#F2F9E7; font-family: 'Poppins';color: #141C07;}
        .wrapper{ width: 360px; padding: 20px; }
        .userblock{
            background-color: #fff;
            height: auto;
            width: 700px;
            border-radius: 10px;
            position: absolute;
            left: calc(50% - 700px/2);
            top: calc(50% - 500px/2);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
        }
        .userblockcontent{
            padding:20px;
        }
        .userblockcontent h2{
            font-weight: 700;
            font-size: 25px;
            margin-left:10px;
            margin-bottom:20px;
        }
        .top-line{
            position: absolute;
            height: 8px;
            left: -0.21%;
            right: 0%;
            top: 0px;
            background: #FFB100;
        }
        .buttonsalign{
            margin-left:495px;  
            margin-top:20px; 
            margin-bottom:0px;         
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
            top: 80px;
            left: calc(45% - 700px/2);
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
        <div class="userblock">
            <div class="userblockcontent">
                <h2>Add User</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control <?php echo (!empty($fname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fname; ?>">
                                <span class="invalid-feedback"><?php echo $fname_err; ?></span>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                            </div>    
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-sm">                            
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" name="middlename" class="form-control" value="<?php echo $mname; ?>">
                                <span class="invalid-feedback"><?php echo $mname_err; ?></span>
                            </div>
                        </div>
                        <div class="col-sm">                            
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name ="role" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                    <option value="1">Admin</option>
                                    <option value="2">Cashier</option>
                                </select> 
                            </div> 
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-sm">                                                      
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control <?php echo (!empty($lname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lname; ?>">
                                <span class="invalid-feedback"><?php echo $lname_err; ?></span>
                            </div>    
                        </div>
                        <div class="col-sm">                                                      
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-sm">                                                           
                        </div>
                        <div class="col-sm">                                                                                
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                            </div>
                        </div>                        
                    </div>
                </div>   
                    

                    
                    <div class="form-group buttonsalign">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                    </div>
                </form>
            </div>
        </div>         
    </div>    
</body>
</html>

<?php
    }
?>