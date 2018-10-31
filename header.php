<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<title> <?php the_title(); ?> </title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<?php wp_head(); ?>

</head>

<body>

	<div class="wrapper">

		<header class="main-header">
			<!-- Slider -->

			<div class="background-slider-wrapper">
				<div class="slider">

					<div class="slide-item">
						<div class="slide-item-img">
							
								<?php 
									$image = get_field('fb_img_1');
									if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>

						</div>
						<div class="caption-wrap">
							
							<div class="caption">
								<h2 class="caption-title"><?php the_field('fb_slide_text_h2_1'); ?></h2>
								<p class="caption-text"> <?php the_field('fb_slide_text_1'); ?>  </p>
							</div>

						</div>
						
					</div>

					<div class="slide-item">
						<div class="slide-item-img">

							<?php 
									$image = get_field('fb_img_2');
									if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>

						</div>
						<div class="caption-wrap">

							<div class="caption">
								<h2 class="caption-title"><?php the_field('fb_slide_text_h2_2'); ?></h2>
								<p class="caption-text"><?php the_field('fb_slide_text_2'); ?> </p>
							</div>

						</div>	
						
					</div>

					<div class="slide-item">
						<div class="slide-item-img">

							<?php 
									$image = get_field('fb_img_3');
									if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>

						</div>	
						<div class="caption-wrap">
							<div class="caption">
								<h2 class="caption-title"><?php the_field('fb_slide_text_h2_3'); ?></h2>
								<p class="caption-text"> <?php the_field('fb_slide_text_3'); ?> </p>
							</div>
						</div>
						
					</div>

					<div class="slide-item">
						<div class="slide-item-img">

							<?php 
									$image = get_field('fb_img_4');
									if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>

						</div>
						<div class="caption-wrap">
							<div class="caption">
								<h2 class="caption-title"><?php the_field('fb_slide_text_h2_4'); ?></h2>
								<p class="caption-text"><?php the_field('fb_slide_text_4'); ?> </p>
							</div>
						</div>	
						
					</div>

				</div>
			</div>

		<!-- End Slider -->

		<!-- Menu -->
			<div class="menu-wrapper">
				<div class="top-menu-wrapp">
					<div class="top-menu">

						<div class="logo">
							<a href="index.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="logo">
							</a>
						</div>
			
							<div class="address">
								<img src="<?php echo get_template_directory_uri(); ?>/images/svg/placeholder.svg" alt="location">
								<span>г.Минск ул.Слободская 2</span>
							</div>

							<div class="phone">
								<img src="<?php echo get_template_directory_uri(); ?>/images/svg/smartphone.svg" alt="location">
								<span>+375 29 603-61-60</span>
							</div>
						
					</div>
				</div>

				<div class="main-menu">

					<div class="mobile-menu-toggle">
						<span class="mobile-menu-elem"></span>
					</div>

					<a class="menu-item" href="#car-repair-section">Ремонтные работы </a>
					<a class="menu-item" href="#welding-section">Сварочные работы</a>
					<a class="menu-item" href="#oil-change-section">Замена масел</a>
					
					<a class="menu-item" href="#contacts">Контакты</a>
					<a class="menu-item" href="#faq">FAQ</a>
				</div>
			
			</div>	

			<!-- End Menu -->

			
			

			<a class="red-more-arrow" href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/svg/arrow-down.svg" alt="arrow-down"> </a>
		</header>