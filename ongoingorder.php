<!DOCTYPE html>
<html lang="en" class="scroller">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KADS | Ongoing Order</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/header-responsive.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/ongoingorder.css" />
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/03977197ef.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        include 'header-user.html';
    ?>
    
    <!-- cart and order summary page -->    
    <div class="container-fluid main-container">
      <div class="row"> 
        <div class="col-back">
            <div class="back-icon">
                <a href="../KADS/orderhistory.php">
                    <img src="img/backicon.png">
                </a>
            </div>   
        </div>                  
        <div class="col-lg col left-col left-side justify-content-center"> 
            <p>Ongoing Order</p>
            <div class="status">
                <h2 class="status-label">Status</h2>
                <div class="order-progress p-preparing">Preparing</div>
                <div class="order-progress p-delivery">Out for Delivery</div>
                <div class="order-progress p-completed">Completed</div>
                <div class="order-progress p-none">No ongoing order</div>
            </div>
            <div class="hline"></div>
            <!-- item -->  
            <div class="d-flex">
                <div class="food-item-1 w-100">
                    <div class="d-flex align-items-center">
                        <div class="food-img flex-shrink-0">
                            <img src="products/cucumber-roll.png" alt="food image">
                        </div>
                        <div class="food-content flex-grow-1 ms-3">
                            <div class="fn">
                                <h2 class="food-name">Cucumber Roll</h2>
                                <span class="fn-quantity">x 1</span>
                            </div> 
                            <!-- price should add up everytime the quantity goes up. 
                            for example, the original price of cucumber roll is 100
                            but the user ordered 2 of it. the total price of cucumber 
                            roll should reflect on the food price-->
                            <span class="food-price">₱200.00</span>                            
                        </div>
                    </div>
                </div>                
            </div>                
            <!-- end of item -->

            <!-- item -->  
            <div class="d-flex">
                <div class="food-item-1 w-100">
                    <div class="d-flex align-items-center">
                        <div class="food-img flex-shrink-0">
                            <img src="products/tuna-roll.png" alt="food image">
                        </div>
                        <div class="food-content flex-grow-1 ms-3">
                            <div class="fn">
                                <h2 class="food-name">Tuna Roll</h2>
                                <span class="fn-quantity">x 1</span>
                            </div>                              
                            <!-- price should add up everytime the quantity goes up. 
                            for example, the original price of cucumber roll is 100
                            but the user ordered 2 of it. the total price of cucumber 
                            roll should reflect on the food price-->
                            <span class="food-price">₱190.00</span> 
                        </div>
                    </div>
                </div>                
            </div>                
            <!-- end of item --> 
            
            <!-- item -->  
            <div class="d-flex">
                <div class="food-item-1 w-100">
                    <div class="d-flex align-items-center">
                        <div class="food-img flex-shrink-0">
                            <img src="products/kani-roll.png" alt="food image">
                        </div>
                        <div class="food-content flex-grow-1 ms-3">
                            <div class="fn">
                                <h2 class="food-name">Kani Roll</h2>
                                <span class="fn-quantity">x 3</span>
                            </div>   
                            <!-- price should add up everytime the quantity goes up. 
                            for example, the original price of cucumber roll is 100
                            but the user ordered 2 of it. the total price of cucumber 
                            roll should reflect on the food price-->
                            <span class="food-price">₱450.00</span>                            
                        </div>
                    </div>
                </div>                
            </div>                
            <!-- end of item -->                 
        </div>   
        
        <div class="col-vline d-none d-lg-block"></div>        
               
        <div class="col-lg-4 col-12 right-col right-side justify-content-center align-self-stretch">
            <p>Order Summary</p>
            <div class="subtotal">
                <h2 class="subtotal-label">Subtotal</h2>
                <span class="subtotal-price">₱840.00</span>
            </div>
            <div class="df">
                <h2 class="df-label">Delivery Fee</h2>
                <span class="df-price">₱60.00</span>
            </div>

            <div class="hline"></div>

            <div class="total">
                <h2 class="total-label">Total</h2>
                <span class="total-price">₱900.00</span>
            </div>

            <div class="hline"></div>    
            
            <p>Delivery Address</p>
            <div class="delivery-details">
                <h2 class="delivery-label">Ansherina T. Albaros</h2>
                <h4 class="delivery-number">09123456789</h4>
                <h4 class="delivery-address">1234 Main St. Caloocan Metro Manila 1425</h4>
            </div>            
        </div>
      </div>      
    </div>    
    <!-- end of cart and order summary page -->

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
</body>

</html>