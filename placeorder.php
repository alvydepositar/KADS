<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KADS | Place Order</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- css -->   
        <link rel="stylesheet" href="css/header-responsive.css" />             
        <link rel="stylesheet" href="css/footer.css" />
        <link rel="stylesheet" href="css/user.css" />
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
          <div class="content-container">
            <div class="content-wrapper container-fluid">
              <h1 class="content-title">Billing Address</h1>
              <div class="title-line"></div>
              <form>
                <div class="row">
                  <div class="col">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="First name">
                  </div>
                  <div class="col">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Last name">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail">Email Address</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com">
                </div>           

                <div class="form-group">
                  <label for="inputAddress">Street Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="row">
                  <div class="col">
                    <label for="inputProvince">Province</label>
                    <input type="text" class="form-control" id="inputProvince" placeholder="Province">
                  </div>
                  <div class="col">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="City">
                  </div>
                </div>
                <div class="row">                  
                  <div class="col">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="Zip">
                  </div>
                  <div class="col">
                    <label for="inputZip">Phone</label>
                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone number">
                  </div>
                </div>    
                
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    My billing and delivery address are the same</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    Create an account for later</label>
                </div>
                <a href="orderhistory.php">
                  <button type="submit" class="btn-submit">Place Order</button>            
                </a>    
              </form>
            </div>  
                    
          </div>
          
          <?php
            include 'footer.html';
          ?>


        <!---------------------JS-------------------->        
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
