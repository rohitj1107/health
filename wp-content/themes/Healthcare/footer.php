<!-- Footer -->
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single_footer widget footer_1">
                                <div class="single_footer_title single_footer_title-left">
                                    <div class="footer-logo">
										<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></a>
									</div>
									<div class="social_icon wrap">
										<a class="hover-fx" href="#"><i class="fab fa-facebook-f"></i></a>
										<a class="hover-fx" href="#"><i class="fab fa-instagram"></i></a>
										<a class="hover-fx" href="#"><i class="fab fa-twitter"></i></a>
										<a class="hover-fx" href="#"><i class="fab fa-youtube"></i></a>
									</div>
                                </div>
                                <div class="single_footer_menu">
									<h5>Get our wellness newsletter</h5>
                                    <div class="input-group newsletter_form">
									  <input class="form-control" placeholder="Enter your email" type="text">
									  <div class="input-group-btn search-btn newsletter-btn">
										<button class="btn btn-default" type="submit">Subscribe</button>
									  </div>
									</div>
                                </div>
                            </div>
                        </div>
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        <!--<div class="col-lg-2 col-xs-6 col-md-3">
                            <div class="footer-widget">
                                <h4 class="footer-title">Links</h4>
                                <ul class="footer-menu">
                                    <li>
										<a href="blog-list.html">Home Remedies</a>
                                    </li>
                                    <li>
										<a href="blog-list.html">Hot Topic</a>
                                    </li>
                                    <li>
										<a href="blog-list.html">Feminine Hygiene</a>
                                    </li>
                                    <li>
										<a href="blog-list.html">Diet Management</a>
                                    </li>
                                    <li>
										<a href="blog-list.html">Kids Health</a>
                                    </li>
									<li>
										<a href="blog-list.html">Human Anatomy</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <!--<div class="col-lg-2 col-xs-6 col-md-3">
                            <div class="footer-widget">
                                <h4 class="footer-title">Trending Topics</h4>
                                <ul class="footer-menu">
                                    <li>
										<a href="blog-list.html">Fitness and Exercise</a>
                                    </li>
                                    <li>
										<a href="blog-list.html">Food and Nutrition</a>
                                    </li>
                                    <li>
										<a href="blog-list.html">Health System</a>
                                    </li>
                                    <li>
										<a href="blog-list.html">Personal Health Issues</a>
                                    </li>
                                    <li>
										<a href="blog-list.html">Safety Issues</a>
                                    </li>
									<li>
										<a href="blog-list.html">Sexual Health Issues</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="copy-text copy-left">
                                    <a href="#">Privacy Policy</a>
                                    <a href="#">Terms & Condition</a>
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="copy-text copy-right">
                                    <p>© 2021 <a href="https://konnectgen.com/">Konnectgen</a>. All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer /-->
		
		<!-- Sidebar Overlay -->
        <div class="sidebar-overlay" data-reff="#side_menu"></div>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.6/swiper-bundle.min.js" integrity="sha512-n6GpoPKzdir52uRa3Z+M+BxBFNGwMMVTISZM9LMg9lMXyRVrtCcQavkP81NOI06NyVUskN9GLzZIQtPuF3GWLg==" crossorigin="anonymous"></script>
		<script>
		jQuery( document ).ready(function() {
    jQuery('.menu-footer-menu-container > ul').addClass('footer-menu');
});
		</script>
		<?php wp_footer(); ?>
				
		
    </body>

</html>
        