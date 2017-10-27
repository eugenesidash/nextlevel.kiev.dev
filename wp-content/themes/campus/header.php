<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	
	<title><?php
		wp_title( '|', true, 'right' );	 
		bloginfo( 'name' );	
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";	
		?></title>	



	<!-- Mobile Specific Metas
	================================================== -->	
	<?php if (ot_get_option('responsive_toggle') == 'No') { ?>	  		
	<meta name="viewport" content="initial-scale=0.6, maximum-scale=1.0, user-scalable=yes, width=1000" />		
	<?php } else { ?>		 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	<?php } ?>
	
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php echo ot_get_option('favicon'); ?>" type="image/gif" />

	<?php if ( ! isset( $content_width ) ) 
	$content_width = 960;
	?>

	<script type="text/javascript">
		VK.init({apiId: 4521050, onlyWidgets: true});
	</script>

	<?php wp_head(); ?></head>
<script type="text/javascript" src="/callme/js/callme.js"></script>
	<!-- Start the Markup ================================================== -->
	<body <?php body_class(); ?> >

		<!-- Super Container Flag Dropdown -->
		<?php if (get_option_tree('fp_banner')) : 

		// Set the columns class for each module.
		if(ot_get_option('tophat_columns_count') != '') : 
			$header_columns = ot_get_option('tophat_columns_count');
		else : 
			$header_columns = "one-third column";
		endif;
		?> 
		<div class="super-container full-width" id="section-flagdropdown">

			<div class="slidingDiv" style="display: none;">
				<div class="container">
					<div class="<?php echo $header_columns; ?>">
						<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('dropdown-widget-1') ) ?>
					</div>
					<div class="<?php echo $header_columns; ?>">
						<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('dropdown-widget-2') ) ?>
					</div>
					<div class="<?php echo $header_columns; ?>">
						<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('dropdown-widget-3') ) ?>
					</div>
					<div class="<?php echo $header_columns; ?>">
						<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('dropdown-widget-4') ) ?>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="sixteen columns">

					<!-- Banner -->
					<div class="fp_banner" >
						<div class="show_hide flag_toggle" >
							<img width="92px" height="auto" src="<?php echo get_option_tree('fp_banner'); ?>" />
						</div>
					</div>        
					<!-- /End Banner -->

				</div>
			</div>
		</div>

	<?php endif; ?>	
	<!-- /Flag Dropdown -->

	<?php get_template_part( 'includes/element', 'tophat' ); ?>

	<!-- Header -->
	<header>

		<!-- Super Container for Logo -->
		<div class="super-container full-width" id="section-header">
			<div class="container">
				<div class="sixteen columns">
					<div class="heading_title"><span>Школа иностранных языков
				</span></div>
				<div class="heading_contacts"><span>(099)764-07-15</span><span>(093)426-00-46</span><span>(096)315-24-77</span><span><a href="mailto:nextlevel_203@ukr.net">next_level203@ukr.net</a></span></div>
				<!-- Branding -->
				<div class="site-title-wrapper">
					<a href="<?php echo home_url(); ?>/" title="<?php echo bloginfo('blog_name'); ?>">
						<?php if(ot_get_option('logo')) : $logopath = ot_get_option('logo'); ?>
							<img id="logotype" src="<?php echo $logopath; ?>" alt="<?php echo bloginfo('blog_name'); ?>" />
						<?php else : ?>
							<?php echo bloginfo('blog_name'); ?>		
						<?php endif; ?>
						<?php if(ot_get_option('logo')) : ; else : ?>
							<span class="site-title"> | <?php echo get_bloginfo('description'); ?></span>	
						<?php endif; ?>
					</a>
				</div>
				<!-- /End Branding -->

			</div>
		</div>
	</div>
	<!-- /End Super Container for Logo -->

	<!-- Super Container for Navigation -->
	<div class="super-container full-width" id="section-navigation">
		<div class="container">				
			<?php get_template_part( 'includes/element', 'navigation' ); ?>	
		</div>
	</div>
	<!-- /End Super Container for Navigation -->			


</header>
<!-- /End Header -->


<?php if(get_custom_field('slider_shortcode')) : ?>

	<div class="super-container full-width" id="section-slider">
		<?php get_template_part( 'includes/element', 'header-slider' ); ?>
	</div> 
	
<?php endif;?>

<!-- ============================================== -->
<!-- PAGE CONTENT COMES NEXT -->
<!-- ============================================== -->