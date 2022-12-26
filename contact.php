<!DOCTYPE html>
<html lang="en" class="scroller">

<head>
  <meta charset="utf-8" />
  <title>KADS | Contact Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- css -->
  <link rel="stylesheet" href="css/contactus.css" />
  <link rel="stylesheet" href="css/header-responsive.css" />     
    <link rel="stylesheet" href="css/footer.css" />  
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
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active activelink" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
              <a href="login.php">
                <button class="btn btn-primary" type="submit" id="sign-in">Sign In</button>
              </a>
              <a href="registration.php">
                <button class="btn btn-primary" type="submit" id="register">Register</button>     
              </a>
                                    
                <a href="login.php">
                  <img class="cart" src="images/cart-vector-1.png" alt="cart" height="25" width="25"/>
                </a>                
            </li>                               
            <li class="nav-responsive-padding-bottom"></li>                  
        </ul>
      </div>
    </div>
  </nav>       
  <!-- header end -->

  <!-- body -->
  <div class="subheader">
    <h1 class="title">GET IN TOUCH</h1>
    <div class="line">
      <img src="images/line.png">
    </div>
  </div>


  <div class="Row">

    <div class="col1">
      <p class="intro">Leave us a message!</p>
      <div class="textinputs">
        <div class="namebox">
          <input type="text" class="form-control" id="name" placeholder="Name" /><br>
        </div>
        <div class="emailbox">
          <input type="text" class="form-control" id="email" placeholder="Email Address" /><br>
        </div>
        <div class="textareabox">
          <textarea class="form-control" rows="8" cols="40"
            placeholder="Send us your concerns, feedbacks, etc."></textarea>
        </div><br><br>
        <button type="submit" class="btn btn-send">Send</button>
      </div>
    </div>

    <div class="col2ctn">
      <div class="col2">
        <div class="col2col2">
          <br>
          <br>
          <br>

          <p class="Address">Address: General Luna, corner Muralla Intramuros, Manila, 1002 Metro Manila</p>
          <p class="Phone">Phone: (02) 8643 2500 </p>
          <p class="Email">Email: hello@info.com.ph</p>
        </div>
        <div class="col2col1"><img class="mail" src="images/mail.png" alt="Mail Logo"></div>
      </div>
      <img class="map" src="images/map.png" alt="Map" />
    </div>
  </div>

  <!-- body -->

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>