<?php 
include("conn.php");
$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='gallery'";
$headerResult = mysqli_query($conn, $headerQuery);

if ($headerResult && mysqli_num_rows($headerResult) > 0) {
    // Fetch data as an associative array
    $header1 = mysqli_fetch_assoc($headerResult);
} else {
    $header1 = ['page_title' => '', 'message' => '', 'page_keyword' => '']; // Default values if no result is found
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $header1['page_title'];?></title>		
    <!--<meta name="author" content="<?php echo $theme['company_name'];?>">-->
    <meta name="description" content="<?php echo $header1['message'];?>">
    <link rel="canonical" href="<?php echo $header1['page_keyword'];?>" >
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
                <h1>Gallery</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=$site?>index.php">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
	<!-- Innovation Section -->
	<section class="gallery-section">
		<div class="auto-container">
			<div class="row clearfix">
				<?php
						
						$sql = "SELECT * FROM `gallery` WHERE `status` = '1' limit 8";
						$res = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($res)){
						    $image = $row['image'];
						    
						
						
						?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-12">
                 <div class="gallery_item">
                    	<img src="<?=$site?>admin/uploads/gallery/<?=$image?>" alt="" />
                    </div>
                </div>
                <?php
						}
						?>
			</div>
		</div>
	</section>

		
    </div>
     <?php include('footer.php')?>
</body>
</html>