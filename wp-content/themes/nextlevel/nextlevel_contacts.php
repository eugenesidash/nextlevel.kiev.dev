<?php 
/*
Template Name: Contacts
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
<footer>
	<p>Copyright <?php echo date('Y'); ?></p>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/dropdown-menu.js"></script>
<?php wp_footer(); ?>
</body>
</html>