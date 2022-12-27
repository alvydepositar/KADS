<!DOCTYPE html>
<html lang="en" class="scroller">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KADS | Menu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/header-responsive.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/03977197ef.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header start -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid navbar-content">
          <a class="navbar-brand" href="/KADS">
              <img src="images/kads_logo_1.png" alt="" height="85" id="headerlogo">
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/KADS" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active activelink" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <ul class="navbar-nav">
              <li class="nav-item">
                <a href="login.php">
                  <button class="btn btn-primary" type="submit" id="sign-in-menu">Sign In</button>
                </a>
                <a href="registration.php">
                  <button class="btn btn-primary" type="submit" id="register-menu">Register</button>     
                </a>
                                      
                  <a href="login.php">
                    <img class="cart" src="images/cart-vector-menu.png" alt="cart" height="25" width="25"/>
                  </a>                
              </li>                               
              <li class="nav-responsive-padding-bottom"></li>                  
          </ul>
        </div>
      </div>
    </nav>       
    <!-- header end -->

    <!-- menu showcase -->
    <div class="d-flex content-1">
      <div class="me-auto ml-auto left1 align-self-center">
        <div class="description_left">
            <img class="town-emoji" src="images/town-emoji.png">
            <span class="description_tagline">THE BEST SUSHI IN TOWN</span>
            <p class="description_header">Different Types of Sushi to Choose From!</p>
            <p class="description_text">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus
                vestibulum,
                facilisi ac, sed facibus. At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis c</p>
        </div>
      </div>
      <div class="description_right">
        <img class="sushi-blob" src="images/sushi-blob.png">
      </div>
    </div>
    <!-- end of menu showcase -->

    <!-- menu -->
    <div class="menu_container">

        <div class="title">
            <h2>Our Menu</h2>
        </div>

        <!-- category buttons-->
        <div class="content">
            <div class="list">
                <li data-color=".All">All</li>
                <li data-color=".sushi">Sushi Rolls</li>
                <li data-color=".temaki">Temaki Wraps</li>
                <li data-color=".bento">Bento Box</li>
                <li data-color=".platters">Platters</li>
                <li data-color=".cakes">Cakes</li>
            </div>
        </div>
        <!-- end of category buttons-->

        <!-- categories -->
        <div class="menu_box">
            <!-- sushi -->
            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/cucumber-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Cucumber Roll</p>
                    <section>₱100.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/kani-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Kani Roll</p>
                    <section>₱150.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/tamago-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Tamago Roll</p>
                    <section>₱150.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/wakame-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Wakame Roll</p>
                    <section>₱150.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/salmon-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Salmon Roll</p>
                    <section>₱190.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/tuna-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Tuna Roll</p>
                    <section>₱190.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/spicy-kani-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Spicy Kani Roll</p>
                    <section>₱230.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/bonito-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Bonito Roll</p>
                    <section>₱230.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/bny-roll.png" alt="">
                </div>
                <div class="text">
                    <p>BNY Roll</p>
                    <section>₱230.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/california-roll.png" alt="">
                </div>
                <div class="text">
                    <p>California Roll</p>
                    <section>₱230.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/crazy-kani-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Crazy Kani Roll</p>
                    <section>₱230.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/okonomiyaki-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Okonomiyaki Roll</p>
                    <section>₱230.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/fireball-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Firecracker Roll</p>
                    <section>₱290.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/ay-caramba-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Caramba Roll</p>
                    <section>₱290.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/sushi-dreams-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Sushi Dreams Roll</p>
                    <section>₱290.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/ninja-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Ninja Roll</p>
                    <section>₱290.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/chicken-winner-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Chicken Roll</p>
                    <section>₱290.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/guardian-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Guardian Roll</p>
                    <section>₱290.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/omg-roll.png" alt="">
                </div>
                <div class="text">
                    <p>OMG Roll</p>
                    <section>₱390.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/cloud9-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Cloud 9 Roll</p>
                    <section>₱390.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/golden-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Golden Roll</p>
                    <section>₱390.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/og-roll.png" alt ="">
                </div>
                <div class="text">
                    <p>OG Roll</p>
                    <section>₱390.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/ss-roll.png" alt="">
                </div>
                <div class="text">
                    <p>SS Roll</p>
                    <section>₱390.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/sunshine-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Sunshine Roll</p>
                    <section>₱450.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/spicy-tuna-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Spicy Tuna Roll</p>
                    <section>₱450.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/fireball-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Fireball Roll</p>
                    <section>₱450.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/lava-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Lava Roll</p>
                    <section>₱450.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/super-cali-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Super Cali Roll</p>
                    <section>₱550.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All sushi">
                <div class="box_img">
                    <img src="products/godzilla-roll.png" alt="">
                </div>
                <div class="text">
                    <p>Godzilla Roll</p>
                    <section>₱550.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <!-- temaki wraps -->
            <div class="box All temaki">
                <div class="box_img">
                    <img src="products/california-temaki.png" alt="">
                </div>
                <div class="text">
                    <p>California Temaki</p>
                    <section>₱190.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All temaki">
                <div class="box_img">
                    <img src="products/okonomiyaki-temaki.png" alt="">
                </div>
                <div class="text">
                    <p class="text_long">Okonomiyaki Temaki</p>
                    <section>₱190.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All temaki">
                <div class="box_img">
                    <img src="products/crazy-kani-temaki.png" alt="">
                </div>
                <div class="text">
                    <p>Crazy Kani Temaki</p>
                    <section>₱190.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All temaki">
                <div class="box_img">
                    <img src="products/sushi-dreams-temaki.png" alt="">
                </div>
                <div class="text">
                    <p class="text_long">Sushi Dreams Temaki</p>
                    <section>₱250.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All temaki">
                <div class="box_img">
                    <img src="products/firecracker-temaki.png" alt="">
                </div>
                <div class="text">
                    <p>Firecracker Temaki</p>
                    <section>₱250.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All temaki">
                <div class="box_img">
                    <img src="products/ay-caramba-temaki.png" alt="">
                </div>
                <div class="text">
                    <p>Caramba Temaki</p>
                    <section>₱250.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <!-- bento box -->
            <div class="box All bento">
                <div class="box_img">
                    <img src="products/classic-mix-bento.png" alt="">
                </div>
                <div class="text">
                    <p>Classix Mix Bento</p>
                    <section>₱500.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All bento">
                <div class="box_img">
                    <img src="products/aburi-mix-bento.png" alt="">
                </div>
                <div class="text">
                    <p>Aburi Mix Bento</p>
                    <section>₱500.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All bento">
                <div class="box_img">
                    <img src="products/tuna-overload-bento.png" alt="">
                </div>
                <div class="text">
                    <p class="text_long">Tuna Overload Bento</p>
                    <section>₱600.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All bento">
                <div class="box_img">
                    <img src="products/salmon-overload-bento.png" alt="">
                </div>
                <div class="text">
                    <p>Salmon Bento</p>
                    <section>₱600.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <!-- platters -->
            <div class="box All platters">
                <div class="box_img">
                    <img src="products/basic.png" alt="">
                </div>
                <div class="text">
                    <p>Basic Party Platter</p>
                    <section>₱1,500.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All platters">
                <div class="box_img">
                    <img src="products/deluxe.png" alt="">
                </div>
                <div class="text">
                    <p class="text_long">Deluxe Party Platter</p>
                    <section>₱1,900.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All platters">
                <div class="box_img">
                    <img src="products/poké.png" alt="">
                </div>
                <div class="text">
                    <p>Poké Party Platter</p>
                    <section>₱2,300.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All platters">
                <div class="box_img">
                    <img src="products/premium.png" alt="">
                </div>
                <div class="text">
                    <p class="text_long">Premium Party Platter</p>
                    <section>₱2,500.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <!-- cakes -->
            <div class="box All cakes">
                <div class="box_img">
                    <img src="products/veggie-sushi-cake.png" alt="">
                </div>
                <div class="text">
                    <p>Veggie Sushi Cake</p>
                    <section>₱1,300.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All cakes">
                <div class="box_img">
                    <img src="products/classic-sushi-cake.png" alt="">
                </div>
                <div class="text">
                    <p>Classic Sushi Cake</p>
                    <section>₱1,500.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All cakes">
                <div class="box_img">
                    <img src="products/spicy-sushi-cake.png" alt="">
                </div>
                <div class="text">
                    <p>Spicy Sushi Cake</p>
                    <section>₱1,500.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="box All cakes">
                <div class="box_img">
                    <img src="products/rose-sushi-cake.png" alt="">
                </div>
                <div class="text">
                    <p>Rose Sushi Cake</p>
                    <section>₱1,600.00</section>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- end of categories -->
    </div>
    <!-- end of menu-->

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
        let list = document.querySelectorAll(".list li");
        let box = document.querySelectorAll(".box");

        list.forEach((el) => {
            el.addEventListener("click", (e) => {
                list.forEach((el1) => {
                    el1.style.background = "#2c293a";
                })
                e.target.style.background = "#c70800"
                box.forEach((el2) => {
                    el2.style.display = "none";
                })
                document.querySelectorAll(e.target.dataset.color).forEach((el3) => {
                    el3.style.display = "grid";
                })
            })
        })
    </script>
</body>

</html>