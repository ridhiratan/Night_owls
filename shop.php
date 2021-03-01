<?php
require('connection.php');
require('functions.php');
if((isset($_SESSION['SHOP_LOGIN']) && $_SESSION['SHOP_USERNAME']!='') || isset($_SESSION['shopid'])){
    $shopid = $_SESSION['shopid'];
    $shopinfo_query = "select * from `shopkeepers` where s_id='$shopid'";
    $res = mysqli_query($con, $shopinfo_query);
    $sql = "select * from `shop_product` where sh_id='$shopid'";
}else{
    header('location:index.php');
    die();
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

     <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="section text-center" id="about">
            <div class="section justify-content-center">
                <h1 class="mb-0">
                    SHOP
                    <span class="text-primary">LOCAL</span>
                </h1>
                <hr class="m-0" />
                <div class="subheading pt-2">
                        <h2><?php while($shop = mysqli_fetch_assoc($res)){
                    echo $shop['name'];
                 ?></h2>
                        <span> <?php 
                    echo $shop['fulladdress']; ?>
                    <br><i class="fa fa-phone mx-2" aria-hidden="true"></i>
                    <?php
                    echo $shop['phone'];
                } ?></span>
                    </div>
                </div>
            </section>


        <!-- <div>yha kuch aaega</div> -->

                <h2 class="mb-5 text-center pt-3">Items Available</h2>
                <div class="container">
                    <div class="row mx-auto pl-5">
                            <?php
                                $all_prod = mysqli_query($con, $sql) or die(mysqli_error($con));
                                while ($row = mysqli_fetch_array($all_prod)) {
                            ?>
                                <div class="">
                                    <div class="col"><img src="assets/img/p1.jpg" width="250" height="180">
                                        <p class="text-info text-center pt-2">
                                            <?php 
                                            $pid = $row['pr_id'];
                                            $prod_query = "select * from `products` where p_id='$pid'";
                                            $prod = mysqli_query($con, $prod_query);
                                            while($row2 = mysqli_fetch_array($prod)){
                                                echo $row2['name'];
                                            }
                                        ?>
                                        </p>
                                    </div>
                                </div>
                                <?php } ?>

                        </div>
                </div>


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