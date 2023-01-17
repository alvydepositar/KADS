<?php
session_start();
// check if user is logged in
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    //user is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
    //user has role 2, redirect to userprofile.php
    header("Location: ../userprofile.php");
    exit();
} 

    include '../conn.php';

    $order_number = $_GET['o_id'];

    // fetch the order details from the database
    $query = "SELECT * FROM user_orders JOIN products ON user_orders.product_id = products.p_id WHERE user_orders.order_number = '$order_number'";
    $result = mysqli_query($conn, $query);

    // create an empty array to store the order details
    $order = array();

    // fetch each row and store it in the array
    while ($row = mysqli_fetch_assoc($result)) {
        $order[] = $row;
    }

    // close the connection
    mysqli_close($conn);

    // print the order details
    print_r($order);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KADS | Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/logo.png">
    <link rel="stylesheet" href="./css/customerstyle.css">
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="../css/pagestyles.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Inter');
    @import url('https://fonts.googleapis.com/css?family=Readex Pro');

    body {font: 14px sans-serif; background-color: #e7e7e7; color: #141C07;}
</style>
<body>
    <div class="wrapper">
        <div class="top-line"></div>  
        <div class="back-icon">
            <a href="../admin/order-history.php">
                <img src="../img/backicon.png">
            </a>
        </div>   
        <div class="edituserblock">
            <h2>Edit Order</h2> 

            <?php /*if (isset($_GET['error'])):*/ ?>
            <p><?php /*echo $_GET['error'];*/ ?></p>
            <?php /*endif*/ ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Order Number</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $id; ?>" disabled>
                </div>

                <?php
                $query1 = "SELECT * FROM products WHERE p_id = "
                //while($order = mysqli_fetch_assoc($result)){ ?>
                <div class="form-group">
                    <label>Orders</label>
                    <input type="number" value="<?php echo $order['quantity'] ?>" name="qty" min="0" value="0" step=".01" class="form-control">
                </div>
                <?php //} ?>

                <div class="form-group">
                    <label>Total</label>
                    <input type="number" name="price" min="0" value="0" step=".01" class="form-control <?php /*echo (!empty($price_err)) ? 'is-invalid' : '';*/ ?>" value="<?php /*echo $price;*/ ?>">
                    <span class="invalid-feedback"><?php /*echo $price_err;*/ ?></span>
                </div>

                <div class="form-group">
                    <label>Date of Order</label>
                    <input type="date" name="date" class="form-control">
                </div>

                <div class="form-group">
                    <label>Time of Order</label>
                    <input type="time" name="time" class="form-control">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name ="status" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                        <?php
                            /*if(mysqli_num_rows($result) >= 0) {
                                while($row = mysqli_fetch_assoc($result)){*/
                        ?>
                        <option value="<?php /*echo $row['id']*/ ?>"> <?php /*echo $row['title'];*/ ?> </option>
                        <?php 
                                /*}
                            }*/ ?>
                    </select> 
                </div>

                <div class="form-group">
                    <label>Customer</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Server</label>
                    <input type="text" name="name" class="form-control">
                </div>
            <input class="btn btn-primary btn-style" type="submit" name="submit" value="Update" style="margin-left:286px;">            
        </form>
        </div>
    </div> 
</body>
</html>