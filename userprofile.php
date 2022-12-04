<?php
    include 'header-user.html';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KADS | My Profile</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- css -->
        <link rel="stylesheet" href="css/header-responsive.css" />
        <link rel="stylesheet" href="css/footer.css" />
        <link rel="stylesheet" href="css/userprofile.css" />
        <!-- favicon -->
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/03977197ef.js" crossorigin="anonymous"></script>
    </head>
    <body>
        

        <!-------------- content start --------------->

        <div class="content-container container d-flex justify-content-center">          
          <div class="row content-wrapper">
            <div class="col-4 left-content">
              <div class="container">
                <div class="row links-title">My Account</div>      
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <button type="button" class="btn side-links side-links-active">My Profile</button>                    
                  </div>                  
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <button type="button" class="btn side-links">My Addresses</button>
                  </div>                  
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <button type="button" class="btn side-links">Change Password</button>
                  </div>                  
                </div>                
                <div class="row links-title">My Orders</div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <button type="button" class="btn side-links">Order History</button>
                  </div>                  
                </div>                  
              </div>

            </div>
            <div class="col right-content">
              <h1 class="container-title text-center">My Profile</h1>
              <div class="title-line"></div>

              <form class="form-style">
                <div class="row">
                  <div class="col">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="First name">
                  </div>                  
                </div>

                <div class="row">                  
                  <div class="col">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Last name">
                  </div>
                </div>

                <div class="row">                  
                  <div class="col">
                    <label for="inputEmail">Email Address</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com">                    
                  </div>
                </div>   
                
                <div class="row">                  
                  <div class="col">
                    <label for="inputEmail">Date of birth</label>
                    <input type="date" class="form-control" id="inputBday" placeholder="2000/01/01">                    
                  </div>
                </div>    
                
                <button type="submit" class="btn btn-save">Save</button>                
              </form>

            </div>
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

        <!---------------------JS-------------------->        
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
