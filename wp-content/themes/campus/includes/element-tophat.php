<!-- Top Hat -->
<?php if (get_option_tree('top_hat') != 'No') { ?>
<div class="" id="section-tophat">

		<a href="#" class="button-menu-mob">
			<span></span>
			<span></span>
			<span></span>
		</a>

	<div class="mob-menu">
		<div id="section-navigation">
			<div class="container">
				<?php get_template_part( 'includes/element', 'navigation' ); ?>
			</div>
		</div>

	</div>
	<!-- 960 Container -->
	<div class="container">			

		<div class="sixteen columns">
					
			<div class="columns social alpha">
				<?php if(class_exists('AJAXY_SF_WIDGET')) :
					get_search_form();
				else : ?>			
					<?php get_template_part( 'includes/element', 'searchform' ); ?>
				<?php endif; ?>
				
				<?php get_template_part( 'includes/element', 'getsocial' ); ?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("switch-lang") ) : ?>
				<?php endif; ?>
			</div>						
			
			<div class="tagline omega">
				<?php echo get_option_tree('top_hat_blurb'); ?>
			</div>	

			<!-- Banner -->
			<?php if (get_option_tree('fp_banner')) : ?> 
			<div class="fp_banner_space" >
				<p> </p>
			</div>				
			<?php endif; ?>	
			<!-- /End Banner -->
			
		</div>
		
	</div>
	
</div>
<?php } else{} ?>