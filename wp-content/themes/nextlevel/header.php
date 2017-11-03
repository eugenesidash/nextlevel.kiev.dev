<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NextLevel
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Next Level - курсы английского языка в Киеве</title>
	<link href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory') ?>/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory') ?>/css/media.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="header">
		<div class="top-head">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="lang">
							<a href="<?php site_url() ?>/ru/">РУС</a>
							<a href="<?php site_url() ?>/uk/">УКР</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="soc">
							<a href="https://vk.com/club76199012"><img src="<?php bloginfo('template_directory') ?>/img/vk.png" alt="VK-next-level"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="logo">
						<a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="Next-Level"></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="phones">
						<img src="<?php bloginfo('template_directory') ?>/img/vodafon.png" alt="Next Level - Vodafon"><a href="tel:+380997640715">(099)764-07-15</a>
						<img src="<?php bloginfo('template_directory') ?>/img/lifecell.png" alt="Next Level - Lifecell"><a href="tel:+380934260046">(093)426-00-46</a>
						<img src="<?php bloginfo('template_directory') ?>/img/kyievstar.png" alt="Next Level - Kyievstar"><a href="tel:+380963152477">(096)315-24-77</a>
					</div>
					<div class="search">
						<form role="search" method="get" class="search-form" action="<?php site_url() ?>/">
							<input type="search" class="search-field" placeholder="Поиск..." value="" name="s">
						</form>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="block-mail">
						<div class="mail">
							<img src="<?php bloginfo('template_directory') ?>/img/mail.png" alt="Next Level - Mail">
							<a href="mailto:next_level203@ukr.net">next_level203@ukr.net</a>
						</div>
						<div class="button">
							<a href="#course">Записаться на курс</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="button-click">
						<i class="fa fa-bars nav-menu-click" aria-hidden="true"></i>
					</div>
					<div class="nav-menu">
						<?php wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => '',
							'container'       => 'ul',
							'container_class' => 'nav-menu',
							'container_id'    => '',
							'menu_class'      => 'nav-menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
							) ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		