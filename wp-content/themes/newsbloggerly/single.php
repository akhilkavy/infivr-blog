<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package customizable Lite
 */
$customizable_blogily_single_breadcrumb_section = get_theme_mod('customizable_blogily_single_breadcrumb_section', '1');
$customizable_blogily_single_tags_section = get_theme_mod('customizable_blogily_single_tags_section', '1');
$customizable_blogily_authorbox_section = get_theme_mod('customizable_blogily_authorbox_section', '1');
$customizable_blogily_relatedposts_section = get_theme_mod('customizable_blogily_relatedposts_section', '1');

//get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
 

	<div class="main-container">
		<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'customizable-blogily' ); ?></a>

		<header id="site-header" role="banner">
			<?php if ( get_theme_mod( 'toggle_header_frontpage' ) == '' ) : ?>
				<div class="primary-navigation header-activated">
					<?php else : ?>
						<?php if ( is_front_page() ) : ?>
							<div class="primary-navigation header-activated">
								<?php else : ?>
									<div class="primary-navigation">
									<?php endif; ?>
								<?php endif; ?>
								
								<button id="pull" class="toggle-mobile-menu"><?php esc_html_e('Menu', 'customizable-blogily'); ?></button>
								<span class="accessibility-skip-mobile-menu"></span>
								<div class="container clear">
									<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
										<?php if (has_custom_logo()) { ?>
											<span id="logo" class="image-logo" itemprop="headline">
												<?php the_custom_logo(); ?>
											</span><!-- END #logo -->
										<?php } else { ?>
											<span class="site-logo" itemprop="headline">
												<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>
											</span><!-- END #logo -->
										<?php } ?>


										<?php if ( has_nav_menu( 'primary' ) ) { ?>
											<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix', 'container' => '' ) ); ?>
										<?php } else { ?>
											<ul class="menu clearfix">
												<?php wp_list_categories('title_li='); ?>
											</ul>
										<?php } ?>
										<a href="#" id="accessibility-close-mobile-menu"></a>
									</nav><!-- #site-navigation -->
								</div>
							</div>            

							<div class="container clear">
								<a href="<?php echo esc_url(home_url()); ?>">
									
								</a>
							</div>
						</header><!-- #masthead -->


						<?php if ( is_active_sidebar( 'top-widget-first') ||  is_active_sidebar( 'top-widget-second') ||  is_active_sidebar( 'top-widget-third')  ) : ?>
						<div class="container">
							<?php if ( get_theme_mod( 'toggle_header_frontpage' ) == '' ) : ?>
								<div class="upper-widgets-grid-wrapper">

									<?php else : ?>

										<?php if ( is_front_page() ) : ?>
											<div class="upper-widgets-grid-wrapper">
												<?php else : ?>

													<div class="upper-widgets-grid-wrapper upper-widgets-grid-wrapper-front-page-only">
													<?php endif; ?>


												<?php endif; ?>

												<div class="upper-widgets-grid-wrapper">
													<?php if ( is_active_sidebar( 'top-widget-first' ) ) : ?>
														<div class="upper-widgets-grid">
															<div class="top-column-widget">
																<?php dynamic_sidebar( 'top-widget-first' ); ?> 
															</div>
														</div>
													<?php endif; ?>
													<?php if ( is_active_sidebar( 'top-widget-second' ) ) : ?>
														<div class="upper-widgets-grid upper-widgets-grid-middle"> 
															<div class="top-column-widget">
																<?php dynamic_sidebar( 'top-widget-second' ); ?> 
															</div> 
														</div>
													<?php endif; ?>
													<?php if ( is_active_sidebar( 'top-widget-third' ) ) : ?>
														<div class="upper-widgets-grid">
															<div class="top-column-widget">
																<?php dynamic_sidebar( 'top-widget-third' ); ?> 
															</div>
														</div>
													<?php endif; ?>
												</div>
											</div>
										</div>									

									<?php endif; ?>






