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
    
    $catname = $image = "";
    $catname_err = $image_err = "";

    $query="SELECT * FROM category";
    $result=mysqli_query($conn,$query);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $image = $_FILES['my_image'];
	echo "<pre>";
	print_r($image);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

    if(empty(trim($_POST["catname"]))){
        $catname_err = "Please enter a first name.";
    } elseif(!preg_match('/^[a-zA-Z ]+$/', trim($_POST["catname"]))){
        $catname_err = "Name can only contain letters.";
    } else {
        $catname = trim($_POST["catname"]);
    }
				$sql = "INSERT INTO category (title, active) VALUES('$catname',  1)";
				mysqli_query($conn, $sql);
				header("Location: category.php");
		}
    
} 
  

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protein Blends | Add Category</title>
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
            <a href="../admin/category.php">
                <img src="../img/backicon.png">
            </a>
        </div>   
        <div class="edituserblock">
            <h2>Add Category</h2>  
            <?php if (isset($_GET['error'])): ?>
                <p><?php echo $_GET['error']; ?></p>
            <?php endif ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="catname" class="form-control <?php echo (!empty($catname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $catname; ?>">
                    <span class="invalid-feedback"><?php echo $catname_err; ?></span>
                </div>
                <input class="btn btn-primary btn-style" type="submit" name="submit" value="Upload">                
            </form>
        </div>
    </div>


 
</body>
</html>
