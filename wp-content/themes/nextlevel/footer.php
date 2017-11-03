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
</div>
<footer>
	<p>Copyright <?php echo date('Y'); ?></p>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/dropdown-menu.js"></script>
<?php wp_footer(); ?>
</body>
</html>