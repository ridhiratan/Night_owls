<?php
    require('connection.php');
    $username = $_POST['username'];
    $shopname = $_POST['shopname'];
    $location = $_POST['location'];
    $address = $_POST['fulladdress'];
    $msg = '';
    // if(isset($_SESSION['ADMIN_LOGIN'])){
    //     header('location:admin.php');
    // }
    // elseif(isset($_SESSION['SHOP_LOGIN'])){
    //     header('location:shopkeeper.php');
    // }
    $sql = "select * from `shopkeepers` where username='$username'";
    if(mysqli_num_rows(mysqli_query($con,$sql)) == 0){
        if($_POST['password'] == $_POST['repassword']){
            // use hashing in future
            $sql = "INSERT INTO `shopkeepers` VALUES (NULL, '$shopname', '$username', '$password', '$location', '$address')";
            $res = mysqli_query($con, $sql);
            header('location:login.php');
        }
        else{
            $msg = 'Passwords do not match';
        }
    }else{
        $msg = 'This username is already taken';
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SHOPLOCAL</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <?php
    require('navbar.php');
    ?>

            <section class="resume-section mx-auto" id="interests">
                <div class="resume-section-content ">
                    <h2 class="mb-5 text-center">SIGNUP HERE</h2>
                    <form method="post" class="justify-content-center">
                        <div class="form-group">
                            <label for="shopname">Shop name</label>
                            <input type="text" class="form-control" id="shopname" name="shopname" placeholder="Enter name of shop" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter location</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="location" placeholder="Enter location of your shop" required>
                        </div>
                        <div class="form-group">
                            <label for="fulladdress">Enter Full Address</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="fulladdress" placeholder="Enter full address of your shop" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" name="repassword" id="exampleInputPassword1" placeholder="Retype Password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <div class="text-danger text-center">
                        <?php echo $msg ?>
                    </div>

                    <div class="text-center text-info pt-2"><a href="login.php">Log in</a></div>
                </div>
            </section>
            <hr class="m-0" />

            </div>
            <!-- Bootstrap core JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Third party plugin JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
    </body>

    </html>