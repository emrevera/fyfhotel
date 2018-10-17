<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<footer>
		<div class="contact section" id="contact">
			<h2>Say Hi!</h2>
			<div class="form">
				 <?php echo do_shortcode('[contact-form-7 id="9" title="Booking Form"]'); ?> 
			</div>
		</div>
		<div class="center text-center">
			<div class="chain">
				<a href="/"><img src="/wp-content/themes/ff/img/footer-logo-01.svg" alt=""></a>
				<a href="#"><img src="/wp-content/themes/ff/img/footer-loop.svg" alt="" class="loop"></a>
				<a href="http://fyfhostel.com/" target="_blank"><img src="/wp-content/themes/ff/img/footer-logo-02.svg" alt=""></a>
			</div>
			<p>Todos los derechos reservados 2018<br> Sitio Diseñado y Desarollado por <a href="http://nomadeweb.com/" target="_blank">Nómade</a>.</p>
		</div>
	</footer>
	<script type="text/javascript" src="/wp-content/themes/ff/js/ff.js"></script>
<?php wp_footer(); ?>
</body>
</html>
