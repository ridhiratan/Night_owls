<?php
session_start();
require('connection.php');
require('functions.php');
if(isset($_REQUEST['userlocation']) && $_REQUEST['userlocation']!=''){

}else{
    $all_shops_query="select * from shopkeepers";
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
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">SHOPLOCAL</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    src="assets/img/shoplocal.jpeg" alt="" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Shops around You</a></li>
                <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li> -->
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Where's your shop?</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="server.php">New account?</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.html">Login</a></li>
            </ul>
        </div>
    </nav>
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
                        <label for="exampleInputEmail1" class="text-dark pt-3" style="font-size: 1.5em;">Enter your
                            location to know shops near you!</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="userlocation" aria-describedby=" emailHelp " placeholder="aapka address " required>
                    </div>

                    <button type="submit " class="btn btn-primary ">Find Shops</button>
                </form>
            </div>
        </section>
        <!-- Shops around You-->
        <section class="resume-section mx-auto" id="experience ">
            <div class="resume-section-content ">
                <h2 class="mb-5 text-center">Shops around You</h2>
                <?php
                    $all_shops=mysqli_query($con,$all_shops_query) or die(mysqli_error($son));
                    $total_no=mysqli_num_rows($all_shops);
                    $counter=1;
                    while($row=mysqli_fetch_array($all_shops)){
                        ?>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-5 ">
                    <div class="flex-grow-1 ">
                        <h3 class="mb-0 "><a href="shop1.html ">Shop-<?php echo $counter ?></a></h3>
                
                        <div class="subheading mb-3 "><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row['fulladdress'] ?></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum fugiat neque consequuntur, ullam deleniti doloribus voluptates minus nihil sequi velit ut quia, quam eius sed quaerat ad, iusto delectus unde.</p>
                    </div>
                   
                    <div class="flex-shrink-0 "><span class="text-primary "><?php echo $row['location'] ?></span></div>
                </div>
                <?php $counter=$counter+1;}?>
              
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