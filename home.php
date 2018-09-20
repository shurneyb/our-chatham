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

<div id="hearken-bg">
  <p id="close">close</p>
	<div id="hearken-wrapper">
    <div id="hearken-form">
      <script async src="https://modules.wearehearken.com/unc/embed/2023.js"></script>
    </div>
    <!-- Begin MailChimp Signup Form -->
    <div id="mc-form">
      <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
      <style type="text/css">
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
            We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
      </style>
      <div id="mc_embed_signup">
      <form action="https://facebook.us6.list-manage.com/subscribe/post?u=6e9cfaf39db101d52802c9b6a&amp;id=c778524bdc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
        <h2>Want to stay up to date with Chatham County? Subscribe to our mailing list.</h2>
      <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
      <div class="mc-field-group">
        <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
      </label>
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
      <div class="mc-field-group">
        <label for="mce-FNAME">First Name  <span class="asterisk">*</span>
      </label>
        <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
      </div>
      <div class="mc-field-group">
        <label for="mce-LNAME">Last Name  <span class="asterisk">*</span>
      </label>
        <input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
      </div>
      <div class="mc-field-group">
        <label for="mce-MMERGE6">Zip Code  <span class="asterisk">*</span>
      </label>
        <input type="text" value="" name="MMERGE6" class="required" id="mce-MMERGE6">
      </div>
      <div class="mc-field-group input-group">
          <strong>Why did you subscribe to this newsletter?  <span class="asterisk">*</span>
      </strong>
          <ul><li><input type="radio" value="I'm looking for a reliable news source in Chatham County." name="MMERGE5" id="mce-MMERGE5-0"><label for="mce-MMERGE5-0">I'm looking for a reliable news source in Chatham County.</label></li>
      <li><input type="radio" value="I want to stay up-to-date on the latest events and things to do in Chatham." name="MMERGE5" id="mce-MMERGE5-1"><label for="mce-MMERGE5-1">I want to stay up-to-date on the latest events and things to do in Chatham.</label></li>
      <li><input type="radio" value="It just looked interesting!" name="MMERGE5" id="mce-MMERGE5-2"><label for="mce-MMERGE5-2">It just looked interesting!</label></li>
      </ul>
      </div>
      <div class="mc-field-group">
        <label for="mce-MMERGE4">Tell us a question you have about Chatham county: </label>
        <input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4">
      </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6e9cfaf39db101d52802c9b6a_c778524bdc" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
      </div>
    </div>
    <!--End mc_embed_signup-->
	</div>
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
