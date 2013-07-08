<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>
<body>
	
	<div class="masthead">
		<div class="container-narrow">
			
          	<?php
            wp_nav_menu(
            	array(
                	'menu' => 'mymenu',
                	'menu_class' => 'nav nav-pills pull-right topnav',
                	'fallback_cb' => '',
                	'menu_id' => 'mymenu'       
              	)    
            ); ?>

			<div class="logo">
				<a href="<?php echo home_url('/'); ?>">
					<h1><?php bloginfo('name'); ?></h1>
				</a>
			</div>
			