<?php
/**
 * Fallback template.
 *
 * @package recompute-repair
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>
<main class="section">
	<div class="container">
		<h1><?php bloginfo('name'); ?></h1>
		<p>Aktivera en statisk startsida for att visa den kompletta designen.</p>
	</div>
</main>
<?php
get_footer();

