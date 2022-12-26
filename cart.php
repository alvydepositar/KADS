<!DOCTYPE html>
<html lang="en" class="scroller">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KADS | Cart</title>
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
    <link rel="stylesheet" href="css/cart.css" />
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
    <section class="cartsummary-wrapper">
        <div class="cartsummary-container">
            <!-- cart -->
            <div class="left-side">
                <p>My Cart</p>

                <!-- item -->  
                <div class="d-flex">
                    <div class="food-item-1 w-100">
                        <div class="d-flex align-items-center">
                            <div class="food-img flex-shrink-0">
                                <img src="products/cucumber-roll.png" alt="food image">
                            </div>
                            <div class="food-content flex-grow-1 ms-3">
                                <h2 class="food-name">Cucumber Roll</h2>
                                <!-- price should add up everytime the quantity goes up. 
                                for example, the original price of cucumber roll is 100
                                but the user ordered 2 of it. the total price of cucumber 
                                roll should reflect on the food price-->
                                <h3 class="food-price">₱200.00</h3>
                                <div class="quantity">
                                    <span class="decrement">-</span>
                                    <span class="intnum">01</span>
                                    <span class="increment">+</span>
                                </div>
                            </div>
                        </div>
                    </div>                
                    <div class="p-2 flex-shrink-1">                    
                        <div class="d-flex align-content-center flex-wrap h-100">
                            <button class="del-btn btn h-100">
                                <a href="" class="x-unicode">&#128937;</a>
                            </button>        
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
                                <h2 class="food-name">Tuna Roll</h2>
                                <!-- price should add up everytime the quantity goes up. 
                                for example, the original price of cucumber roll is 100
                                but the user ordered 2 of it. the total price of cucumber 
                                roll should reflect on the food price-->
                                <h3 class="food-price">₱190.00</h3>
                                <div class="quantity">
                                    <span class="decrement">-</span>
                                    <span class="intnum">01</span>
                                    <span class="increment">+</span>
                                </div>
                            </div>
                        </div>
                    </div>                
                    <div class="p-2 flex-shrink-1">                    
                        <div class="d-flex align-content-center flex-wrap h-100">
                            <button class="del-btn btn h-100">
                                <a href="" class="x-unicode">&#128937;</a>
                            </button>        
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
                                <h2 class="food-name">Kani Roll</h2>
                                <!-- price should add up everytime the quantity goes up. 
                                for example, the original price of cucumber roll is 100
                                but the user ordered 2 of it. the total price of cucumber 
                                roll should reflect on the food price-->
                                <h3 class="food-price">₱450.00</h3>
                                <div class="quantity">
                                    <span class="decrement">-</span>
                                    <span class="intnum">01</span>
                                    <span class="increment">+</span>
                                </div>
                            </div>
                        </div>
                    </div>                
                    <div class="p-2 flex-shrink-1">                    
                        <div class="d-flex align-content-center flex-wrap h-100">
                            <button class="del-btn btn h-100">
                                <a href="" class="x-unicode">&#128937;</a>
                            </button>        
                        </div>    
                    </div>
                </div>                
                <!-- end of item -->
            </div>
            <!-- end of cart -->

            <div class="vline"></div>

            <!-- order summary -->
            <div class="right-side">
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

                <div class="checkout-btn">
                    <a href="placeorder.php">
                        <button class="checkout">Checkout</button>
                    </a>
                </div>
            </div>
            <!-- end of order summary -->
    </section>
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

    <script>
        // for quantity spinner
        const increment = document.querySelector(".increment"),
            decrement = document.querySelector(".decrement"),
            intnum = document.querySelector(".intnum");
        let a = 1;
        increment.addEventListener("click", () => {
            a++;
            a = (a < 10) ? "0" + a : a;
            intnum.innerText = a;
        });

        decrement.addEventListener("click", () => {
            if (a > 1) {
                a--;
                a = (a < 10) ? "0" + a : a;
                intnum.innerText = a;
            }
        });
    </script>
</body>

</html>