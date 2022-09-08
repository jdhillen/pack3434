<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/site.webmanifest">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="theme-color" content="#ffffff">

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

    <!-- wrapper -->
    <div class="wrapper">

      <!-- header -->
      <header class="header" role="banner">

        <div class="container">
          <div class="row">
            <div class="twelve columns">

              <div class="header__top">
                <div class="header__top--left">
                  <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pack_numbers.png" alt="Pack 3434" class="logo-img">
                  </a>
                </div>
                <div class="header__top--right">On my honor, I will do my best to do my duty to God and my country and to obey the Scout Law; To help other people at all times; To keep myself physically strong, mentally awake and morally straight.</div>
              </div>

              <!-- nav -->
              <nav class="nav" role="navigation">
                <?php html5blank_nav(); ?>
              </nav>
              <!-- /nav -->
            </div>
          </div>
        </div>
      </header>
      <!-- /header -->

    