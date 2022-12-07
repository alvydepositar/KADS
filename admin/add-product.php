<?php
session_start();

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

    $query="SELECT * FROM category";
    $result=mysqli_query($conn, $query);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $image = $_FILES['my_image'];

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter product name.";
    } elseif(!preg_match('/^[a-zA-Z ]+$/', trim($_POST["name"]))){
        $cname_err = "Name can only contain letters.";
    } else {
        $name = trim($_POST["name"]);
    }

    if(empty(trim($_POST["desc"]))){
        $desc_err = "Please enter product description.";
    } else {
        $desc = trim($_POST["desc"]);
    }

    if(empty(trim($_POST["price"]))){
        $price_err = "Please enter product price.";
    } else {
        $price = trim($_POST["price"]);
    }

    $categoryid = $_POST['category'];

	if ($error === 0) {
		if ($img_size > 205000) {
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
				
                if(empty($name_err) && empty($desc_err) && empty($price_err)){
                    $sql = "INSERT INTO products (product_name, description, price, image_url, active, categoryid) VALUES('$name', '$desc', '$price', '$new_img_name', 1, $categoryid)";
				    mysqli_query($conn, $sql);
				    header("Location: products.php");
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
			} else {
				$em = "You can't upload files of this type";
		        header("Location: products.php?error=$em");
			}
		}
    
	} 
}   

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protein Blends | Add Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://64.media.tumblr.com/d6d0d1956a4ed0762dc43993ef8db1f7/b19e9aa061f0ba10-6c/s1280x1920/e9cb3cff30044e1d548420877709df1c5d4b51b0.pnj">
    <link rel="stylesheet" href="./css/customerstyle.css">
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="../css/pagestyles.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="top-line"></div>  
        <div class="back-icon">
            <a href="../admin/products.php">
                <img src="../img/backicon.png">
            </a>
        </div>   
        <div class="edituserblock">
            <h2>Add Product</h2>  
                <?php if (isset($_GET['error'])): ?>
                    <p><?php echo $_GET['error']; ?></p>
                <?php endif ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <input type="file" name="my_image" class="form-control <?php echo (!empty($image_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $image; ?>">
                </div>

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                    <span class="invalid-feedback"><?php echo $name_err; ?></span>
                </div>

                <div class="form-group">
                    <label>Product Description</label>
                    <input type="text" name="desc" class="form-control <?php echo (!empty($desc_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $desc; ?>">
                    <span class="invalid-feedback"><?php echo $desc_err; ?></span>
                </div>

                <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" name="price" min="0" value="0" step=".01" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $price; ?>">
                    <span class="invalid-feedback"><?php echo $price_err; ?></span>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name ="category" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                        <?php
                            if(mysqli_num_rows($result) >= 0) {
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['id'] ?>"> <?php echo $row['title']; ?> </option>
                        <?php 
                                }
                            } ?>
                    </select> 
                </div>

                <input class="btn btn-primary btn-style" type="submit" name="submit" value="Upload">
                
            </form>
        </div>
    </div>
</body>
</html>
<?php 
    }
?>