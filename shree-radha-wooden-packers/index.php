<?php include("conn.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='home'";
$headerResult = mysqli_query($conn, $headerQuery);

if ($headerResult && mysqli_num_rows($headerResult) > 0) {
    // Fetch data as an associative array
    $header1 = mysqli_fetch_assoc($headerResult);
} else {
    $header1 = ['page_title' => '', 'message' => '', 'page_keyword' => '']; // Default values if no result is found
}
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

    <!--Main Slider-->
    <section class="main-slider">
        
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    
                    <li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slider1.png">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/slider1.png">
                    
					<div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['-10','-10','-80','-80']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="border-layer"></div>
                    </div>
					
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['80','80','15','15']"
                    data-voffset="['-60','-60','-80','-80']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h2>Wooden Box </h2>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['80','80','15','15']"
                    data-voffset="['55','55','30','30']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="text">With Flexible Production Technology</div>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-width="['650','650','650','450']"
                    data-hoffset="['270','270','15','15']"
                    data-voffset="['155','155','120','120']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-two">Learn more</a>
                        </div>
                    </div>
                    
					
					
                    </li>
                    
                    <li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slider2.png" data-title="Slide Title">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/slider2.png">
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['-10','-10','-80','-80']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="border-layer"></div>
                    </div>
					
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['80','80','15','15']"
                    data-voffset="['-60','-60','-80','-80']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h2>Wooden Crate</h2>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['80','80','15','15']"
                    data-voffset="['55','55','30','30']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="text">With Flexible Production Technology</div>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-width="['650','650','650','450']"
                    data-hoffset="['270','270','15','15']"
                    data-voffset="['155','155','120','120']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-two">Learn more</a>
                        </div>
                    </div>
                                    
                    </li>
					
					<li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1690" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slider3.png" data-title="Slide Title">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/slider3.png">
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['-10','-10','-80','-80']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="border-layer"></div>
                    </div>
					
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['80','80','15','15']"
                    data-voffset="['-60','-60','-80','-80']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h2>Heavy Wooden Crate</h2>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['80','80','15','15']"
                    data-voffset="['55','55','30','30']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="text">With Flexible Production Technology</div>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-width="['650','650','650','450']"
                    data-hoffset="['270','270','15','15']"
                    data-voffset="['155','155','120','120']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-two">Learn more</a>
                        </div>
                    </div>                    
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
	
	<!-- Innovation Section -->
	<section class="innovation-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="title">About us</div>
							<h2>Welcome to Shree Radha Wooden Packers </h2>
						</div>
						<div class="bold-text">At Shree Radha Wooden Packers, we bring a legacy of craftsmanship, precision, and quality to the world of wooden packaging solutions. With years of experience in the industry, we have established ourselves as a trusted name for businesses and industries seeking durable, eco-friendly, and tailored packaging options.</div>
						<div class="bold-text">Our expertise lies in creating high-quality wooden boxes, crates, and pallets designed to meet your specific needs. Whether you require robust packaging for heavy industrial machinery or custom-designed boxes for delicate goods, we ensure that each product is crafted to perfection. Our products are made from premium-grade wood, ensuring durability, sustainability, and compliance with international packaging standards.</div>
					   <div class="bold-text">Customer satisfaction is at the core of our operations. We pride ourselves on providing personalized solutions, timely deliveries, and competitive pricing. Our team of skilled professionals works closely with clients to understand their requirements and deliver products that exceed expectations.</div>	
                        <div class="bold-text">
                        Thank you for choosing Shree Radha Wooden Packers. We look forward to serving you with excellence and becoming your preferred partner in wooden packaging solutions. Explore our range of products and experience the unmatched quality and service that sets us apart in the industry.
                        </div>
					  <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one">Read more</a>
                            </div>
					</div>
				</div>
				
				<!-- Imaages Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="images/about1.jpg" alt="" />
						</div>
						<div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="images/about2.jpg" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Innovation Section -->

	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Services Block -->
				<div class="services-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="big-icon flaticon-settings-4"></div>
						<div class="icon-box">
							<span class="icon flaticon-drill-3"></span>
						</div>
						<h3><a href="services-1.html">Well Maintained</a></h3>
						<div class="text">Puis nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute.</div>
						<a class="arrow" href="#"><span class="icon flaticon-next"></span></a>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="big-icon flaticon-settings-4"></div>
						<div class="icon-box">
							<span class="icon flaticon-safety"></span>
						</div>
						<h3><a href="services-2.html">Industrial Specialist</a></h3>
						<div class="text">Auis nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute.</div>
						<a class="arrow" href="#"><span class="icon flaticon-next"></span></a>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="big-icon flaticon-settings-4"></div>
						<div class="icon-box">
							<span class="icon flaticon-tools-1"></span>
						</div>
						<h3><a href="services-1.html">Latest Equipmets</a></h3>
						<div class="text">Muis nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute.</div>
						<a class="arrow" href="#"><span class="icon flaticon-next"></span></a>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="big-icon flaticon-settings-4"></div>
						<div class="icon-box">
							<span class="icon flaticon-tape-measure"></span>
						</div>
						<h3><a href="services-2.html">Safety Commitment</a></h3>
						<div class="text">Cuis nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute.</div>
						<a class="arrow" href="#"><span class="icon flaticon-next"></span></a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	
	
	
	<!-- Products -->
	<section class="services-section-two">
		<div class="auto-container">
			<div class="inner-container">
				<div class="big-icon flaticon-settings-4"></div>
				<!-- Sec Title -->
				<div class="sec-title light wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="row clearfix">
						<div class="pull-left col-xl-4 col-lg-5 col-md-12 col-sm-12">
							
							<h2>Our Products</h2>
						</div>
						<div class="pull-left col-xl-8 col-lg-7 col-md-12 col-sm-12">
							
						</div>
					</div>
				</div>
			
				<div class="three-item-carousel owl-carousel owl-theme">
					 <?php
			            $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1' ORDER BY RAND() LIMIT 5";

                        $res = mysqli_query($conn, $sql);
                        while($row= mysqli_fetch_assoc($res)){
                            $pro_name=$row['ct_pd_name'];
                            $pro_desc=$row['long_description'];
                               $product_images = explode(",", $row['cat_pd_image']); // Split multiple images into an array
 $productURL = htmlspecialchars($row['ct_pd_url']);
            // Ensure there's at least one image, if not, set a placeholder
            $product_image = isset($product_images[0]) && !empty($product_images[0]) ? $product_images[0] : 'placeholder.jpg';
                       
                        
			    ?>
				
					<div class="services-block-two">
						<div class="inner-box">
							<div class="image">
								<a href="<?= $site ?>product-details/<?= $productURL?>">
								    <img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_image?>" alt=""/>
								</a>
							</div>
							<div class="lower-content">
								<h3><a href="<?= $site ?>product-details/<?= $productURL?>"><?=$pro_name?></a></h3>
								<div class="text"><?=substr($pro_desc, 0, 100)?></div>
								<a href="<?= $site ?>product-details/<?= $productURL?>" class="read-more">Read More <span class="arrow flaticon-next"></span></a>
							</div>
						</div>
					</div>
                  
			<?php
                        }
                        ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section Two -->
	
	<!-- Quote Section -->
	<section class="quote-section wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
		<div class="auto-container">
			<div class="inner-section">
				<div class="clearfix">
					
					<div class="pull-left">
						<div class="content">
							<div class="icon flaticon-hammer"></div>
							<h3>Get A Free Quote For Wooden Packing  Project</h3>
							<div class="text">We always bring good quality services with 100% safety measures</div>
						</div>
					</div>
					
					<div class="pull-right">
						<a href="<?=$site?>contact-us.php" class="theme-btn btn-style-three">Get A Quote</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Quote Section -->
    	<!-- What We Offer Section -->
	<section class="what-we-offer">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Text Column -->
				<div class="text-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner">
						<div class="title-style-one alternate">
                            <h2>Why Choose  Shree Radha Wooden Packers?</h2>
                            <p>Shree Radha Wooden Packers stands out as a trusted leader in the wooden packaging industry, offering solutions that combine durability, customization, and sustainability. Here are the top reasons to choose us:</p>
                        </div>
                        <div class="why-contet">
                         <h3><i class="fas fa-certificate"></i>  Uncompromising Quality</h3>
                            <p>We use premium-grade wood to craft packaging solutions that are durable, reliable, and capable of withstanding the toughest conditions. Our products meet international packaging standards, ensuring the safe transport of goods.</p>
                        </div>
                        <div class="why-contet">
                         <h3><i class="fas fa-leaf"></i> Eco-Friendly Practices</h3>
                            <p>We use premium-grade wood to craft packaging solutions that are durable, reliable, and capable of withstanding the toughest conditions. Our products meet international packaging standards, ensuring the safe transport of goods.</p>
                        </div>
                        <div class="why-contet">
                         <h3><i class="fas fa-rupee-sign"></i> Competitive Pricing</h3>
                            <p>We use premium-grade wood to craft packaging solutions that are durable, reliable, and capable of withstanding the toughest conditions. Our products meet international packaging standards, ensuring the safe transport of goods.</p>
                        </div>
                        <div class="why-contet">
                         <h3><i class="far fa-clock"></i> Timely Deliveries</h3>
                            <p>We use premium-grade wood to craft packaging solutions that are durable, reliable, and capable of withstanding the toughest conditions. Our products meet international packaging standards, ensuring the safe transport of goods.</p>
                        </div>
                        <div class="why-contet">
                         <h3><i class="fas fa-users"></i> Experienced Team</h3>
                            <p>With years of expertise in the industry, our skilled professionals bring precision and craftsmanship to every product, ensuring your satisfaction.</p>
                        </div>
                       
					</div>
				</div>
				
				<!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner clearfix">
                        <figure class="image-1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/why.webp" alt="" /></figure>
                        <figure class="image-2 video-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <img src="images/why2.jpg" alt="" />
                            <!--Play Box-->
                          
                        </figure>
                    </div>
                </div>
				
			</div>
		</div>
	</section>
	<!-- End What We Offer -->
	
		<!-- Request Quote -->
    <section class="request-quote-section" style="background-image: url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="sec-title light">
                <div class="title">We are Solustrid</div>
                <h2>Request a Quote</h2>
                <div class="text">Feel free to contact us to get more information</div>
            </div>
            <div class="appointment-form">
                <form method="post" action="<?=$site?>contact-us.php">
                    <div class="row clearfix">
                        <div class="field-group col-xl-8 col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="name" placeholder="Your Name " required="">
                                </div>
                                
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="email" name="email" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="phone" placeholder="Phone Number" required="">
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                                
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <select class="custom-select-box">
                                          <option  disabled selected>Service Interested in</option>
                                        <?php 
                                        $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1'";
                                                $res = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $pro_name = htmlspecialchars($row['ct_pd_name']);
                                                    $productURL = htmlspecialchars($row['ct_pd_url']);
                                                ?>
                                          
                                        <option value="<?= $pro_name ?>"><?= $pro_name ?></option>
                                        <?php
                                                }
                                                ?>
                                       
                                           

                                    </select>
                                </div>
                            </div>
                        </div>
                         <div class="field-group col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="field-name" placeholder="Message" name="message" required></textarea>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Request Quote -->
	
	

	<!--Testimonials Section-->
    <section class="testimonials-section">
    	<div class="auto-container">
            <div class="sec-title centered">
                <div class="title">Testimonial</div>
                <h2>Client’s Reviews</h2>
            </div>

            <div class="testimonial-carousel owl-theme owl-carousel">
                 <?php
					    $sql = "SELECT * FROM `daysdata` WHERE `status`='1'";
					    $res = mysqli_query($conn,$sql);
					    while($row = mysqli_fetch_assoc($res)){
					        $image  = explode(",", $row['image']);
					        $name =$row['name'];
					        $desc = $row['description'];
					        $post = $row['designation'];
					        $date = $row['date'];
					        $date2 = date($date);
					    ?>
                <!--Testimonial-->
                
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="upper">
                            <div class="text">“<?=$desc?>”</div>
                            <div class="icon"><span class="flaticon-quote"></span></div>
                        </div>
                        <div class="lower">
                            <div class="image"><img src="images/c.jpg" alt="" /></div>
                            <div class="name"><?=$name?></div>
                            <div class="location"><?=$post?></div>
                        </div>
                    </div>
                </div>
             
                <!--Testimonial-->
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