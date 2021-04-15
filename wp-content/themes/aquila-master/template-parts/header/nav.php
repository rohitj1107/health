<?php
/**
 * Header Navigation template.
 *
 * @package Aquila
 */

$menu_class = \Aquila_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'aquila-header-menu' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<?php
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
		?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<header class="header">
            <div class="header-down" id="sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
							<nav id="menu-wrap">    
								
			<?php
			if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
				?>
				<ul id="menu" style="margin:0; padding:0;">
					<?php
					foreach ( $header_menus as $menu_item ) {
						if ( ! $menu_item->menu_item_parent ) {

							$child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
							$has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );
							$has_sub_menu_class = ! empty( $has_children ) ? 'has-submenu' : '';

							if ( ! $has_children ) {
								?>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>">
										<?php echo esc_html( $menu_item->title ); ?>
									</a>
								</li>
								<?php
							} else {
								?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url ); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo esc_html( $menu_item->title ); ?>
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php
										foreach ( $child_menu_items as $child_menu_item ) {
											?>
											<a class="dropdown-item" href="<?php echo esc_url( $child_menu_item->url ); ?>">
												<?php echo esc_html( $child_menu_item->title ); ?>
											</a>
											<?php
										}
										?>
									</div>
								</li>
								<?php
							}
							?>
							<?php
						}
					}
					?>
				</ul>
				<?php
			}
			?>
			<?php //get_search_form(); ?>
		</div></div></div></div></div></header>
<!-- <div class="breadcrumb"><?php get_breadcrumb(); ?></div> -->

		<div class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav aria-label="breadcrumb">
						  <ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><?php get_breadcrumb(); ?></a></li>
						  </ul>
						  <span class="search_result"><?php 
						  $categories = get_the_category();
						  echo $categories[0]->count . ' Results';
						  ?></span>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</div>
</nav>