<div id="page" class="single">
	<div class="content">
		<!-- Start Article -->
		<?php if($customizable_blogily_single_breadcrumb_section == '0') { ?>
		<div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><?php customizable_blogily_the_breadcrumb(); ?></div>
		<?php } ?>
		<article class="article">		
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
				<div class="single_post">
					<!-- Start Content -->
					<div id="content" class="post-single-content box mark-links">
					<header>
						<!-- Start Title -->
						<h1 class="title single-title"><?php the_title(); ?></h1>
						<!-- End Title -->
						<div class="post-date-customizable"><?php esc_html_e( 'Posted On', 'newsbloggerly' ); ?> <?php the_time( get_option( 'date_format' ) ); ?></div>

					</header>

						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => '<div class="pagination">', 'after' => '</div>', 'link_before'  => '<span class="current"><span class="currenttext">', 'link_after' => '</span></span>', 'next_or_number' => 'next_and_number', 'nextpagelink' => __('Next', 'newsbloggerly' ), 'previouspagelink' => __('Previous', 'newsbloggerly' ), 'pagelink' => '%','echo' => 1 )); ?>
						<?php if($customizable_blogily_single_tags_section == '1') { ?>
						<!-- Start Tags -->
						<div class="tags"><?php the_tags('<span class="tagtext">'.__('Tags','newsbloggerly').':</span>',', ') ?></div>
						<!-- End Tags -->
						<?php } ?>
					</div><!-- End Content -->
					<?php if($customizable_blogily_relatedposts_section == '1') { ?>	
					<!-- Start Related Posts -->
					<?php $categories = get_the_category($post->ID); 
					if ($categories) { $category_ids = array(); 
						foreach($categories as $individual_category) 
							$category_ids[] = $individual_category->term_id; 
						$args=array( 'category__in' => $category_ids, 
							'post__not_in' => array($post->ID), 
							'ignore_sticky_posts' => 1, 
							'showposts'=> 3,
							'orderby' => 'rand' );
						$my_query = new wp_query( $args ); if( $my_query->have_posts() ) {
							echo '<div class="related-posts"><div class="postauthor-top"><h3>'.esc_html__('Related Posts', 'newsbloggerly').'</h3></div><div class="related-posts-wrapper">';
							$pexcerpt=1; $j = 0; $counter = 0; 
							while( $my_query->have_posts() ) { 
								$my_query->the_post();?>
								<article class="post excerpt  <?php echo (++$j % 3== 0) ? 'last' : ''; ?>">
									<?php if ( has_post_thumbnail() ) { ?>
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
										<div class="related-post-featured-thumbnail-container">
											<div class="featured-thumbnail-overlay"></div>
											<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  
											echo '<div class="related-posts-thumbnail" style="background-image:url('.esc_url($featured_img_url).')">'; ?>
											<h5 class="title front-view-title"><?php the_title(); ?></h5>
											<?php echo '</div>' ?>
										</div>
									</a>
									<?php } else { ?>
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="related-posts-no-img">
											<h5 class="title front-view-title"><?php the_title(); ?></h5>
									
									</a>
									<?php } ?>
								</article><!--.post.excerpt-->
								<?php $pexcerpt++;?>
								<?php } echo '</div></div>'; }} wp_reset_postdata(); ?>
								<!-- End Related Posts -->
								<?php }?>  
								<?php if($customizable_blogily_authorbox_section == '1') { ?>
								<!-- Start Author Box -->
								<div class="postauthor">
									<h4><?php esc_html_e('About The Author', 'newsbloggerly'); ?></h4>
									<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '85' );  } ?>
									<h5><?php the_author(); ?></h5>
									<p><?php the_author_meta('description') ?></p>
								</div>
								<!-- End Author Box -->
								<?php }?>  
								<?php comments_template( '', true ); ?>
							</div>
						</div>
					<?php endwhile; ?>
				</article>
				<!-- End Article -->
				<!-- Start Sidebar -->
				<?php get_sidebar(); ?>
				<!-- End Sidebar -->
			</div>
		</div>
		<?php get_footer(); ?>
