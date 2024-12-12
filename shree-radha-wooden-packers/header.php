<?php
include("conn.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Check if 'alias' exists in GET parameters
$url = isset($_GET['alias']) ? $_GET['alias'] : '';

// Fetch header information only if alias is provided
if ($url) {
    $headerQuery = mysqli_query($conn, "SELECT * FROM cat_prod WHERE ct_pd_url='$url'");
    if ($headerQuery && mysqli_num_rows($headerQuery) > 0) {
        $header = mysqli_fetch_assoc($headerQuery);
        $product_url = $header['ct_pd_url'];
    } else {
        $product_url = ''; // Handle case where no product is found
    }
} else {
    $product_url = ''; // Handle missing alias parameter
}



?>
 <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    	<?php
				
				$sql = "SELECT * FROM `users`";
				$res = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($res);
				$email = $row['email'];
				$num = $row['mobile'];
				$fb = $row['facebook_link'];
				$tw = $row['twittter_link'];
				$linkedin = $row['linkedin_link'];
				$instagram = $row['instagram_link'];
				
			
				?>
                    <div class="text">We offer all wooden packing services</div>
					<!-- Social Links -->
					<ul class="social-links clearfix">
						<li><a href="<?=$fb?>"><span class="fab fa-facebook-f"></span></a></li>
						<li><a href="<?=$tw?>"><span class="fab fa-twitter"></span></a></li>
						<li><a href="<?=$linkedin?>"><span class="fab fa-linkedin-in"></span></a></li>
						<li><a href="<?=$instagram?>"><span class="fab fa-instagram"></span></a></li>
					</ul>
                </div>
                <div class="top-right clearfix">
                    <!-- Info List -->
					<ul class="info-list clearfix">
                        <li><a href="tel:<?=$num?>"><span class="icon fa fa-phone"></span> <span class="txt">+91-<?=$num?></span> </a></li>
                        <li><a href="mailto:<?=$email?> "><span class="icon fa fa-envelope-open"></span> <span class="txt"><?=$email?> </span> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="<?=$site?>index.php"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li ><a href="<?=$site?>index.php">Home</a></li>
                                    <li><a href="<?=$site?>about.php">About us</a></li>
                                    <li class="dropdown"><a href="#">Products</a>
                                        <ul>
                                            <?php
                                                $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1'";
                                                $res = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $pro_name = htmlspecialchars($row['ct_pd_name']);
                                                    $productURL = htmlspecialchars($row['ct_pd_url']);
                                                ?>
                                            <li><a href="<?= $site ?>product-details/<?= $productURL ?>"><?= $pro_name ?></a></li>
                                            
                                           <?php
                                                }
                                                ?>
                                        </ul>
                                    </li>
                                    <li><a href="<?=$site?>gallery.php">Gallery</a></li>
                                    <li><a href="<?=$site?>contact-us.php">Contact us</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                          
                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="<?=$site?>contact-us.php" class="theme-btn btn-style-one">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" title=""><img src="images/logo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="<?=$site?>index.php">Home</a> </li>
                                <li><a href="<?=$site?>about.php">About us</a></li>
                                <li class="dropdown"><a href="#">Products</a>
                                    <ul>
                                        <?php
                                                $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1'";
                                                $res = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $pro_name = htmlspecialchars($row['ct_pd_name']);
                                                    $productURL = htmlspecialchars($row['ct_pd_url']);
                                                ?>
                                       <li><a href="<?= $site ?>product-details/<?= $productURL ?>"><?= $pro_name ?></a></li>
                                            <?php
                                                }
                                                ?>
                                    </ul>
                                </li>
                                <li><a href="<?=$site?>gallery.php">Gallery</a></li>
                                <li><a href="<?=$site?>contact-us.php">Contact us</a></li>
                            </ul> 
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!-- End Main Header -->