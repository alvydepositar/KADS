<!DOCTYPE html>
<html lang="en">
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
    <!-- css -->
    <link rel="stylesheet" href="css/header-responsive.css" /> 
    <link rel="stylesheet" href="css/changePass.css" />
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
  </head>
  <body>
    <?php
      include 'header-user.html';
    ?>

    <div class="content-container container d-flex justify-content-center">
      <div class="row content-wrapper">
        <div class="col-4 left-content">
          <div class="container">
            <div class="row links-title">My Account</div>
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
                <label for="Password">Current Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  placeholder="********"
                />
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label for="inputLastName">New Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="newpass"
                  placeholder="********"
                />
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label for="inputEmail">Confirm Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="confirmpass"
                  placeholder="********"
                />
              </div>
            </div>

            <button type="submit" class="btn btn-save">Change Password</button>
          </form>
        </div>
      </div>
    </div>
    
    
    
    <?php
      include 'footer.html';
    ?>
    
    <!-- bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
