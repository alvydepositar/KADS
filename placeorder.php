<!doctype html>
<html lang="en" class="scroller">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KADS | Place Order</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- css -->   
    <link rel="stylesheet" href="css/header-responsive.css" />             
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/placeorder.css" />
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
        <h1 class="content-title">Place Order</h1>
        <div class="title-line"></div>
        <form>
          <div class="row">
            <div class="col">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" id="firstname" placeholder="First name">
            </div>

            <div class="col">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" id="lastname" placeholder="Last name">
            </div>
          </div>
          
          <div class="row">                  
            <div class="col">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com">                    
            </div>
          </div>     

          <div class="form-group">
            <label for="address">Delivery Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St">
          </div>  
          
          <div class="row">
            <div class="col">
              <label for="city">City</label>
              <select type="text" class="form-control" id="city">
                <option value="Caloocan">Caloocan</option>
                <option value="LasPiñas">Las Piñas</option>
                <option value="Makati">Makati</option>
                <option value="Malabon">Malabon</option>
                <option value="Mandaluyong">Mandaluyong</option>
                <option value="Manila">Manila</option>
                <option value="Marikina">Marikina</option>
                <option value="Muntinlupa">Muntinlupa</option>
                <option value="Navotas">Navotas</option>
                <option value="Parañaque">Parañaque</option>
                <option value="Pasay">Pasay</option>
                <option value="Pasig">Pasig</option>
                <option value="Pateros">Pateros</option>
                <option value="QuezonCity">Quezon City</option>
                <option value="SanJuan">San Juan</option>
                <option value="Taguig">Taguig</option>
                <option value="Valenzuela">Valenzuela</option>
              </select>
            </div>
            <div class="col">
              <label for="province">Province</label>
              <select id="province" name="province" class="form-control">
                <option value="metroManila">Metro Manila</option>
              </select>
            </div>
          </div>

          <div class="row">                  
            <div class="col lblstyle">
              <label for="zip">ZIP Code</label>
              <input type="text" class="form-control" id="zip" 
                placeholder="ZIP" 
                pattern="[0-9]{4}" 
                maxlength="4">
            </div>

            <div class="col lblstyle">
              <label for="pnumber">Phone</label>
              <input type="text" class="form-control" id="pnumber"
                placeholder="09*********"
                pattern="[0-9]{4}[0-9]{3}[0-9]{4}"
                minlength="11"
                maxlength="11">
            </div>
          </div>    
      
          <!--<div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              My billing and delivery address are the same</label>
          </div>-->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Create an account for later</label>
          </div>
          <a href="ongoingorder.php">
            <button type="submit" class="btn-submit">Place Order</button>            
          </a>    
        </form>
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
    <!-- input mask for phone number -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
      $(document).ready(function() {
          $("#pnumber").inputmask('99999999999');
          $("#zip").inputmask('9999');
      }); 
    </script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
