<?php
session_start();

include 'conn.php';
    
    

?>


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
        if(!isset($_SESSION['loggedin'])) {
            include 'header-guest.html';
          } else {
            $username = $_SESSION['username'];
            $id = $_SESSION['id'];
            include 'header-user.php';
          }
    ?>
    
    <!-- cart and order summary page -->    
    <div class="container-fluid main-container">
      <div class="row">
        <div class="col-lg-6 col-12 left-col left-side justify-content-center">
            <p>My Cart</p>
            <a href="userFunctions/emptycart.php"> Empty Cart </a>
            <?php
            $total = 0;
            if(!empty($_SESSION['cart'])) {
                foreach($_SESSION['cart'] as $cart) {
               ?>
            <!-- item -->  
            <div class="d-flex">
                <div class="food-item-1 w-100">
                    <div class="d-flex align-items-center">
                        <div class="food-img flex-shrink-0">
                            <img src="img/menu/<?php echo $cart['product_image'] ?>" alt="food image">
                        </div>

                        <div class="food-content flex-grow-1 ms-3">
                            <h2 class="food-name"><?php echo $cart['product_name'] ?></h2>
                            <!-- price should add up everytime the quantity goes up. 
                            for example, the original price of cucumber roll is 100
                            but the user ordered 2 of it. the total price of cucumber 
                            roll should reflect on the food price-->
                            <?php
                            /*
                            if(isset($_POST['decrement'])){
        
                                $product_id = $_GET['p_id'];
                                $_SESSION['cart'][$product_id]['qty'] -= 1;
                                
                            }
                            if(isset($_POST['increment'])) {
                                
                                $product_id = $_GET['p_id'];
                                $_SESSION['cart'][$product_id]['qty'] += 1;
                            }
                            */
                            ?>
                            <h3 class="food-price">₱<?php echo $cart['product_price'] * $cart['qty']; ?></h3>
                            <form method="post">
                                <div class="quantity">
                                <!--
                                    <a href="cart.php?p_id=<?=$cart['product_id'];?>&qty=<?=$cart['qty'];?>">
                                    <button type="submit" class="decrement" name="decrement"> 
                                    -
                                    </button>
                                    </a> 
                                    
                                    <span class="intnum"><?php //echo $cart['qty']; ?></span>
                                    <a href="cart.php?p_id=<?=$cart['product_id'];?>&qty=<?=$cart['qty'];?>">
                                    <button type="submit" class="increment" name="increment"> 
                                    + 
                                    </button>
                                    </a>
                                
                                    <span class="decrement"> - </span>
                                    <span class="intnum" id="quantity"><?php //echo $cart['qty']; ?></span>
                                    <span class="increment"> + </span>
                                -->
                                
                                    <input type="button" onclick="decrementValue()" value="-" />
                                    <input type="text" name="quantity" value="<?php echo $cart['qty']; ?>" maxlength="2" max="10" size="1" id="number" />
                                    <input type="button" onclick="incrementValue()" value="+" />
                                    
                                    <input type="hidden" name="prod_id" value="<?php echo $cart['product_id']; ?>">
                                    <input type="hidden" name="quantity" value="<?php echo $cart['qty']; ?>">
                                    
                                </div> 
                            </form>
                            <?php $total += ($cart['product_price'] * $cart['qty']); ?>
                        </div>
                    </div>
                </div>                
                <div class="p-2 flex-shrink-1">                    
                    <div class="d-flex align-content-center flex-wrap h-100">
                        <button class="del-btn h-100">
                            <a href="userFunctions/removeitem.php?id=<?= $cart['product_id']; ?>" class="x-unicode">&#128937;</a>
                        </button>        
                    </div>    
                </div>
            </div>                
            <!-- end of item -->
            
            <?php
                    }
                } 
            ?>

            
                     
        </div>   
        
        <div class="col-vline d-none d-lg-block">
            <div class="vline"></div>    
        </div>        
               
        <div class="col-lg-5 col-12 right-col right-side justify-content-center align-self-stretch">
            <p>Order Summary</p>
            <div class="subtotal">
                <h2 class="subtotal-label">Subtotal</h2>
                <span class="subtotal-price">₱<?php echo $total; ?></span>
            </div>
            <div class="df">
                <h2 class="df-label">Delivery Fee</h2>
                <span class="df-price">₱60.00</span>
            </div>

            <div class="hline"></div>

            <div class="total">
                <h2 class="total-label">Total</h2>
                <span class="total-price">₱<?php echo $total+60; ?></span>
            </div>

            <div class="hline"></div>

            <div class="checkout-btn">
                <a href="placeorder.php">
                    <button class="checkout">Checkout</button>
                </a>
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

    <script>
        // for quantity spinner
        /*
        const increment = document.querySelector(".increment"),
            decrement = document.querySelector(".decrement"),
            intnum = document.querySelector(".intnum");
        let a = 1;
        increment.addEventListener("click", () => {
            a++;
            a = (a < 10) ? a : a;
            intnum.innerText = a;
        });

        decrement.addEventListener("click", () => {
            if (a > 1) {
                a--;
                a = (a < 10) ? a : a;
                intnum.innerText = a;
            }
        });
        */

        function incrementValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            if(value<10){
                value++;
                document.getElementById('number').value = value;
            }
        }
    function decrementValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>1){
            value--;
            document.getElementById('number').value = value;
        }
    }
        
    </script>
    
</body>

</html>