
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
    
    .btn-style {
    margin-bottom: 0px;
    font-family: 'Inter';
    font-weight: 600;
    /*margin-left added*/
    margin-left:309px;
    }
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
            <h2>Add Order</h2>
            <?php /*if (isset($_GET['error'])):*/?>
            <p><?php /*echo $_GET['error'];*/?></p>
            <?php /*endif*/?>
            <form action="<?php /*echo htmlspecialchars($_SERVER["PHP_SELF"]);*/?>" method="POST"
                enctype="multipart/form-data">

                <div class="form-group">
                    <label>Order Number</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name"
                        class="form-control <?php /*echo (!empty($name_err)) ? 'is-invalid' : '';*/?>"
                        value="<?php /*echo $name;*/?>">
                    <span class="invalid-feedback">
                        <?php /*echo $name_err;*/?>
                    </span>
                </div>

                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="qty" min="0" value="0" step=".01" class="form-control">
                </div>

                <div class="form-group">
                    <label>Total</label>
                    <input type="number" name="price" min="0" value="0" step=".01"
                        class="form-control <?php /*echo (!empty($price_err)) ? 'is-invalid' : '';*/?>"
                        value="<?php /*echo $price;*/?>">
                    <span class="invalid-feedback">
                        <?php /*echo $price_err;*/?>
                    </span>
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
                    <select name="status" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                        <?php
                        /*if(mysqli_num_rows($result) >= 0) {
                        while($row = mysqli_fetch_assoc($result)){*/
                        ?>
                        <option value="<?php /*echo $row['id']*/?>">
                            <?php /*echo $row['title'];*/?>
                        </option>
                        <?php
                        /*}
                        }*/?>
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

                <input class="btn btn-primary btn-style" type="submit" name="submit" value="Add">

            </form>
        </div>
    </div>
</body>

</html>
<?php
/*}*/
?>