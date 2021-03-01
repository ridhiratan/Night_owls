<?php
require('connection.php');
require('functions.php');
if(isset($_SESSION['SHOP_LOGIN']) && $_SESSION['SHOP_USERNAME']!=''){

}elseif(isset($_SESSION['shopid'])){
    $shopid = $_SESSION['shopid'];
    $shopinfo_query = "select * from `shopkeers` where s_id='$shopid'";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="page-top">
    <h3>shop</h3>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="section text-center " id="about">
            <div class="section justify-content-center">
                <h1 class="mb-0">
                    SHOP
                    <span class="text-primary">LOCAL</span>
                </h1>
                <div class="subheading mb-5">
                <span><?php while($shop = mysqli_fetch_assoc($res)){
                    echo $shop['name'];
                } ?></span>
                    <br> Providing a helping hand to the hands that are hidden under your eyes!!
                </div>
            </div>
        </section>

    <section class="resume-section mx-auto" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5 text-center">What we have for you?</h2>
                <div class="container">
                    <div class="row mx-auto pl-5">
    <?php
    $all_prod = mysqli_query($con, $sql) or die(mysqli_error($con));
    $counter = 1;
    while ($row = mysqli_fetch_array($all_prod)) {
    ?>
        <div class="">
            <div class="col"><img src="assets/img/p1.jpg" width="250" height="180">
            <p class="text-info text-center pt-2"><?php 
                    $pid = $row['pr_id'];
                    $prod_query = "select * from `products` where p_id='$pid'";
                    $prod = mysqli_query($con, $prod_query);
                    while($row2 = mysqli_fetch_array($prod)){
                        echo $row2['name'];
                    }
                ?></p>
            </div>
        </div>
    <?php $counter = $counter + 1;
    } ?>

</div>
                </div>
            </div>
        </section>

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