<?php 
/*
Template Name: Schedule and prices
*/
?>
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
<?php the_post(); ?>
<?php the_content(); ?>
<?php get_footer() ?>