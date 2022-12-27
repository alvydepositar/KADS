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
      include 'header-user.html';
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
                    <a href="orderhistory.php">
                      <button type="button" class="side-links">Order History</button>
                    </a>
                  </div>                  
                </div>                  
              </div>

            </div>
            <div class="col right-content">
              <h1 class="container-title text-center">Password</h1>
              <div class="title-line"></div>

              <form class="form-style">
                <div class="row">
                  <div class="col">
                    <label for="password">Current Password</label>
                    <input
                      type="password"
                      class="form-control showhide-password"
                      id="password"
                      placeholder="********"
                    />
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <label for="newpass">New Password</label>
                    <input
                      type="password"
                      class="form-control showhide-password"
                      id="newpass"
                      placeholder="********"
                    />                    
                  </div>
                </div>

                <div class="row" style="margin-bottom: 20px;">
                  <div class="col">
                    <label for="confirmpass">Confirm Password</label>
                    <input
                      type="password"
                      class="form-control showhide-password"
                      id="confirmpass"
                      placeholder="********"
                    />
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
