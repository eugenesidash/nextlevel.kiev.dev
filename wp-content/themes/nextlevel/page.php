<?php get_header() ?>
<div class="container">
	<div class="row">
		<div class="content-page">
			<h1><?php single_post_title() ?></h1>
			<?php the_post(); ?>
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php get_footer() ?>