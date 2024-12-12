<?php
include("conn.php");
$headerQuery = "SELECT * FROM `cms_menu` WHERE `page_url`='contact'";
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
<link href="css/bootstrap.css" rel="stylesheet">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
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
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?=$site?>index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms">
					    <?php
				
				$sql = "SELECT * FROM `users`";
				$res = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($res);
				$email = $row['email'];
				$num = $row['mobile']; 
				$address = $row['address']; 
				$fb = $row['facebook_link'];
				$tw = $row['twittter_link'];
				$linkedin = $row['linkedin_link'];
				$instagram = $row['instagram_link'];
		
			
				?>
						<!-- Title Box -->
						<div class="title-box">
							<h3>Contact Details</h3>
							
						</div>
						<ul class="contact-info-list">
							<li><span class="icon icon-home"></span><strong>Head Office</strong><?=$address?></li>
							<li><span class="icon icon-envelope-open"></span><strong>Email us</strong><?=$email?></li>
							<li><span class="icon icon-call-in"></span><strong>Call Support</strong> +91-<?=$num?></li>
						</ul>
						
						<!-- Social Links -->
						<ul class="social-links">
							<li><a href="<?=$fb?>"><span class="fab fa-facebook-f"></span></a></li>
							<li><a href="<?=$tw?>"><span class="fab fa-twitter"></span></a></li>
							<li><a href="<?=$linkedin?>"><span class="fab fa-linkedin-in"></span></a></li>
							<li><a href="<?=$instagram?>"><span class="fab fa-instagram"></span></a></li>
						</ul>
						
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">We are Solustrid</div>
							<h2>Send a Message</h2>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
							<form method="POST" action="">
								<div class="row clearfix">
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="name" placeholder="Full Name " required>
									</div>
									
								
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="email" name="email" placeholder="Email " required>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="phone" placeholder="Phone " required>
									</div>
									
									
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="subject" placeholder="Subject " required>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea name="message" placeholder="Message "></textarea>
									</div>
								
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<button class="theme-btn btn-style-five" type="submit" name="submit">Send Now</button>
									</div>
									
								</div>
							</form>
								
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->
    </div>
     <?php include('footer.php')?>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert into the database
    $sql = "INSERT INTO tbl_contact(name, email, phone, subject, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    $res = mysqli_query($conn, $sql);
    
      if ($email === false) {
           echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Invalid email address",
                        text: "Failed to send the email. Please try again later.",
                        confirmButtonText: "OK"
                    });
                </script>';
 
        exit;
    }
    
      ob_start(); 
    include 'emailTemplate.php'; 
     $message2 = ob_get_clean(); 
     
       $to = "developer.web2techsolutions@gmail.com";
    $subject = $subject;
    $body .= $message2; // This will append the content of emailTemplate.php
    $body .= "</body></html>";
    
    
    
     $headers = "From: no-reply@Craft-india.com\r\n" .
                       "Reply-To: no-reply@Craft-india.com\r\n" .
                       "MIME-Version: 1.0\r\n" .
                       "Content-Type: text/html; charset=UTF-8\r\n";
                       
                         if (mail($to, $subject, $body, $headers)) {
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Data Sent Successfully",
                      
                        confirmButtonText: "OK"
                    }).then(function() {
                        window.location.href = "index.php";
                    });
                </script>';
            } else {
                echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Email Error!",
                        text: "Failed to send the email. Please try again later.",
                        confirmButtonText: "OK"
                    });
                </script>';
            }
}
?>
