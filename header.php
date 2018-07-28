<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="navegation">
					<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
							</a>
						</div>

					<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>

						<div class="navTel" id="navTel">
							<div class="header_text_icono_tel">
								<i class="fa fa-phone fa-3x fa-rotate-270"></i>
							</div>
							<div class="header_field_contact">
								<span class="header_text_llamanos">Llámanos</span><br>
								<span class="header_text_tel">01(55)47-39-01-26</span>
							</div>
						</div>

					<!-- navMob Barritas -->
						<div class="navMobSandy" id="navMobSandy">
							<span>
								<i class="fa fa-bars"></i>
							</span>
						</div>

					<!-- navMob (menú cel) -->
					<nav class="navMob" id="navMob" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
				</div>

			</header>
			<!-- /header -->

		<!-- wrapper -->
		<div class="wrapper">
