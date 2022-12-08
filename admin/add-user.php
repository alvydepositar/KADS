<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KADS | Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/logo.png">
    <link rel="stylesheet" href="./css/customerstyle.css">
    <link href="../css/style.min.css" rel="stylesheet">
    <style>
        body{font: 14px sans-serif; background-color:#e7e7e7; font-family: 'Poppins';color: #141C07;}
        .wrapper{ width: 360px; padding: 20px; }
        .userblock{
            background-color: #fff;
            height: auto;
            width: 700px;
            border-radius: 10px;
            position: absolute;
            left: calc(50% - 700px/2);
            top: calc(50% - 500px/2);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
        }
        .userblockcontent{
            padding:20px;
        }
        .userblockcontent h2{
            font-weight: 700;
            font-size: 25px;
            margin-left:10px;
            margin-bottom:20px;
        }
        .top-line{
            position: absolute;
            height: 8px;
            left: -0.21%;
            right: 0%;
            top: 0px;
            background: #C70800;
        }
        .buttonsalign{
            margin-left:495px;  
            margin-top:20px; 
            margin-bottom:0px;         
        }
        .btn-primary{
            background-color: #C70800;
            color: #fff;
            border: none;
            font-weight: 600;
            font-size: 14px;
            border-radius:5px;
        }
        .btn-primary:hover,.btn-secondary:hover,.btn-primary:focus,.btn-secondary:focus{
            background-color: #8e0001;
            color: #fff;
        }
        .btn-secondary{
            background-color: #fff;
            color: #2C2A3A;
            border: 1px solid #C70800;
            font-weight: 600;
            font-size: 14px;            
            border-radius:5px;
        }
        .back-icon img{
            width: 40px;
            height: 40px;
            top: 80px;
            left: calc(45% - 700px/2);
            position: absolute;            
        }
        .back-icon img:hover{
            opacity:0.7;
            transition: 0.25s all ease;      
        }
        label{
            margin-bottom: 0px;
            color:#C70800;
            font-weight:500;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="top-line"></div>    
        <div class="back-icon">
            <a href="../admin/users.php">
                <img src="../img/backicon.png">
            </a>
        </div>
        <div class="userblock">
            <div class="userblockcontent">
                <h2>Add User</h2>
                <form action="" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control" value="">
                                <span class="invalid-feedback"></span>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="">
                                <span class="invalid-feedback"></span>
                            </div>    
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-sm">                            
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" name="middlename" class="form-control" value="">
                                <span class="invalid-feedback"></span>
                            </div>
                        </div>
                        <div class="col-sm">                            
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name ="role" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                    <option value="1">Admin</option>
                                    <option value="2">Cashier</option>
                                </select> 
                            </div> 
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-sm">                                                      
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control" value="">
                                <span class="invalid-feedback"></span>
                            </div>    
                        </div>
                        <div class="col-sm">                                                      
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value="">
                                <span class="invalid-feedback"></span>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-sm">                                                           
                        </div>
                        <div class="col-sm">                                                                                
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" value="">
                                <span class="invalid-feedback"></span>
                            </div>
                        </div>                        
                    </div>
                </div>   
                    

                    
                    <div class="form-group buttonsalign">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                    </div>
                </form>
            </div>
        </div>         
    </div>    
</body>
</html>