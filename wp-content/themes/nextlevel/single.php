<?php get_header() ?>
<div class="container bg-1">
	<div class="row">
		<div class="col-lg-12">
			<div class="breadcrumb">
				<?php the_breadcrumb(); ?>
			</div>
			<h1><?php single_post_title() ?></h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="content-page">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_type() );
						the_post_navigation();
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile;
					?>
				</main>
			</div>
		</div>
	</div>
</div>
<?php get_footer() ?>