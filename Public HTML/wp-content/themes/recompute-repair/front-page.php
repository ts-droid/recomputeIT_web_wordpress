<?php
/**
 * Front page template.
 *
 * @package recompute-repair
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>
<main>
	<section class="hero">
		<div class="hero-overlay"></div>
		<div class="container hero-grid">
			<div>
				<p class="eyebrow"><?php echo esc_html(recompute_copy('hero_eyebrow')); ?></p>
				<h1><?php echo esc_html(recompute_copy('hero_title')); ?></h1>
				<p class="lead">
					<?php echo esc_html(recompute_copy('hero_lead')); ?>
				</p>
				<div class="hero-cta">
					<a class="cta" href="#services"><?php echo esc_html(recompute_copy('hero_cta_services')); ?></a>
					<a class="cta ghost" href="#tradera"><?php echo esc_html(recompute_copy('hero_cta_tradera')); ?></a>
				</div>
			</div>
			<aside class="hero-card">
				<h2><?php echo esc_html(recompute_copy('hero_card_title')); ?></h2>
				<ul>
					<li><?php echo esc_html(recompute_copy('hero_card_1')); ?></li>
					<li><?php echo esc_html(recompute_copy('hero_card_2')); ?></li>
					<li><?php echo esc_html(recompute_copy('hero_card_3')); ?></li>
				</ul>
			</aside>
		</div>
	</section>

	<section class="section" id="services">
		<div class="container">
			<p class="eyebrow"><?php echo esc_html(recompute_copy('services_eyebrow')); ?></p>
			<h2><?php echo esc_html(recompute_copy('services_title')); ?></h2>
			<div class="cards">
				<article class="card">
					<h3><?php echo esc_html(recompute_copy('service1_title')); ?></h3>
					<p><?php echo esc_html(recompute_copy('service1_body')); ?></p>
				</article>
				<article class="card">
					<h3><?php echo esc_html(recompute_copy('service2_title')); ?></h3>
					<p><?php echo esc_html(recompute_copy('service2_body')); ?></p>
				</article>
				<article class="card">
					<h3><?php echo esc_html(recompute_copy('service3_title')); ?></h3>
					<p><?php echo esc_html(recompute_copy('service3_body')); ?></p>
				</article>
				<article class="card">
					<h3><?php echo esc_html(recompute_copy('service4_title')); ?></h3>
					<p><?php echo esc_html(recompute_copy('service4_body')); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="section section-dark" id="about">
		<div class="container two-col">
			<div>
				<p class="eyebrow"><?php echo esc_html(recompute_copy('about_eyebrow')); ?></p>
				<h2><?php echo esc_html(recompute_copy('about_title')); ?></h2>
				<p>
					<?php echo esc_html(recompute_copy('about_body')); ?>
				</p>
			</div>
			<div class="stats">
				<div><strong>1000+</strong><span><?php echo esc_html(recompute_copy('stat1_label')); ?></span></div>
				<div><strong>24h</strong><span><?php echo esc_html(recompute_copy('stat2_label')); ?></span></div>
				<div><strong><?php echo esc_html(recompute_copy('stat3_title')); ?></strong><span><?php echo esc_html(recompute_copy('stat3_label')); ?></span></div>
			</div>
		</div>
	</section>

	<section class="section" id="tradera">
		<div class="container">
			<div class="heading-row">
				<div>
					<p class="eyebrow"><?php echo esc_html(recompute_copy('tradera_eyebrow')); ?></p>
					<div class="tradera-title-row">
						<h2><?php echo esc_html(recompute_copy('tradera_title')); ?></h2>
						<div class="tradera-brand">
							<img src="<?php echo esc_url(recompute_tradera_logo_url()); ?>" alt="Tradera logo">
							<span>Tradera</span>
						</div>
					</div>
				</div>
			</div>
			<div id="tradera-listings" class="tradera-grid" aria-live="polite">
				<p class="loading"><?php echo esc_html(recompute_copy('tradera_loading')); ?></p>
			</div>
			<div class="tradera-actions">
				<button id="tradera-load-more" class="cta ghost" type="button"><?php echo esc_html(recompute_copy('tradera_load_more')); ?></button>
			</div>
		</div>
	</section>

	<section class="section section-facebook" id="facebook">
		<div class="container">
			<div class="heading-row">
				<div>
					<p class="eyebrow">FACEBOOK</p>
					<h2>Senaste uppdateringar</h2>
				</div>
			</div>
			<div class="facebook-frame-wrap">
				<iframe
					title="Recompute IT Nordic Facebook"
					src="<?php echo esc_url(recompute_facebook_plugin_url()); ?>"
					width="500"
					height="620"
					style="border:none;overflow:hidden"
					scrolling="no"
					frameborder="0"
					allowfullscreen="true"
					allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
