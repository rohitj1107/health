<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Health Giggles</title>
		
		
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

		<?php wp_head(); ?>
	
        
    </head>
    
    <body>
        <!-- Header -->
        <header class="header">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="logo">
								<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></a>
							</div>
						</div>
						<div class="col-md-6 padding-tb-15">
							<div class="input-group main-search">
								<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text"> 
								<div class="input-group-btn search-btn">
									<button class="btn btn-default" type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>
								</div>
							  <?php /* echo do_shortcode('[ivory-search id="48" title="Default Search Form"]') */ ?>
							</div>
						</div>
						<div class="col-md-3 padding-tb-15">
							<div class="login">
                                <a href="login.html" data-toggle="modal" data-target="#comingsoon"><p><span><i class="fas fa-lock"></i></span>Log In or Sign up</p></a>
                            </div>
						</div>
					</div>
				</div>
			</div>
            <div class="header-down" id="sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
							<nav id="menu-wrap"> 
<ul id="menu">							
							<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'menu_class' => '',        
											'menu' => 'menu',
											'container'  => 'ul',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} 
								?>
								</ul>
							</nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<!-- Header /-->
		
         <!-- Mobile Header -->
        <header class="mobile-header">
			<div class="row">
				<div class="panel-control-left">
					<a class="toggle-menu" href="#side_menu"><i class="fas fa-bars"></i></a>
				</div>
				<div class="col-5 page_title">
					<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" class="img-fluid" width="60" height="60"></a>
				</div>
				<div class="col-7 page_search">
					<div class="input-group main-search">
					  <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
					  <div class="input-group-btn search-btn">
						<button class="btn btn-default" type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>
					  </div>
					</div>
				</div>
			</div>
        </header>
		<!-- Mobile Header /-->
		
        <!-- Mobile Sidebar -->
        <div class="sidebar sidebar-menu" id="side_menu">
            <div class="sidebar-inner slimscroll">
				<a id="close_menu" href="#"><i class="fas fa-times"></i></a>
                <ul class="mobile-menu-wrapper" style="display: block;">
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="" class="menu-toggle">Home Remedies <i class="fas fa-sort-down  menu-toggle"></i></a>
                        </div>
                        <ul class="mobile-submenu-wrapper" style="display: none;">
                            <li>
								<a class="dropdown-item" href="blog-list.html">Menstrual Pain</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Chronic Headache</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Flatulence</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Sore Throat</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="" class="menu-toggle">Hot Topic <i class="fas fa-sort-down  menu-toggle"></i></a>
                        </div>
                        <ul class="mobile-submenu-wrapper" style="display: none;">
                            <li>
								<a class="dropdown-item" href="blog-list.html">Covid-19</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Cardiovascular Disease</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Arrhytmia Diagnosis</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Nerve Damage</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="" class="menu-toggle">Feminine Hygiene <i class="fas fa-sort-down  menu-toggle"></i></a>
                        </div>
                        <ul class="mobile-submenu-wrapper" style="display: none;">
                            <li>
								<a class="dropdown-item" href="blog-list.html">Culture and menstruation</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Sanitary napkin</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Sustainable menstruation</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Bacterial vaginosis</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="" class="menu-toggle">Diet Management <i class="fas fa-sort-down  menu-toggle"></i></a>
                        </div>
                        <ul class="mobile-submenu-wrapper" style="display: none;">
                            <li>
								<a class="dropdown-item" href="blog-list.html">Paleo Diet</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Vegan Diet</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Low-Carb Diets</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Ultra-Low-Fat Diet</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="" class="menu-toggle">Kids Health  <i class="fas fa-sort-down  menu-toggle"></i></a>
                        </div>
                        <ul class="mobile-submenu-wrapper" style="display: none;">
                            <li>
								<a class="dropdown-item" href="blog-list.html">Respiratory syncytial virus</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Ear infections</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Conjunctivitis</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Gastroenteritis</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="" class="menu-toggle">Human Anatomy <i class="fas fa-sort-down  menu-toggle"></i></a>
                        </div>
                        <ul class="mobile-submenu-wrapper" style="display: none;">
                            <li>
								<a class="dropdown-item" href="blog-list.html">Skeletal</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Nervous</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Respiratory</a>
                            </li>
                            <li>
								<a class="dropdown-item" href="blog-list.html">Reproductive</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
		<!-- Mobile Sidebar /-->