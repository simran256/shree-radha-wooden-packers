 <?php  
include("conn.php");
$url = mysqli_real_escape_string($conn, $_GET['alias']);
$query = "SELECT * FROM cat_prod WHERE ct_pd_url = '$url' AND status = '1' LIMIT 1";
$header = mysqli_query($conn, $query);

if (mysqli_num_rows($header) > 0) {
    $header1 = mysqli_fetch_assoc($header);
    $subcategory_id = $header1['id']; // Get the subcategory ID
    $subcategory_name = $header1['ct_pd_name']; // Get the subcategory name
    $product_images = explode(",", $header1['cat_pd_image']); // Split image filenames
    $price = $header1['cat_pd_price'];
    $mrp =$header1['cat_pd_mrp'];
    $long_desc = $header1['long_description'];
} 
$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='home'";
$headerResult = mysqli_query($conn, $headerQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $header1['ct_pd_title'];?></title>		
    <meta name="author" content="<?php echo $theme['ct_pd_sl'];?>">
    <meta name="description" content="<?php echo $header1['ct_pd_mt_ds'];?>">
    <link rel="canonical" href="<?php echo $header1['ct_pd_ky'];?>" >	
<link href="<?=$site?>css/bootstrap.css" rel="stylesheet">
<link href="<?=$site?>plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
<link href="<?=$site?>plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
<link href="<?=$site?>plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
<link href="<?=$site?>css/style.css" rel="stylesheet">
<link href="<?=$site?>css/responsive.css" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

<div class="page-wrapper">
   <?php include('header.php')?>
    <!--Page Title-->
    <section class="page-banner style-two" style="background-image:url(images/slider2.png);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1><?= $subcategory_name  ?></h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=$site?>index.php">Home</a></li>
                    <li><?= $subcategory_name  ?></li>
                </ul>
            </div>
        </div>
    </section>
      <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar padding-right">
						
						<!-- Category Widget -->
                        <div class="sidebar-widget categories-two">
                            <div class="widget-content">
                                <!-- Services Category -->
                                <ul class="services-categories">
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
                            </div>
                        </div>
						
				
						<!-- Support Widget -->
                        <div class="sidebar-widget support-widget">
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
                            <div class="widget-content">
                                <span class="icon flaticon-telephone-1"></span>
                                <div class="text">Got any Questions? <br> Call us Today!</div>
                                <div class="number">+91-<?=$num?></div>
                                <div class="email"><a href="#"><?=$email?></a></div>
                            </div>
                        </div>
						
					</aside>
				</div>
				
				<!--Content Side / Services Detail-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="services-detail">
						<div class="inner-box">
							<div class="image">
								<img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_images[0];?>" alt="" />
							</div>
							<div class="lower-content">
								<!-- Title Box -->
								<div class="title-box">
									
									<h2><?= $subcategory_name  ?></h2>
								</div>
								
								<div class="text">
									<p> <?=$long_desc?></p>
                                </div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
    </div>
     <?php include('footer.php')?>
</body>
</html>