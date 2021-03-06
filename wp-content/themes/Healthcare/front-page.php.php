<?php
/**
* Template Name: Front Page
*
* @package WordPress
* @subpackage HealthGiggles
* @since HealthGiggles 1.0
*/
 get_header(); ?>
		
		 <!-- Content -->
		
			<section class="banner__slider">
				<div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">

				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
	  
	  			<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="slider_item">
							<div class="item_content content_left text-left">
								<h2 class="animated title wow bounceInRight">Ayurvedic Solutions for Good health</h2>
								<p class="animated slideInRight"><span class="banner-icon"><i class="fas fa-check-circle"></i></span>Desire and appetite for intake of food.</p>
								<p class="animated slideInRight"><span class="banner-icon"><i class="fas fa-check-circle"></i></span>Absence of pathological or dreadful dreams. </p>
								<p class="animated slideInRight"><span class="banner-icon"><i class="fas fa-check-circle"></i></span>Feeling of freshness after waking up in the morning.</p>
							</div>
							<div class="item_content content_right text-right">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dr.png">
							</div>
						</div>
					</div>
			
					<div class="carousel-item">
						<div class="slider_item">
							<div class="item_content content_left text-left">
								<h2 class="animated title wow fadeInRight">Ayurvedic Solutions for Good health</h2>
								<p class="animated slideInRight"><span class="banner-icon"><i class="fas fa-check-circle"></i></span>Desire and appetite for intake of food.</p>
								<p class="animated slideInRight"><span class="banner-icon"><i class="fas fa-check-circle"></i></span>Absence of pathological or dreadful dreams. </p>
								<p class="animated slideInRight"><span class="banner-icon"><i class="fas fa-check-circle"></i></span>Feeling of freshness after waking up in the morning.</p>
							</div>
							<div class="item_content content_right text-right">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dr.png">
							</div>
						</div>
					</div>
			
					<div class="carousel-item">
						<div class="slider_item">
							<div class="item_content content_left text-left">
								<h2 class="animated title wow fadeInRight">Ayurvedic Solutions for Good health</h2>
								<p class="animated slideInRight"><span class="banner-icon"><i class="fas fa-check-circle"></i></span>Desire and appetite for intake of food.</p>
								<p class="animated slideInRight"><span class="banner-icon"><i class="fas fa-check-circle"></i></span>Absence of pathological or dreadful dreams. </p>
								<p class="animated slideInRight"><span class="banner-icon"><i class="fas fa-check-circle"></i></span>Feeling of freshness after waking up in the morning.</p>
							</div>
							<div class="item_content content_right text-right">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dr.png">
							</div>
						</div>
					</div>
	  
	  
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</section>
			
			
			<section class="features">
                <div class="container">
                    <div class="row feature-row">
                        <div class="col-md-8">
                            <div class="feature-box box-content wow slideInLeft">
                                <h2>Ayurvedic Solutions for good health</h2>
                                <p>The foundation of happiness is health - and that's more than the absence of illness.
									Ayurveda helps you discover true health by taking a cohesive approach of balancing the
									body.
								</p>
								<p>Drinking of luke warm water helps easy passage of motion and urine, enhance digestive power, 
									minimize the diseases related to digestive system and delayed.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box">
                                <div class="feature-img wow slideInRight">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aur.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			
			<section class="features trending-video-section">
				<div class="container">
					<div class="row trending-video-title">
						<div class="col-6 section__title pb--50">
							<h3 class="title__line">Trending Videos</h3>
						</div>
						<div class="col-6 see-more section__title pb--50">
							<a href="blog-content.html">See more</a>
						</div>
					</div>
				</div>
				<!-- Slider main container -->
				<div class="swiper-container video-section-swiper">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide trending-video-swiper wow fadeInUp" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Male-doctor-smiling-portrait-close-up-Med-Res-72991363.jpg')">
							<div class="video-blog-texts">
								<h3>Ayurveda for Type-2 Diabetes</h3>
								<p>Ayurveda can be used efficiently in treating this condition.</p>
								<div class="row trending-view-share main-view-share">
									<div class="col-4">
										<p><span><i class="fas fa-eye"></span></i>20.6K</p>
									</div>
									<div class="col-4">
										<p><span><i class="fas fa-share-alt"></i></span>230</p>
									</div>
									<div class="col-4">
										<a href="#" data-toggle="modal" data-target="#videomodal"><i class="fas fa-play-circle"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide trending-video-swiper wow fadeInUp" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/360_F_259739252_3hoR3B8ZbSvPuVd46g3ZJSiVwqEytTTn.jpg')">
							<div class="video-blog-texts">
								<h3>Ayurveda for Type-2 Diabetes</h3>
								<p>Ayurveda can be used efficiently in treating this condition.</p>
								<div class="row trending-view-share main-view-share">
									<div class="col-4">
										<p><span><i class="fas fa-eye"></span></i>20.6K</p>
									</div>
									<div class="col-4">
										<p><span><i class="fas fa-share-alt"></i></span>230</p>
									</div>
									<div class="col-4">
										<a href="#" data-toggle="modal" data-target="#videomodal"><i class="fas fa-play-circle"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide trending-video-swiper wow fadeInUp" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Male-doctor-smiling-portrait-close-up-Med-Res-72991363.jpg')">
							<div class="video-blog-texts">
								<h3>Ayurveda for Type-2 Diabetes</h3>
								<p>Ayurveda can be used efficiently in treating this condition.</p>
								<div class="row trending-view-share main-view-share">
									<div class="col-4">
										<p><span><i class="fas fa-eye"></span></i>20.6K</p>
									</div>
									<div class="col-4">
										<p><span><i class="fas fa-share-alt"></i></span>230</p>
									</div>
									<div class="col-4">
										<a href="#" data-toggle="modal" data-target="#videomodal"><i class="fas fa-play-circle"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide trending-video-swiper wow fadeInUp" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/360_F_259739252_3hoR3B8ZbSvPuVd46g3ZJSiVwqEytTTn.jpg')">
							<div class="video-blog-texts">
								<h3>Ayurveda for Type-2 Diabetes</h3>
								<p>Ayurveda can be used efficiently in treating this condition.</p>
								<div class="row trending-view-share main-view-share">
									<div class="col-4">
										<p><span><i class="fas fa-eye"></span></i>20.6K</p>
									</div>
									<div class="col-4">
										<p><span><i class="fas fa-share-alt"></i></span>230</p>
									</div>
									<div class="col-4">
										<a href="#" data-toggle="modal" data-target="#videomodal"><i class="fas fa-play-circle"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide trending-video-swiper wow fadeInUp" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Male-doctor-smiling-portrait-close-up-Med-Res-72991363.jpg')">
							<div class="video-blog-texts">
								<h3>Ayurveda for Type-2 Diabetes</h3>
								<p>Ayurveda can be used efficiently in treating this condition.</p>
								<div class="row trending-view-share main-view-share">
									<div class="col-4">
										<p><span><i class="fas fa-eye"></span></i>20.6K</p>
									</div>
									<div class="col-4">
										<p><span><i class="fas fa-share-alt"></i></span>230</p>
									</div>
									<div class="col-4">
										<a href="#" data-toggle="modal" data-target="#videomodal"><i class="fas fa-play-circle"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide trending-video-swiper wow fadeInUp" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/360_F_259739252_3hoR3B8ZbSvPuVd46g3ZJSiVwqEytTTn.jpg')">
							<div class="video-blog-texts">
								<h3>Ayurveda for Type-2 Diabetes</h3>
								<p>Ayurveda can be used efficiently in treating this condition.</p>
								<div class="row trending-view-share main-view-share">
									<div class="col-4">
										<p><span><i class="fas fa-eye"></span></i>20.6K</p>
									</div>
									<div class="col-4">
										<p><span><i class="fas fa-share-alt"></i></span>230</p>
									</div>
									<div class="col-4">
										<a href="#" data-toggle="modal" data-target="#videomodal"><i class="fas fa-play-circle"></i></a>
									</div>
								</div>
							</div>
						</div>
						...
					</div>
				</div>
			<div class="swiper-pagination"></div>
			</section>
			
			
			<section class="section trending-blog-section">
                <div class="container">
					<div class="row trending-video-title">
						<div class="col-6 section__title pb--50">
							<h3 class="title__line">Trending Blog</h3>
						</div>
						<div class="col-6 see-more section__title pb--50">
							<a href="blog-content.html">See more</a>
						</div>
					</div>
                    <div class="row feature-row trending-blog">
                        <div class="col-md-6 wow slideInLeft">
                            <div class="feature-box box-slider-blog">
                                <div class="swiper-container single-blog-swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide blog-swiper">
											<div class="blog-swiper-img">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/PVLWOGCJLu.jpg">
											</div>
											<div class="blog-swiper-content">
												<p class="swiper-content-date">01/03/2021</p>
												<h5 class="swiper-content-title">Hypothyroidism- Ayurvedic remedies for it!</h5>
												<p class="swiper-content-para">Ayurveda approach to treatment of disease is highly individualized.
													According to ayurveda the thyroid function is controlled by Pitta dosha. Pitta/Agni - The fire is responsible for
													all of the metabolic actions carried out by....
												<a href="#" class="readmore">Read more</a></p>
											</div>
											<div class="row blog-share">
												<div class="col-3 content-center">
													<p><span><i class="fas fa-eye"></span></i>20.6K</p>
												</div>
												<div class="col-3">
													<div class="star-rating">
													
													  <input type="radio" id="5-stars" name="rating" value="5" />
													  <label for="5-stars" class="star">&#9733;</label>
													  <input type="radio" id="4-stars" name="rating" value="4" />
													  <label for="4-stars" class="star">&#9733;</label>
													  <input type="radio" id="3-stars" name="rating" value="3" />
													  <label for="3-stars" class="star">&#9733;</label>
													  <input type="radio" id="2-stars" name="rating" value="2" />
													  <label for="2-stars" class="star">&#9733;</label>
													  <input type="radio" id="1-star" name="rating" value="1" />
													  <label for="1-star" class="star">&#9733;</label>
													  5
													</div>
												</div>
												<div class="col-3 content-center">
													<a href="#"><p><i class="far fa-bookmark"></i></p></a>
												</div>
												<div class="col-3 content-center">
													<a href="#"><p><i class="fas fa-share-alt"></i></p></a>
												</div>
											</div>
										</div>
									  <div class="swiper-slide blog-swiper">
											<div class="blog-swiper-img">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/PVLWOGCJLu.jpg">
											</div>
											<div class="blog-swiper-content">
												<p class="swiper-content-date">01/03/2021</p>
												<h5 class="swiper-content-title">Hypothyroidism- Ayurvedic remedies for it!</h5>
												<p class="swiper-content-para">Ayurveda approach to treatment of disease is highly individualized.
													According to ayurveda the thyroid function is controlled by Pitta dosha. Pitta/Agni - The fire is responsible for
													all of the metabolic actions carried out by....
												<a href="#" class="readmore">Read more</a></p>
											</div>
											<div class="row blog-share">
												<div class="col-3 content-center">
													<p><span><i class="fas fa-eye"></span></i>20.6K</p>
												</div>
												<div class="col-3 content-center">
													<div class="star-rating">
													  <input type="radio" id="5-stars" name="rating" value="5" />
													  <label for="5-stars" class="star">&#9733;</label>
													  <input type="radio" id="4-stars" name="rating" value="4" />
													  <label for="4-stars" class="star">&#9733;</label>
													  <input type="radio" id="3-stars" name="rating" value="3" />
													  <label for="3-stars" class="star">&#9733;</label>
													  <input type="radio" id="2-stars" name="rating" value="2" />
													  <label for="2-stars" class="star">&#9733;</label>
													  <input type="radio" id="1-star" name="rating" value="1" />
													  <label for="1-star" class="star">&#9733;</label>
													  5
													</div>
												</div>
												<div class="col-3 content-center">
													<a href="#"><p><i class="far fa-bookmark"></i></p></a>
												</div>
												<div class="col-3 content-center">
													<a href="#"><p><i class="fas fa-share-alt"></i></p></a>
												</div>
											</div>
										</div>
									  <div class="swiper-slide blog-swiper">
											<div class="blog-swiper-img">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/PVLWOGCJLu.jpg">
											</div>
											<div class="blog-swiper-content">
												<p class="swiper-content-date">01/03/2021</p>
												<h5 class="swiper-content-title">Hypothyroidism- Ayurvedic remedies for it!</h5>
												<p class="swiper-content-para">Ayurveda approach to treatment of disease is highly individualized.
													According to ayurveda the thyroid function is controlled by Pitta dosha. Pitta/Agni - The fire is responsible for
													all of the metabolic actions carried out by....
												<a href="#" class="readmore">Read more</a></p>
											</div>
											<div class="row blog-share">
												<div class="col-3 content-center">
													<p><span><i class="fas fa-eye"></span></i>20.6K</p>
												</div>
												<div class="col-3">
													<div class="star-rating">
													  <input type="radio" id="5-stars" name="rating" value="5" />
													  <label for="5-stars" class="star">&#9733;</label>
													  <input type="radio" id="4-stars" name="rating" value="4" />
													  <label for="4-stars" class="star">&#9733;</label>
													  <input type="radio" id="3-stars" name="rating" value="3" />
													  <label for="3-stars" class="star">&#9733;</label>
													  <input type="radio" id="2-stars" name="rating" value="2" />
													  <label for="2-stars" class="star">&#9733;</label>
													  <input type="radio" id="1-star" name="rating" value="1" />
													  <label for="1-star" class="star">&#9733;</label>
													  5
													</div>
												</div>
												<div class="col-3 content-center">
													<a href="#"><p><i class="far fa-bookmark"></i></p></a>
												</div>
												<div class="col-3 content-center">
													<a href="#"><p><i class="fas fa-share-alt"></i></p></a>
												</div>
											</div>
										</div>
									  <div class="swiper-slide blog-swiper">
											<div class="blog-swiper-img">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/PVLWOGCJLu.jpg">
											</div>
											<div class="blog-swiper-content">
												<p class="swiper-content-date">01/03/2021</p>
												<h5 class="swiper-content-title">Hypothyroidism- Ayurvedic remedies for it!</h5>
												<p class="swiper-content-para">Ayurveda approach to treatment of disease is highly individualized.
													According to ayurveda the thyroid function is controlled by Pitta dosha. Pitta/Agni - The fire is responsible for
													all of the metabolic actions carried out by....
												<a href="#" class="readmore">Read more</a></p>
											</div>
											<div class="row blog-share">
												<div class="col-3 content-center">
													<p><span><i class="fas fa-eye"></span></i>20.6K</p>
												</div>
												<div class="col-3">
													<div class="star-rating">
													  <input type="radio" id="5-stars" name="rating" value="5" />
													  <label for="5-stars" class="star">&#9733;</label>
													  <input type="radio" id="4-stars" name="rating" value="4" />
													  <label for="4-stars" class="star">&#9733;</label>
													  <input type="radio" id="3-stars" name="rating" value="3" />
													  <label for="3-stars" class="star">&#9733;</label>
													  <input type="radio" id="2-stars" name="rating" value="2" />
													  <label for="2-stars" class="star">&#9733;</label>
													  <input type="radio" id="1-star" name="rating" value="1" />
													  <label for="1-star" class="star">&#9733;</label>
													  5
													</div>
												</div>
												<div class="col-3 content-center">
													<a href="#"><p><i class="far fa-bookmark"></i></p></a>
												</div>
												<div class="col-3 content-center">
													<a href="#"><p><i class="fas fa-share-alt"></i></p></a>
												</div>
											</div>
										</div>
									  <div class="swiper-slide blog-swiper">
											<div class="blog-swiper-img">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/PVLWOGCJLu.jpg">
											</div>
											<div class="blog-swiper-content">
												<p class="swiper-content-date">01/03/2021</p>
												<h5 class="swiper-content-title">Hypothyroidism- Ayurvedic remedies for it!</h5>
												<p class="swiper-content-para">Ayurveda approach to treatment of disease is highly individualized.
													According to ayurveda the thyroid function is controlled by Pitta dosha. Pitta/Agni - The fire is responsible for
													all of the metabolic actions carried out by....
												<a href="#" class="readmore">Read more</a></p>
											</div>
											<div class="row blog-share">
												<div class="col-3 content-center">
													<p><span><i class="fas fa-eye"></span></i>20.6K</p>
												</div>
												<div class="col-3">
													<div class="star-rating">
													  <input type="radio" id="5-stars" name="rating" value="5" />
													  <label for="5-stars" class="star">&#9733;</label>
													  <input type="radio" id="4-stars" name="rating" value="4" />
													  <label for="4-stars" class="star">&#9733;</label>
													  <input type="radio" id="3-stars" name="rating" value="3" />
													  <label for="3-stars" class="star">&#9733;</label>
													  <input type="radio" id="2-stars" name="rating" value="2" />
													  <label for="2-stars" class="star">&#9733;</label>
													  <input type="radio" id="1-star" name="rating" value="1" />
													  <label for="1-star" class="star">&#9733;</label>
													  5
													</div>
												</div>
												<div class="col-3 content-center">
													<a href="#"><p><i class="far fa-bookmark"></i></p></a>
												</div>
												<div class="col-3 content-center">
													<a href="#"><p><i class="fas fa-share-alt"></i></p></a>
												</div>
											</div>
										</div>
									</div>
									<!-- Add Arrows -->
									<div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div>
								</div>
							</div>
							<!-- Add Pagination -->
									<div class="blog-swiper-pagination"></div>
                        </div>
						
                        <div class="col-md-6 wow fadeInRightBig">
                            <div class="feature-box left-blog-box">
                                <div class="row">
									<div class="col-md-6 blog-swiper-img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/overnight-oats-banana-732x549-thumbnail-1-732x549.jpg">
									</div>
                                    <div class="col-md-6">
										<div class="blog-swiper-content">
											<p class="swiper-content-date">01/03/2021</p>
											<h5 class="swiper-content-title">The correct way of drinking water as per Ayurveda</h5>
											<p class="swiper-content-para">Ayurveda says, you must only drink water as and when you 
											feel thirsty and contrary to the...<a href="#" class="readmore">Read more</a></p>
										</div>
									</div>
                                </div>
								<div class="row blog-share">
									<div class="col-3 content-center">
										<p><span><i class="fas fa-eye"></span></i>20.6K</p>
									</div>
									<div class="col-3">
										<div class="star-rating">
										  <input type="radio" id="5-stars" name="rating" value="5" />
										  <label for="5-stars" class="star">&#9733;</label>
										  <input type="radio" id="4-stars" name="rating" value="4" />
										  <label for="4-stars" class="star">&#9733;</label>
										  <input type="radio" id="3-stars" name="rating" value="3" />
										  <label for="3-stars" class="star">&#9733;</label>
										  <input type="radio" id="2-stars" name="rating" value="2" />
										  <label for="2-stars" class="star">&#9733;</label>
										  <input type="radio" id="1-star" name="rating" value="1" />
										  <label for="1-star" class="star">&#9733;</label>
										  5
										</div>
									</div>
									<div class="col-3 content-center">
										<p><i class="far fa-bookmark"></i></p>
									</div>
									<div class="col-3 content-center">
										<p><i class="fas fa-share-alt"></i></p>
									</div>
								</div>
                            </div>
							<div class="feature-box left-blog-box">
                                <div class="row">
									<div class="col-md-6 blog-swiper-img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/overnight-oats-banana-732x549-thumbnail-1-732x549.jpg">
									</div>
                                    <div class="col-md-6">
										<div class="blog-swiper-content">
											<p class="swiper-content-date">01/03/2021</p>
											<h5 class="swiper-content-title">Ayurveda for Type-2 Diabetes!</h5>
											<p class="swiper-content-para">Ayurveda can be used efficiently in treating this condition. 
											Diabetes is known to the...<a href="#" class="readmore">Read more</a></p>
										</div>
									</div>
                                </div>
								<div class="row blog-share">
									<div class="col-3 content-center">
										<p><span><i class="fas fa-eye"></span></i>20.6K</p>
									</div>
									<div class="col-3">
										<div class="star-rating">
										  <input type="radio" id="5-stars" name="rating" value="5" />
										  <label for="5-stars" class="star">&#9733;</label>
										  <input type="radio" id="4-stars" name="rating" value="4" />
										  <label for="4-stars" class="star">&#9733;</label>
										  <input type="radio" id="3-stars" name="rating" value="3" />
										  <label for="3-stars" class="star">&#9733;</label>
										  <input type="radio" id="2-stars" name="rating" value="2" />
										  <label for="2-stars" class="star">&#9733;</label>
										  <input type="radio" id="1-star" name="rating" value="1" />
										  <label for="1-star" class="star">&#9733;</label>
										  5
										</div>
									</div>
									<div class="col-3 content-center">
										<p><i class="far fa-bookmark"></i></p>
									</div>
									<div class="col-3 content-center">
										<p><i class="fas fa-share-alt"></i></p>
									</div>
								</div>
                            </div>
                        </div>
						
					</div>	
					
                </div>
            </section>
			
			<section class="section">
                <div class="container">
                    <div class="row trending-video-title">
						<div class="col-6 section__title pb--50">
							<h3 class="title__line">Popular health tips</h3>
						</div>
						<div class="col-6 see-more section__title pb--50">
							<a href="healthtip-listing.html">See more</a>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-3 wow fadeInUp">
							<div class="tips-blog-box">
								<div class="health-tip-img blog-swiper-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Female_Eating_Vegetables_732x549-thumbnail-732x549.jpg">
								</div>
								<div class="health-tips-content">
									<h6>Treating piles with Ayurveda</h6>
									<p>Piles or haemorrhoids is a condition in which the rectal veins become inflamed, thus causing bleeding and swelling.
										Hemorrhoics are clumps or cushions of tissue which aggregated around the anal canal and full of blood vessels, muscle and 
										elastic fibre. Piles can be of various sizes and are found inside the anus or around.
									</p>
								</div>
							</div>
                        </div>
						<div class="col-md-3 wow fadeInUp">
							<div class="tips-blog-box">
								<div class="health-tip-img blog-swiper-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mom-newborn-baby-kissing-holding-hand-732x549-thumbnail-732x549.jpg">
								</div>
								<div class="health-tips-content">
									<h6>How does green tea benefits for skin?</h6>
									<p>Looking beautiful is what everyone wants but the cosmetic products we use are at times hard on skin. 
										This is the reason people want to use natural products. There are many natural things which you can
										use and one of them is green tea. Making green tea as a part of your daily routine can work wonders 
										and bring a mesmerizing glow on skin.
									</p>
								</div>
							</div>
                        </div>
						<div class="col-md-3 wow fadeInUp">
							<div class="tips-blog-box">
								<div class="health-tip-img blog-swiper-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ginger-turmeric-732x549-thumbnail-732x549.jpg">
								</div>
								<div class="health-tips-content">
									<h6>Chemical peels for Skin Ageing!</h6>
									<p>Cheical peels are a skin care procedure that can be used on the face, neck and even the hands in order to remove
										and prevent the fine lines. These peels are also helpful in treating age spots and blemishes. These peels can be 
										a part of one's regular skin care regimen in order to improve the overall appearance of the skin.
									</p>
								</div>
							</div>
                        </div>
						<div class="col-md-3 wow fadeInUp">
							<div class="tips-blog-box">
								<div class="health-tip-img blog-swiper-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/overnight-oats-banana-732x549-thumbnail-1-732x549.jpg">
								</div>
								<div class="health-tips-content">
									<h6>Eczema - How you can prevent it's Flare-ups?</h6>
									<p>Are you experiencing skin itchiness and development of dry, scaly rashes on your skin? This indicates you have eczema,
										which is group of skin diseases occuring due to the inflammation and irritation of skin. Atopic dermititis is the common 
										form of eczema. The disease can be controlled if proper treatment is undertaken.
									</p>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section trending-blog-section">
                <div class="container">
                    <div class="row trending-video-title">
						<div class="col-6 section__title pb--50">
							<h3 class="title__line">Popular Q&A</h3>
						</div>
						<div class="col-6 see-more section__title pb--50">
							<a href="blog-list.html">See more</a>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-6 wow fadeInLeft">
							<a href="qna-content.html">
								<div class="left-blog-box qa-box">
									<div class="qa-content">
										<h6>Hello I want to ask when you are 5 to 6 months pregnant and throw it away...</h6>
										<div class="content-para truncate">
											<p class="swiper-content-para">Yes, one can. Any couple desirous of pregnancy and not getting same naturally must meet
										gynecologist or infertility specialist accepting facts that it needs many reports and different trials of treatment. Pitta/Agni - The fire is responsible for all of the metabolic actions carried out by Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.According to ayurveda the thyroid function is controlled by Pitta dosha. 
												<!-- <a href="#" class="readmore">Read more</a> -->
											</p>
										</div>
									</div>
									<div class="qa-content-below-list">
										<ul>
											<li><p class="qa_ans">1 more answer</p></li>
											<li><button class="qna-action-btn"><i class="far fa-thumbs-up"></i></button></li>
											<li><button class="qna-action-btn"><i class="far fa-bookmark"></i></button></li>
											<li><button class="qna-action-btn"><i class="fas fa-share-alt"></i></button></li>
											<li>
												<a href="#" class="avatar-box">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/360_F_259739252_3hoR3B8ZbSvPuVd46g3ZJSiVwqEytTTn.jpg" alt="Avatar">
													<span class="avatar-desc">Lorem ipsum dolor</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</a>
                        </div>
						<div class="col-md-6  wow fadeInRight">
							<a href="qna-content.html">
								<div class="left-blog-box qa-box">
									<div class="qa-content">
										<h6>I took letrozole 3 to 7 my gyno did follicular scan on cd 9 follicile size...</h6>
										<div class="content-para truncate">
											<p class="swiper-content-para">I took letrozole 3 to 7 my gyno did follicular scan on cd 9 follicile size
									was 10mm and she did scan on cd 11 it was 10mm only my gyno sent back home saying this time it doesn't work. Pitta/Agni - The fire is responsible for all of the metabolic actions carried out by Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.According to ayurveda the thyroid function is controlled by Pitta dosha. 
												<!-- <a href="#" class="readmore">Read more</a> -->
											</p>
										</div>
									</div>
									<div class="qa-content-below-list">
										<ul>
											<li><p class="qa_ans">1 more answer</p></li>
											<li><button class="qna-action-btn"><i class="far fa-thumbs-up"></i></button></li>
											<li><button class="qna-action-btn"><i class="far fa-bookmark"></i></button></li>
											<li><button class="qna-action-btn"><i class="fas fa-share-alt"></i></button></li>
											<li>
												<a href="#" class="avatar-box">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/360_F_259739252_3hoR3B8ZbSvPuVd46g3ZJSiVwqEytTTn.jpg" alt="Avatar">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Male-doctor-smiling-portrait-close-up-Med-Res-72991363.jpg" alt="Avatar">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Sanjog Mogdil.png" alt="Avatar">
												</a>
											</li>
										</ul>
									</div>
								</div>
							</a>
                        </div>
						<div class="col-md-6 wow fadeInLeft">
							<a href="qna-content.html">
								<div class="left-blog-box qa-box">
									<div class="qa-content">
										<h6>I am a 25 yr old man and my weight is 67Kg actually mmy left chest is bigger...</h6>
										<div class="content-para truncate">
											<p class="swiper-content-para">Liposuction is the best option in gynecomastia. It is minimally invasive
									 surgery with no major scars, minimal pain & very fast recovery. All creams and medicine. Pitta/Agni - The fire is responsible for
												all of the metabolic actions carried out by Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.According to ayurveda the thyroid function is controlled by Pitta dosha. 
												<!-- <a href="#" class="readmore">Read more</a> -->
											</p>
										</div>
									</div>
									<div class="qa-content-below-list">
										<ul>
											<li><p class="qa_ans">1 more answer</p></li>
											<li><button class="qna-action-btn"><i class="far fa-thumbs-up"></i></button></li>
											<li><button class="qna-action-btn"><i class="far fa-bookmark"></i></button></li>
											<li><button class="qna-action-btn"><i class="fas fa-share-alt"></i></button></li>
											<li>
												<a href="#" class="avatar-box">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/360_F_259739252_3hoR3B8ZbSvPuVd46g3ZJSiVwqEytTTn.jpg" alt="Avatar">
													<span class="avatar-desc">Lorem ipsum dolor</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</a>
                        </div>
						<div class="col-md-6  wow fadeInRight">
							<a href="qna-content.html">
								<div class="left-blog-box qa-box">
									<div class="qa-content">
										<h6>My bf fingered and put his dick on my vagina, there is no intercourse,no clue...</h6>
										<div class="content-para truncate">
											<p class="swiper-content-para">Dear user. TO CAUSE PREGNANCY on a woman, sperm should be inseminated inside the vagina
												with some means, according to ayurveda the thyroid function is controlled by Pitta dosha. Pitta/Agni - The fire is responsible for
												all of the metabolic actions carried out by Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.According to ayurveda the thyroid function is controlled by Pitta dosha. 
												<!-- <a href="#" class="readmore">Read more</a> -->
											</p>
										</div>
										<!-- <p class="swiper-content-para">Dear user. TO CAUSE PREGNANCY on a woman, sperm should be inseminated inside the vagina -->
										<!-- with some means... -->
										<!-- <a href="#" class="readmore">Read more</a></p> -->
									</div>
									<div class="qa-content-below-list">
										<ul>
											<li><p class="qa_ans">1 more answer</p></li>
											<li><button class="qna-action-btn"><i class="far fa-thumbs-up"></i></button></li>
											<li><button class="qna-action-btn"><i class="far fa-bookmark"></i></button></li>
											<li><button class="qna-action-btn"><i class="fas fa-share-alt"></i></button></li>
											<li>
												<a href="#" class="avatar-box">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/360_F_259739252_3hoR3B8ZbSvPuVd46g3ZJSiVwqEytTTn.jpg" alt="Avatar">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Male-doctor-smiling-portrait-close-up-Med-Res-72991363.jpg" alt="Avatar">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Sanjog Mogdil.png" alt="Avatar">
												</a>
											</li>
										</ul>
									</div>
								</div>
							</a>
                        </div>
                    </div>
                </div>
            </section>
			
			
            <section class="section testimonials">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="row trending-video-title">
								<div class="col-lg-6 section__title pb--50">
									<h3 class="title__line">Testimonials </h3>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="testimonial_slider" class="owl-carousel text-center">
                                <div class="item">
                                    <div class="row testimonial-list wow fadeInUp">
                                        <div class="testimonial-img col-md-4">
											<div class="img-border">
												<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/testi-03.jpg" alt="" width="150" height="150">
											</div>
                                        </div>
                                        <div class="testimonial-text col-md-8">
                                            <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore. <i class="fas fa-quote-right"></i>
											</p>
											<span class="f-right">-Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row testimonial-list wow fadeInUp">
                                        <div class="testimonial-img col-md-4">
											<div class="img-border">
												<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/testi-02.jpg" alt="" width="150" height="150">
											</div>
                                        </div>
                                        <div class="testimonial-text col-md-8">
                                            <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore. <i class="fas fa-quote-right"></i>
											</p>
											<span class="f-right">-Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row testimonial-list wow fadeInUp">
                                        <div class="testimonial-img col-md-4">
											<div class="img-border">
												<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/testi-05.jpg" alt="" width="150" height="150">
											</div>
                                        </div>
                                        <div class="testimonial-text col-md-8">
                                            <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore. <i class="fas fa-quote-right"></i>
											</p>
											<span class="f-right">-Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row testimonial-list wow fadeInUp">
                                        <div class="testimonial-img col-md-4">
											<div class="img-border">
												<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/testi-04.jpg" alt="" width="150" height="150">
											</div>
                                        </div>
                                        <div class="testimonial-text col-md-8">
                                            <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore. <i class="fas fa-quote-right"></i>
											</p>
											<span class="f-right">-Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row testimonial-list wow fadeInUp">
                                        <div class="testimonial-img col-md-4">
											<div class="img-border">
												<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/testi-01.jpg" alt="" width="150" height="150">
											</div>
                                        </div>
                                        <div class="testimonial-text col-md-8">
                                            <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore. <i class="fas fa-quote-right"></i>
											</p>
											<span class="f-right">-Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
		
 		<!-- Content /-->
	
		
		
		<!-- video popup modal -->
		<div class="modal fade video-popup-modal" id="videomodal" tabindex="-1" role="dialog" aria-labelledby="videoModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<div class="wrapper">
					<iframe src="https://www.youtube.com/embed/RKAU4LHOA3Q?autoplay=0&mute=0"></iframe>
				</div>
				
				<div class="row">
					<div class="col-6">
						<div class="blog-swiper-content video-listing-popup-content">
							<p class="swiper-content-date">01/03/2021</p>
							<h5 class="swiper-content-title">Lorem Ipsum</h5>
							<a href="#" class="readmore">See comments and reviews</a>
						</div>
					</div>
					<div class="col-6">
						<div class="row blog-share video-popup-share">
							<div class="col-4 content-center">
								<p><span><i class="fas fa-eye"></span></i>20.6K</p>
							</div>
							<div class="col-4 content-center">
								<a href="#"><p><i class="far fa-bookmark"></i></p></a>
							</div>
							<div class="col-4 content-center">
								<a href="#"><p><i class="fas fa-share-alt"></i></p></a>
							</div>
						</div>
					</div>
				</div>
				
			  </div>
			  
			</div>
		  </div>
		</div>
		
		
<?php get_footer(); ?>