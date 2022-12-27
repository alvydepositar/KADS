<!doctype html>
<html lang="en" class="scroller">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KADS | Order History</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- css -->
        <link rel="stylesheet" href="css/header-responsive.css" />
        <link rel="stylesheet" href="css/footer.css" />
        <link rel="stylesheet" href="css/user.css" />
        <link rel="stylesheet" href="css/orderhistory.css" />
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

        <div class="order-content-container container d-flex justify-content-center">          
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
                      <button type="button" class="side-links">Change Password</button>
                    </a>
                  </div>                  
                </div>                
                <div class="row links-title">My Orders</div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-11">
                    <a href="orderhistory.php">
                      <button type="button" class="side-links side-links-active">Order History</button>
                    </a>                    
                  </div>                  
                </div>                  
              </div>
            </div>


            <div class="col right-content-2">
              <h2 class="section-title">My Orders</h2>

              <div class="order-container">
                <div class="container">
                  <div class="row d-flex align-items-center">
                    <div class="col order-header">December 5, 2022, 9:37 PM</div>
                    <div class="col-2 order-progress p-processing">Processing</div>
                  </div>
                </div>                
                <div class="container order-group">
                  <div class="row">
                    <div class="col-auto">
                      <img src="images/order-icon.png" class="order-icon">
                    </div>
                    <div class="col">
                      <div class="row order-item">                        
                        <div class="col"><b>1x</b></div>
                        <div class="col-8">Salmon Roll</div>
                        <div class="col order-price">P150.00</div>
                      </div>
                      <div class="row order-item">                        
                        <div class="col"><b>3x</b></div>
                        <div class="col-8">Cucumber Roll</div>
                        <div class="col order-price">P450.00</div>
                      </div>
                      <div class="row">                        
                        <div class="col"></div>
                        <div class="col-8 total-text"><b>Total</b></div>
                        <div class="col order-total order-price"><b>P600.00</b></div>
                      </div>
                    </div>
                    
                  </div>                  
                </div>
              </div>

              <div class="order-container">
                <div class="container">
                  <div class="row d-flex align-items-center">
                    <div class="col order-header">December 2, 2022, 3:25 PM</div>
                    <div class="col-2 order-progress p-completed">Completed</div>
                  </div>
                </div>     
                <div class="container order-group">
                  <div class="row">
                    <div class="col-auto">
                      <img src="images/order-icon.png" class="order-icon">
                    </div>
                    <div class="col">                      
                      <div class="row order-item">                        
                        <div class="col"><b>3x</b></div>
                        <div class="col-8">Cucumber Roll</div>
                        <div class="col order-price">P450.00</div>
                      </div>
                      <div class="row">                        
                        <div class="col"></div>
                        <div class="col-8 total-text"><b>Total</b></div>
                        <div class="col order-total order-price"><b>P450.00</b></div>
                      </div>
                    </div>
                    
                  </div>                  
                </div>
              </div>

              <div class="order-container">
               <div class="container">
                  <div class="row d-flex align-items-center">
                    <div class="col order-header">November 26, 2022, 9:14 AM</div>
                    <div class="col-2 order-progress p-delivery">Out for Delivery</div>
                  </div>
                </div>     
                <div class="container order-group">
                  <div class="row">
                    <div class="col-auto">
                      <img src="images/order-icon.png" class="order-icon">
                    </div>
                    <div class="col">
                      <div class="row order-item">                        
                        <div class="col"><b>1x</b></div>
                        <div class="col-8">Salmon Roll</div>
                        <div class="col order-price">P150.00</div>
                      </div>
                      <div class="row order-item">                        
                        <div class="col"><b>3x</b></div>
                        <div class="col-8">Cucumber Roll</div>
                        <div class="col order-price">P450.00</div>
                      </div>
                      <div class="row order-item">                        
                        <div class="col"><b>1x</b></div>
                        <div class="col-8">Salmon Roll</div>
                        <div class="col order-price">P150.00</div>
                      </div>
                      <div class="row">                        
                        <div class="col"></div>
                        <div class="col-8 total-text"><b>Total</b></div>
                        <div class="col order-total order-price"><b>P750.00</b></div>
                      </div>
                    </div>
                    
                  </div>                  
                </div>
              </div>

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
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
