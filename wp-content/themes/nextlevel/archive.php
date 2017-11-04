<?php get_header() ?>
<div class="container bg-1">
	<div class="row">
		<div class="col-lg-12">
			<div class="breadcrumb">
				<?php the_breadcrumb(); ?>
			</div>
			<h1>Блог</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="content-page">
			<br>
			<br>
			<div class="blog-preview">
				<article>
					<?php
					$temp = $wp_query;
					$wp_query= null;
					$wp_query = new WP_Query(); $wp_query->query('showposts=6' . '&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<div class="stat">
						<a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a>
						<h4><a href="<?php the_permalink(); ?>" title="Читать дальше"><?php the_title(); ?></a></h4>
						<div class="author">
							<img src="<?php bloginfo('template_directory') ?>/img/author.png" alt="Next Level - Author"><p><?php the_author() ?></p>
						</div>
						<div class="data">
							<img src="<?php bloginfo('template_directory') ?>/img/calendar.png" alt="Next Level - Calendar"><p><?php the_date('F j, Y', '<p class="date-post">', '</p>'); ?></p>
						</div>
						<hr>
						<?php the_date('F j, Y', '<p class="date-post>', '</p>'); ?>
						<div class="stat-content">
							<?php the_excerpt(); ?>
						</div>
						<div class="bot-stat">
							<img src="<?php bloginfo('template_directory') ?>/img/statii.png" alt="Next Level - Statii">
						</div>
					</div>
				<?php endwhile; ?>
				<?php if ($paged > 1) { ?>
				<nav id="nav-posts">
					<div class="prev1"><?php wp_pagenavi(); ?></div>
				</nav>
				<?php } else { ?>
				<nav id="nav-posts">
					<div class="prev1"><?php wp_pagenavi(); ?></div>
				</nav>
				<?php } ?>
				<?php wp_reset_postdata(); ?>
			</article>
		</div>
	</div>
</div>
</div>
<?php get_footer() ?>