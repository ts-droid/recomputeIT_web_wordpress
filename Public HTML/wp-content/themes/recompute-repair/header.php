<?php
/**
 * Header template.
 *
 * @package recompute-repair
 */

if (!defined('ABSPATH')) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="container topbar">
		<a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
			<?php recompute_render_logo('header'); ?>
		</a>
		<nav class="main-nav">
			<a href="#services"><?php echo esc_html(recompute_copy('nav_services')); ?></a>
			<a href="#about"><?php echo esc_html(recompute_copy('nav_about')); ?></a>
			<a href="#tradera"><?php echo esc_html(recompute_copy('nav_tradera')); ?></a>
			<a href="#contact"><?php echo esc_html(recompute_copy('nav_contact')); ?></a>
			<?php recompute_render_language_selector(); ?>
		</nav>
		<a class="cta ghost" href="#contact"><?php echo esc_html(recompute_copy('cta_book')); ?></a>
	</div>
</header>
