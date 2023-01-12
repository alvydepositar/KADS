<?php
  session_start();

  if (!isset($_SESSION["loggedin"]) && !isset($_SESSION['role'])){
    header("location: login.php");
    exit;
  } else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] === 1) {
    header("location: admin/dashboard.php");
    exit;
  } else {
    include "conn.php";

    $username = $_SESSION['username'];
    $id = $_SESSION['id'];

    $query="SELECT * FROM info_accts WHERE id = '$id'";
    $result=mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);

    if($_SERVER["REQUEST_METHOD"] == "POST"){

      $old_pass = $_POST['oldpass'];
	    $new_pass = $_POST['newpass'];
	    $re_pass = $_POST['confirmpass'];

      if(empty($oldpass_err) && empty($newpass_err) && empty($confirmpass_err)) {
        $verifypassword = password_verify($old_pass, $row['password']);
	      if ($verifypassword) {
		        if ($new_pass == $re_pass) {
              $newpass = password_hash($newpass, PASSWORD_DEFAULT);
			        mysqli_query($conn, "UPDATE info_accts SET password='$new_pass' WHERE id='$id'");
              header("Location: changePass.php");
			      } else {
              $confirmpass_err = "Password did not match.";
			      }
		    } else {
          $oldpass_err = "Current password is incorrect.";		
        }  
      } /*else {
        $oldpass_err = "Please input your current password.";
        $newpass_err = "Please input your new password.";
        $confirmpass_err = "Please confirm your new password.";
      }
      
	//}

/*
      // Validate password
      if(empty(trim($_POST["oldpass"]))){
        $oldpass_err = "Please enter a password.";     
      } elseif($_POST["oldpass"] != $row['password']){
          $oldpass_err = "Current password is incorrect.";
      } else {
          $oldpass = trim($_POST["oldpass"]);
      }
    
      if(empty(trim($_POST["newpass"]))){
        $newpass_err = "Please enter new password.";     
      } elseif(strlen(trim($_POST["newpass"])) < 8){
        $newpass_err = "Password must have atleast 8 characters.";
      } else {
        $newpass = trim($_POST["newpass"]);
      }

      if(empty(trim($_POST["confirmpass"]))){
        $confirmpass_err = "Please confirm password.";     
      } else {
        $confirmpass = trim($_POST["confirmpass"]);
        if($newpass != $confirmpass){
            $confirmpass_err = "Password did not match.";
        } else{
            $confirmpass = trim($_POST["confirmpass"]);
        }
      }

      $newpass = password_hash($newpass, PASSWORD_DEFAULT);

      mysqli_query($conn, "UPDATE info_accts SET password = '$newpass' WHERE id = '$id'");
      header("Location: changePass.php");
      */
    }
?>

<!DOCTYPE html>
<html lang="en" class="scroller">
  <head>
    <meta charset="utf-8" />
    <title>KADS | Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="css/header-responsive.css" /> 
    <link rel="stylesheet" href="css/user.css" />
    <link rel="stylesheet" href="css/footer.css" />   
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/03977197ef.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
      include 'header-user.php';
    ?>

    <!-------------- content start --------------->

    <div class="content-container container d-flex justify-content-center">          
          <div class="row content-wrapper">
            <div class="col-4 left-content">
              <div class="container">
                <div class="row links-title-top">My Account</div>      
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <a href="userprofile.php">
                      <button type="button" class="side-links">My Profile</button>                    
                    </a>
                  </div>                  
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <a href="myAddresses.php">
                      <button type="button" class="side-links">My Addresses</button>
                    </a>
                  </div>                  
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <a href="changePass.php">
                      <button type="button" class="side-links side-links-active">
                        Change Password
                      </button>
                    </a>
                  </div>                  
                </div>                
                <div class="row links-title">My Orders</div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <a href="ongoingorder.php">
                      <button type="button" class="side-links">Ongoing Order</button>
                    </a>                    
                  </div>                  
                </div>   
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <a href="orderhistory.php">
                      <button type="button" class="side-links">Order History</button>
                    </a>
                  </div>                  
                </div>  
                <div class="row align-bottom logout-group">
                  <a href="logout.php">
                    <span class="fa-solid fa-power-off">
                      <span class="logout-label">Logout</span>
                    </span>
                  </a>
                </div>                     
              </div>

            </div>
            <div class="col right-content">
              <h1 class="container-title text-center">Password</h1>
              <div class="title-line"></div>

              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="row">
                  <div class="col">
                    <label for="password">Current Password</label>
                    <input
                      type="password"
                      class="form-control showhide-password <?php echo (!empty($oldpass_err)) ? 'is-invalid' : ''; ?>"
                      id="password"
                      name="oldpass"
                      placeholder="********"
                      require
                    />
                    <span class="invalid-feedback"><?php echo $oldpass_err; ?></span>  
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <label for="newpass">New Password</label>
                    <input
                      type="password"
                      class="form-control showhide-password <?php echo (!empty($newpass_err)) ? 'is-invalid' : ''; ?>"
                      id="newpass"
                      name="newpass"
                      placeholder="********"
                      require
                    />      
                    <span class="invalid-feedback"><?php echo $newpass_err; ?></span>                
                  </div>
                </div>

                <div class="row" style="margin-bottom: 20px;">
                  <div class="col">
                    <label for="confirmpass">Confirm Password</label>
                    <input
                      type="password"
                      class="form-control showhide-password <?php echo (!empty($confirmpass_err)) ? 'is-invalid' : ''; ?>"
                      id="confirmpass"
                      name="confirmpass"
                      placeholder="********"
                      require
                    />
                    <span class="invalid-feedback"><?php echo $confirmpass_err; ?></span>   
                    <input type="checkbox" class="showPassword"><span class="show-pw">Show Password</span>
                  </div>
                </div>

                <button type="submit" class="btn btn-save">Change Password</button>
              </form>

            </div>
          </div>                    
        </div>     

    
    <!-- back to top button -->
    <button
      type="button"
      class="btn btn-danger btn-floating btn-lg"
      id="btn-back-to-top"
      >
      <i class="fas fa-arrow-up"></i>
    </button>
    <!-- back to top button end --> 
    
    <?php
      include 'footer.html';
    ?>
    
    <!---------------------JS-------------------->        
    <script src="backtotop.js"></script>
    <script src="showpw.js"></script>
    <!-- bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<?php } ?>