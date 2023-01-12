<?php
session_start();

include 'conn.php';
  
?>

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
<style>
  
</style>
<body>
  <?php if(!isset($_SESSION['loggedin'])) {
          include 'header-guest.html';
        } else {
          $username = $_SESSION['username'];
          $id = $_SESSION['id'];
          include 'header-user.php';
        }
  ?>
    <!-- header start 
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
     header end -->

    <!-- menu showcase -->
    <div class="d-flex content-1">
      <div class="me-auto ml-auto left1 align-self-center">
        <div class="description_left">
            <img class="town-emoji" src="images/town-emoji.png">
            <span class="description_tagline">THE BEST SUSHI IN TOWN</span>
            <p class="description_header">Different Types of Sushi to Choose From!</p>
            <p class="description_text">Repetitive sushi flavors are bland! It can be as bitter as reality and as repulsive as swallowing live rats. Like the same flavor emperor KADS took every day to stop himself being poisoned, fine sushi must be taken daily until the taste buds are satisfied and all flavors under the sun are  savoured.
                No life is complete without the different sushi flavors to get your taste buds to explode!</p>
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
                <?php 
                $sql1 = "SELECT * FROM categories" ;
                $result = mysqli_query($conn, $sql1);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)){
                        $getFirstWord = explode(" ", $row['categoryName']);
                        $sort = strtolower($getFirstWord[0]);
                ?>
                <li data-color=".<?php echo $sort; ?>"><?php echo $row['categoryName']; ?></li>
                <?php } 
                }?> 
            </div>
        </div>
        
        <!-- end of category buttons-->

        <!-- categories -->
        <div class="menu_box">
        <?php 
            $sql2 = "SELECT * FROM products INNER JOIN categories ON products.category = categories.id" ;
            $result = mysqli_query($conn, $sql2);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)){
                        $getFirstWord = explode(" ", $row['categoryName']);
                        $sort = strtolower($getFirstWord[0]);
            ?>

            <div class="box All <?php echo $sort; ?>">
                <div class="box_img">
                    <img src="img/menu/<?=$row['image']?>" alt="">
                </div>
                <div class="text">
                  <div class="text-info d-flex align-items-center justify-content-center">
                    <p class="align-middle"><?php echo $row['productName']; ?></p>                    
                  </div>
                  <section>₱<?php echo $row['price']; ?></section>
                  <button>Add to Cart</button>
                </div>
            </div>
            <?php } 
                }?> 
            
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