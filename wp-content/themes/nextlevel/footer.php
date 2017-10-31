<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NextLevel
 */

?>
<div class="container bg-9" id="course">
	<div class="row">
		<div class="col-lg-12">
			<div class="check">
				<img src="<?php bloginfo('template_directory') ?>/img/check.png" alt="Next Level Check">
			</div>
			<h3>Запись на курс</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-1"></div>
		<div class="col-lg-5 col-md-5 col-sm-5"></div>
		<div class="col-lg-5 col-md-5 col-sm-5">
			<form name="nextlevel-form" method="post" action="<?php bloginfo('template_directory') ?>/form_send.php">
				<input type="text" name="name" maxlength="30" placeholder="Введите имя" required>
				<input type="text" name="phone" maxlength="20" placeholder="Введите номер телефона" required>
				<textarea name="comments" id="comments" placeholder="Введите комментарий"></textarea>
				<br>
				<input class="button" name="submit" type=submit value="Записаться на курс">
			</form>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1"></div>
	</div>
</div>
<div class="map">
	<div class="left-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5081.756650698579!2d30.622755!3d50.443367!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c55ba305bd51%3A0x57f12e2dea8428fe!2z0L_RgNC-0YHQv9C10LrRgiDQnNC40YDRgywgNCwg0JrQuNGX0LI!5e0!3m2!1sru!2sua!4v1509387111481" allowfullscreen></iframe>
	</div>
	<div class="right-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10160.581184198863!2d30.394968!3d50.457019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc5e2fdb51f1%3A0xe2639744a4d1f022!2zMkEsINCy0YPQu9C40YbRjyDQp9C40YHRgtGP0LrRltCy0YHRjNC60LAsIDLQkCwg0JrQuNGX0LIsINCj0LrRgNCw0LjQvdCw!5e0!3m2!1sru!2sru!4v1509387194856" allowfullscreen></iframe>
	</div>
</div>
</div>
<footer>
	<p>Copyright 2017</p>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/dropdown-menu.js"></script>
<?php wp_footer(); ?>
</body>
</html>