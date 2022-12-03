<?php
    /*require 'conn.php'; */
    include 'header-guest.html';

    #authorization smth
    /*
    $email = $password = $confirm_password = "";
    $email_err = $password_err = $confirm_password_err = "";

    if (isset($_REQUEST['email'])) {
        
    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/registration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- css -->    
    <link rel="stylesheet" href="css/footer.css" />
    
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/03977197ef.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="grid-container">

        <div class="right-container">
            <div class="title">Sign Up</div>
            <div class="subcontent"> Tell us more about you so we can give you a better delivery experience.</div>
            <div class="content">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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

                    <div class="row">
                        <div class="col">
                            <input type="checkbox" id="terms" name="terms"> I have read and agreed to the terms and conditions. </input>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <button class="btn-arrow btn"><i class='fas fa-arrow-right'></i></button>                                                 
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 40px;">
                        <div class="col">
                            Already have an account? 
                            <a href="">Sign in.</a>
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
    <!-- Footer -->
    <footer class="footer text-center text-lg-start">  
            <!-- Section: Links  -->
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-5 col-xl-4 mx-auto mb-4">
                    <!-- Content -->                    
                    <a href="#">
                      <img src="images/kads_logo_1.png" alt="" height="150" style="margin-left:-50px;">
                    </a>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Links
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">Contact Us</a>
                    </p>  
                    <p>
                      <a href="#!" class="text-reset">Menu</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">FAQ</a>
                    </p>          
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Menu Categories
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">Menu Category 1</a>
                    </p>  
                    <p>
                      <a href="#!" class="text-reset">Menu Category 2</a>
                    </p> 
                    <p>
                      <a href="#!" class="text-reset">Menu Category 3</a>
                    </p>                   
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-md-0 mb-3">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Follow Us!</h6>
                    <div class="socialmedia-links">
                      <a href="#" role="button">
                        <i class="fab fa-facebook"></i>
                      </a>
                      
                      <a href="#" role="button">
                        <i class="fab fa-twitter"></i>
                      </a>
                      
                      <a href="#!" role="button">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </div>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
              </div>
            </section>
            <!-- Section: Links  -->           
          </footer>
          <!-- Footer -->

    
    
</body>
</html>