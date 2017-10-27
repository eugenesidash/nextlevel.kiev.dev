<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
<!-- ============================================== -->

<!-- Super Container | Footer Widget Space (Optional) -->
<?php if (get_option_tree('footer_widgets') != 'No') : ?>

	<?php  // Set the columns class for each module.
		if(ot_get_option('footer_columns_count') != '') : 
		$header_columns = ot_get_option('footer_columns_count');
		else : 
		$header_columns = "";
		endif;
	?> 

<div class="super-container full-width" id="section-footer">

<!-- 960 Container -->
<div class="container">
<!-- footer -->
<footer>
	<div class="sixteen columns alpha omega" id="footer-row"> 
		<div class="<?php echo $header_columns; ?>">
		<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widget-1') ) ?>
		</div>
		<div class="<?php echo $header_columns; ?>">
		<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widget-2') ) ?>
		</div>
		<div class="<?php echo $header_columns; ?>">
		<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widget-3') ) ?>
		</div>
		<div class="<?php echo $header_columns; ?>">
		<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widget-4') ) ?>
		</div>

		<div style="float:left; margin-right: 10px;">
			<p>Наш партнер: <a href="https://www.work.ua/" target="_blank">Work.ua</a></p>
		</div>
		<div style="float:left;>
			<a href="https://www.work.ua/" target="_blank"><img src="https://www.work.ua/i/88x31b.gif" width="88" height="31" alt="Work.ua — сайт поиска работы №1 в Украине" border="0"></a>
		</div>
	</div>
</footer>
<!-- /End Footer -->

</div>
<!-- /End 960 Container -->
</div>
<!-- /End Super Container -->
<?php endif; ?>


<!-- ============================================== -->


<!-- Super Container - SubFooter Space -->
<div class="super-container full-width" id="section-sub-footer">

<!-- 960 Container -->
<div class="container">

	<div class="sixteen columns">
		<div class="copyright"><?php if (get_option_tree('footer_blurb_left')) : echo get_option_tree('footer_blurb_left'); endif; ?></div>
		<?php if (get_option_tree('footer_social') != 'No') : get_template_part( 'includes/element', 'getsocial' ); endif; ?>
		<div class="colophon"><?php if (get_option_tree('footer_blurb_right')) : echo get_option_tree('footer_blurb_right'); endif; ?></div>
	</div>

</div>
<!-- /End 960 Container -->
</div>
<!-- /End Super Container -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41678814 = new Ya.Metrika({
                    id:41678814,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41678814" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- ============================================== -->


<?php wp_footer(); ?>
<!--<script type="text/javascript" src="//arrow.scrolltotop.com/arrow53.js"></script>-->
</body>
</html>