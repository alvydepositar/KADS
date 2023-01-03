<?php
session_start();

if (!isset($_SESSION["loggedin"]) && !isset($_SESSION['role'])){
    header("location: ../login.php");
    exit;
} else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] === 2) {
    header("location: ../login.php");
    exit;
} else {
include "../conn.php";

$username = $_SESSION['username'];
$id = $firstname = $mname = $lastname = $birthday = $phone = $email = $role = "";
$username_err = "";


if(isset($_GET["edit"])){
    $id = $_GET['edit'];

    $sql1 = (mysqli_query($conn, "SELECT * FROM info_accts WHERE id = $id"));

        $user = mysqli_fetch_array($sql1); 
        $firstname   = $user["firstname"];
        $lastname    = $user["lastname"];
        $bday   = $user["birthday"];
        $phone   = $user["phone"];
        $email    = $user["username"];
        $role       = $user["role"];
    }

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $bday = $_POST["bday"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $role = trim($_POST["role"]);
    
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a username.";
    } else{
        $sql = "SELECT id FROM info_accts WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = trim($_POST["email"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This username is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    } 

    mysqli_query($conn, "UPDATE info_accts SET firstname = '$firstname',  lastname= '$lastname', username= '$email', phone = '$phone', birthday = '$bday' WHERE id= '$id'");
    header("Location: users.php");
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

    <style>
        body{font: 14px sans-serif; background-color:#e7e7e7; font-family: 'Poppins';color: #141C07;}
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
            background-color: #C70800;
            color: #fff;
            border: none;
            font-weight: 600;
            font-size: 14px;
            border-radius:5px;
        }
        .btn-primary:hover,.btn-secondary:hover,.btn-primary:focus,.btn-secondary:focus{
            background-color: #8e0001;
            color: #fff;
        }
        .btn-secondary{
            background-color: #fff;
            color: #C70800;
            border: 1px solid #C70800;
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
            color:#C70800;
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
            <div class="edituserblock">
                <h2>Edit User</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>">
                                <span class="invalid-feedback"><?php echo $firstname_err; ?></span>
                            </div>
                        </div>

                        <div class="col-sm">                                                      
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastname; ?>">
                                <span class="invalid-feedback"><?php echo $lastname_err; ?></span>
                            </div>    
                        </div>
                                                
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                                <span class="invalid-feedback"><?php echo $email_err; ?></span>
                            </div>    
                        </div>

                        <div class="col-sm">                            
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name ="role" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select> 
                            </div> 
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" name="bday" class="form-control <?php echo (!empty($bday_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $bday; ?>">
                                <span class="invalid-feedback"><?php echo $bday_err; ?></span>
                            </div>                                                           
                        </div>

                        <div class="col-sm">                                                                                
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="tel" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>">
                                <span class="invalid-feedback"><?php echo $phone_err; ?></span>
                            </div>
                        </div>                        
                    </div>

                    <div class="form-group buttonsalign">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
            </form>
            </div>  
        </div>


            
    </div>    
                        
</body>
</html>

<?php } ?>