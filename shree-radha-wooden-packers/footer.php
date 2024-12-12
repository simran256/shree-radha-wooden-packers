 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!--Main Footer-->
    <footer class="main-footer">
    
		<div class="auto-container">
        
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget about-widget">
									<h2>About info</h2>
									<div class="text">Thank you for choosing Shree Radha Wooden Packers. We look forward to serving you with excellence and becoming your preferred partner in wooden packaging solutions. Explore our range of products and experience the unmatched quality and service that sets us apart in the industry.</div>
									<a href="#" class="theme-btn btn-style-four">About Company</a>
								</div>
							</div>
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget services-widget">
									<h2>Our Products</h2>
									<ul class="footer-service-list">
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
							
						</div>
					</div>
					
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							<div class="footer-column col-lg-7 col-md-6 col-sm-12">
								<div class="footer-widget post-widget">
									<h2>Reach here</h2>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13999.98464546245!2d77.40965951649065!3d28.689761433582955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1aa8bc49d87%3A0xcd396d09fce7c416!2sGhukna%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201003!5e0!3m2!1sen!2sin!4v1732697055340!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								
								</div>
							</div>
							<div class="footer-column col-lg-5 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
                                    <h2>Contact</h2>
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
				$address = $row['address'];
				
			
				?>
									<ul>
                                        <li><strong>Address:</strong> <?=$address?> </li>
                                        <li><strong>Email:</strong><a href="#"><?=$email?> </a></li>
                                        <li><strong>Mobile No.:</strong> +91-<?=$num?></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="clearfix">
					<div class="pull-left">
						<div class="copyright">&copy; 2024 Shree Radha Wooden Packers. All rights reserved. By <a href="#">WEB2TECH SOLUTIONS</a></div>
					</div>
					<div class="pull-right">
						<ul class="social-links">
                            <li><a href="<?=$site?><?=$fb?>"><span class="fab fa-facebook-f"></span></a></li>
							<li><a href="<?=$site?><?=$tw?>"><span class="fab fa-twitter"></span></a></li>
							<li><a href="<?=$site?><?=$linkedin?>"><span class="fab fa-linkedin-in"></span></a></li>
							<li><a href="<?=$site?><?=$instagram?>"><span class="fab fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</footer>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script src="<?=$site?>js/jquery.js"></script>
<script src="<?=$site?>js/popper.min.js"></script>
<script src="<?=$site?>js/bootstrap.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?=$site?>plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?=$site?>js/main-slider-script.js"></script>
<script src="<?=$site?>js/jquery-ui.js"></script>
<script src="<?=$site?>js/jquery.fancybox.js"></script>
<script src="<?=$site?>js/owl.js"></script>
<script src="<?=$site?>js/wow.js"></script>
<script src="<?=$site?>js/appear.js"></script>
<script src="<?=$site?>js/script.js"></script>