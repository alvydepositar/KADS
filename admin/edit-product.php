<?php
/*session_start();

    if (!isset($_SESSION["loggedin"]) && !isset($_SESSION['role'])){
        header("location: ../admin.php");
        exit;
    } else if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["role"] === 2) {
        header("location: ../cashier/index.php");
        exit;
    } else {
    include "../dbconnection.php";

    $username = $_SESSION['username'];
    
    $name = $desc = $price = $image =  "";
    $name_err = $desc_err = $price_err = $image_err = "";

    if(isset($_GET["edit"])){
        $id = $_GET['edit'];

        $sql1 = (mysqli_query($conn, "SELECT * FROM products INNER JOIN category ON products.categoryid = category.id WHERE products.id = $id"));
        
            $pro = mysqli_fetch_array($sql1); 
            $name = $pro["product_name"];
            $desc = $pro["description"];
            $price = $pro["price"];
            $image = $pro["image_url"];
            $category = $pro["categoryid"];
    }


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $price = $_POST["price"];
    $category = $_POST["category"];

    $image = $_FILES['my_image'];

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: products.php?error=$em");
		} else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../img/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
    
			} else {
				$em = "You can't upload files of this type";
		        header("Location: products.php?error=$em");
			}
		}
    
	}
    
    mysqli_query($conn, "UPDATE products SET product_name = '$name', description = '$desc' , price = '$price', image_url = '$new_img_name', categoryid = '$category' WHERE id = $id");
    header("Location: products.php");
}*/  

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
    body{font: 14px sans-serif; background-color:#e7e7e7; font-family: 'Poppins';color: #141C07;}
    .btn-style, .btn-style:hover{
        color:#fff;
    }
</style>
<body>
    <div class="wrapper">
        <div class="top-line"></div>  
        <div class="back-icon">
            <a href="../admin/products.php">
                <img src="../img/backicon.png">
            </a>
        </div>   
        <div class="edituserblock">
            <h2>Edit Product</h2> 

            <?php /*if (isset($_GET['error'])):*/ ?>
            <p><?php /*echo $_GET['error'];*/ ?></p>
            <?php /*endif*/ ?>

            <form action="<?php /*echo htmlspecialchars($_SERVER["PHP_SELF"]);*/ ?>" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php /*echo $id;*/ ?>">
                <div class="form-group">
                    <input type="file" name="my_image" class="form-control <?php /*echo (!empty($image_err)) ? 'is-invalid' : '';*/ ?>" value="<?php /*echo $image;*/ ?>">
                </div>

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control <?php /*echo (!empty($name_err)) ? 'is-invalid' : '';*/ ?>" value="<?php /*echo $name;*/ ?>">
                    <span class="invalid-feedback"><?php /*echo $name_err;*/ ?></span>
                </div>

                <div class="form-group">
                    <label>Product Description</label>
                    <input type="text" name="desc" class="form-control <?php /*echo (!empty($desc_err)) ? 'is-invalid' : '';*/ ?>" value="<?php /*echo $desc;*/ ?>">
                    <span class="invalid-feedback"><?php /*echo $desc_err;*/ ?></span>
                </div>

                <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" name="price" min="0"  step=".01" class="form-control <?php /*echo (!empty($price_err)) ? 'is-invalid' : '';*/ ?>" value="<?php /*echo $price;*/ ?>">
                    <span class="invalid-feedback"><?php /*echo $price_err;*/ ?></span>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name ="category" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                        <?php
                        /*$query="SELECT * FROM category";
                        $result=mysqli_query($conn, $query);
                    
                            if(mysqli_num_rows($result) >= 0) {
                                while($row = mysqli_fetch_assoc($result)){*/

                        ?>
                        <option value="<?php /*echo $row['id']*/ ?>"> <?php /*echo $row['title'];*/ ?> </option>
                        <?php 
                                /*}
                            }*/ ?>
                    </select> 
                </div>
            <input class="btn btn-primary btn-style" type="submit" name="submit" value="Update">            
        </form>
        </div>
    </div> 
</body>
</html>
<?php 
    /*}*/
?>