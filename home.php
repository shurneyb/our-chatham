<?php
/**
 * The homepage template
 *
 * @package Largo
 * @since 0.1
 */

get_header();


/*
 * Collect post IDs in each loop so we can avoid duplicating posts
 * and get the theme option to determine if this is a two column or three column layout
 */
$shown_ids = array();
$home_template = largo_get_active_homepage_layout();
$layout_class = of_get_option('home_template');

global $largo;
if ($home_template == 'LegacyThreeColumn')
	$span_class = 'span8';
else
	$span_class = ( $largo['home_rail'] ) ? 'span8' : 'span12' ;
?>

<!--<script async src="https://modules.wearehearken.com/wndr/embed/868.js"></script>-->

<div class="header-grid margins">
	<div class="logo v-h-center"><img src="http://ourchatham.local/wp-content/uploads/2018/07/logo-final-2.png"></div>
	<div class="q-box v-h-center"><input id="question-box" type="text" name="name" id="name" /></div>
</div>

<div id="content" class="stories <?php echo $span_class; ?> <?php echo sanitize_html_class(basename($home_template)); ?>" role="main">
<?php
	largo_render_homepage_layout($home_template);

	if ($home_template !== 'LegacyThreeColumn') {

		do_action('largo_before_sticky_posts');

		// sticky posts box if this site uses it
		if ( of_get_option( 'show_sticky_posts' ) ) {
			get_template_part( 'partials/sticky-posts', 'home' );
		}

		do_action('largo_after_sticky_posts');

		// bottom section, we'll either use a two-column widget area or a single column list of recent posts
		if ( of_get_option('homepage_bottom') === 'widgets' ) {
			get_template_part('partials/home-bottom', 'widget-area');
		} else if (of_get_option('homepage_bottom') === 'list') {
			get_template_part('partials/home-post-list');
		}

		do_action('largo_after_homepage_bottom');
	}
?>
</div><!-- #content-->
<?php if ($largo['home_rail']) get_sidebar(); ?>
<?php get_footer();
