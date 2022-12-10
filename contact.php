<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>KADS | Contact Us</title>
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
    <link rel="stylesheet" href="css/footer.css" />  
    <link rel="stylesheet" href="css/contact.css"/>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/03977197ef.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
      include 'header-user.html';
    ?>
    
    <!-- body -->
    <div class="subheader">
        <h1 class="title">GET IN TOUCH</h1>
        <div class="line">
         <img src="images/line.png">
        </div>
    </div>

<div class="Row">
    <section class="row2">
        <p class="intro">Leave us a message!</p>
        <div class="mail">
            <img src="images/mail.png">
          </div> 
    </section>
    <div class="try">
    <div class="col1">
        <div class="textinputs">
        <div class="namebox">
            <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Name"
                /><br>
        </div>  
           <div class="emailbox">
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  placeholder="Email Address"
                /><br>
           </div>
            <div class="txtarea">
              <textarea rows="8" cols="40"placeholder="Send us your concerns, feedbacks, etc."></textarea><br><br>
            </div>
             <button type="submit" class="btn btn-send">Send</button>
        </div>
      </div>
      <div class="col2">
     <p class="Address">Address: General Luna, corner Muralla Intramuros, Manila, 1002 Metro Manila</p>
     <p class="Phone">Phone: (02) 8643 2500 </p> 
     <p class="Email">Email: hello@info.com.ph</p>
       <div class="map">
         <img src="images/map.png">
       </div>
    </div>
 </div>
</div>
    <!-- body -->


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
