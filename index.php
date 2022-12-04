<!doctype html>
<html lang="en">
    <head>     


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KADS</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- css -->
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/header-responsive.css" />
        <!-- favicon -->
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
    </head>
    <body>
        <!-- header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid navbar-content">
                <a class="navbar-brand" href="#">
                    <img src="images/kads_logo_1.png" alt="" height="85" id="headerlogo">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active activelink" aria-current="page" href="index.php" >Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
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
                                           
                        <a href="#">
                          <img class="cart" src="images/cart-vector-1.png" alt="cart" height="25" width="25"/>
                        </a>                
                    </li>                               
                    <li class="nav-responsive-padding-bottom"></li>                  
                </ul>
              </div>
            </div>
        </nav>
        <!-- header modal -->
        <div id="id01" class="modal">
            <form
            class="modal-content animate"
            action="/action_page.php"
            method="post"
            >
                <div class="imgcontainer">
                    <span
                    onclick="document.getElementById('id01').style.display='none'"
                    class="close"
                    title="Close Modal"
                    >
                    &times;
                    </span>
                    <img src="images/kads_logo_1.png" alt="Avatar" class="avatar" />
                </div>

                <div class="container">
                    <label for="uname"><b>E-mail</b></label>
                    <input
                    type="text"
                    placeholder="Enter E-mail Address"
                    name="uname"
                    required
                    />

                    <label for="psw"><b>Password</b></label>
                    <input
                    type="password"
                    placeholder="Enter Password"
                    name="psw"
                    required
                    />

                    <label>
                    <input type="checkbox" checked="checked" name="remember" /> Remember
                    me
                    </label>

                    <button type="submit" class="login">Login</button>
                </div>

                <div class="container" style="background-color: #f1f1f1">
                    <button
                    type="button"
                    onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn"
                    >
                    Cancel
                    </button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                
                <h1>This is</h1>
                <h1>how we</h1>
                <h1>roll! &#x1F363&#x1F962</h1>
            
              </div>
              <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Delectus eius distinctio odit, magni magnam qui ex perferendis
                vitae!
              </p>
              <div class="cta">
                <a href="#" class="btn">Order Now</a>
              </div>
            </div>

            <div class="right">
              <img src="kads_landing_pic.png"  class="landing_pic" />
            </div>
          </div>
        </div>






















        <!--header script-->
        <script>
            // Get the modal
            var modal = document.getElementById("id01");
      
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                modal.style.display = "none";
                }
            };


        </script>

        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
