<?php
session_start();
require('connection.php');
require('functions.php');
if (isset($_REQUEST['userlocation']) && $_REQUEST['userlocation'] != '') {
} else {
    $all_shops_query = "select * from shopkeepers";
}
if(isset($_REQUEST['thisshop'])){
    $_SESSION['shopid'] = $_REQUEST['thisshop'];
    header('location:shop.php');
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
    <title>Hack30Covid</title>
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

    <hr class="m-0" />
    <div class="container-fluid p-0 ">
        <!-- About-->
        <section class="section text-center " id="about">
            <div class="section justify-content-center">
                <h1 class="mb-0">
                    SHOP
                    <span class="text-primary">LOCAL</span>
                </h1>
            </div>
        </section>
        <hr class="m-0" />
        <section class="section" id="interests">
            <div class="resume-section-content p-3">
                <form>
                    <div class="form-group">
                        <label for="" class="text-dark pt-3" style="font-size: 1.5em;">Enter your
                            location to know shops near you!</label>
                        <input type="email" class="form-control" id="" name="userlocation" aria-describedby=" emailHelp " placeholder="aapka address " required>
                    </div>
                    <div class="text-center">
                    <button type="submit " class="btn btn-primary ">Find Shops</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Shops around You-->
        <section class="resume-section mx-auto" id="experience ">
            <div class="resume-section-content ">
                <h2 class="mb-5 text-center">Shops around You</h2>
                <?php
                $all_shops = mysqli_query($con, $all_shops_query) or die(mysqli_error($con));
                $total_no = mysqli_num_rows($all_shops);
                $counter = 1;
                while ($row = mysqli_fetch_array($all_shops)) {
                ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5 ">
                        <div class="flex-grow-1 ">
                        <form method="post">
                                <button type="submit" name="thisshop" class="btn btn-link" value="<?php echo $row['s_id'] ?>"><h3 style="color: #bd5d38;"><?php echo $row['name'] ?></h3></button>
                            </form><div class="subheading mb-3 "><i class="fa fa-map-marker mx-2" aria-hidden="true"></i><?php echo $row['fulladdress'] ?></div>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugiat neque consequuntur, ullam deleniti doloribus voluptates minus nihil sequi velit ut quia, quam eius sed quaerat ad, iusto delectus unde.</p>
                        </div>
                        <div class="flex-shrink-0 "><span class="text-primary "><?php echo $row['location'] ?></span></div>
                        <hr class="m-0" />
                    </div>
                <?php $counter = $counter + 1;
                } ?>

            </div>
        </section>
        <hr class="m-0 " />

    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js "></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js "></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js "></script>
</body>

</html>