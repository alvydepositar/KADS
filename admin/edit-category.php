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

$catname = "";
$catname_err ="";

if(isset($_GET["edit"])){
    $id = $_GET['edit'];
    $sql1 = (mysqli_query($conn, "SELECT * FROM category WHERE id = $id"));
        $pro = mysqli_fetch_array($sql1); 
        $catname  = $pro["title"];       
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
$id = $_POST['id'];
$catname  = $_POST["catname"];


mysqli_query($conn, "UPDATE category SET title = '$catname' WHERE id = $id");
header("Location: category.php");
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Protein Blends | Edit Category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="https://64.media.tumblr.com/d6d0d1956a4ed0762dc43993ef8db1f7/b19e9aa061f0ba10-6c/s1280x1920/e9cb3cff30044e1d548420877709df1c5d4b51b0.pnj">
    <link rel="stylesheet" href="./css/customerstyle.css">
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="../css/pagestyles.css" rel="stylesheet">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="top-line"></div>  
        <div class="back-icon">
            <a href="../admin/category.php">
                <img src="../img/backicon.png">
            </a>
        </div>   
        <div class="edituserblock" style="margin-left:100px;">
            <h2>Edit Category</h2> 
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="catname" class="form-control <?php echo (!empty($catname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $catname; ?>">
                    <span class="invalid-feedback"><?php echo $catname_err; ?></span>
                </div>
                
                <input type="submit" class="btn btn-primary" style="margin-left:195px;" value="Update">
                <a href="category.php" class="btn btn-secondary ml-2">Cancel</a>
            </form>
        </div>             
    </div>                          
</body>
</html>

<?php } ?>