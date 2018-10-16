<!DOCTYPE html>
<!--[if lt IE 7]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<?php
	/**
	 * The template for displaying the header
	 *
	 * Contains the HEAD content and opening of the id=page and id=main DIV elements.
	 *
	 * @package Largo
	 * @since 0.1
	 */
	?>
	<title>
		<?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' ); // Add the blog name.

			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";

			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . 'Page ' . max( $paged, $page );
		?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
</head>

<body <?php body_class(); ?>>

	<div id="top"></div>

	<?php

	/**
	 * Fires at the top of the page, just after the id=top DIV element.
	 *
	 * @since 0.4
	 */
	do_action( 'largo_top' );

	?>

	<?php
		if ( SHOW_GLOBAL_NAV === TRUE ) {

			/**
			 * Fires before the Largo global navigation content.
			 *
			 * @since 0.4
			 */
			do_action( 'largo_before_global_nav' );

			get_template_part( 'partials/nav', 'global' );

			/**
			 * Fires after the Largo global navigation content.
			 *
			 * @since 0.4
			 */
			do_action( 'largo_after_global_nav' );

		}
	?>
	
	<div id="page" class="hfeed clearfix">

  <div class="header-grid margins">
    <div class="logo v-h-center">
      <a href="https://www.ourchatham.local"><img src="http://staging.ourchatham.flywheelsites.com/wp-content/uploads/2018/07/logo-final-2.png"></a>
    </div>
    <div class="q-box v-h-center">
      <div id="q-box-area">
        <textarea id="question-box" type="text" name="question-box" placeholder="What questions do you have about Chatham County that you want Our Chatham to investigate?"></textarea>
        <button class="ask-button">Ask</button>
      </div>
    </div>
  </div>
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
		<?php

			get_template_part( 'partials/nav', 'sticky' );

			if ( of_get_option( 'leaderboard_enabled' ) == TRUE ) {
				get_template_part( 'partials/header-ad-zone' );
			}

			/**
			 * Fires before the Largo header content.
			 *
			 * @since 0.4
			 */
      do_action( 'largo_before_header' );
      

			get_template_part( 'partials/largo-header' );

			/**
			 * Fires after the Largo header content.
			 *
			 * @since 0.4
			 */
      do_action( 'largo_after_header' );
      

			get_template_part( 'partials/nav', 'main' );

			if ( SHOW_SECONDARY_NAV === TRUE ) {
				get_template_part( 'partials/nav', 'secondary' );
			}

			get_template_part('partials/homepage-alert');

			/**
			 * Fires after the Largo navigation content.
			 *
			 * @since 0.4
			*/
			do_action( 'largo_after_nav' );

		?>

		<div id="main" class="row-fluid clearfix">

      

		<?php

		/**
		 * Fires at the top of the Largo id=main DIV element.
		 *
		 * @since 0.4
		 */
		do_action( 'largo_main_top' );
