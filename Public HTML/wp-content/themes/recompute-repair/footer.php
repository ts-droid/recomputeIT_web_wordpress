<?php
/**
 * Footer template.
 *
 * @package recompute-repair
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<footer class="site-footer" id="contact">
	<div class="container footer-grid">
		<div>
			<div class="brand footer-brand">
				<?php recompute_render_logo('footer'); ?>
			</div>
			<p><?php echo esc_html(recompute_copy('footer_tagline')); ?></p>
		</div>
		<div>
			<h4><?php echo esc_html(recompute_copy('footer_contact_title')); ?></h4>
			<p><?php echo esc_html(recompute_copy('footer_email')); ?></p>
			<p><?php echo esc_html(recompute_copy('footer_phone')); ?></p>
		</div>
		<div>
			<h4><?php echo esc_html(recompute_copy('footer_hours_title')); ?></h4>
			<p><?php echo esc_html(recompute_copy('footer_hours_weekday')); ?></p>
			<p><?php echo esc_html(recompute_copy('footer_hours_weekend')); ?></p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
