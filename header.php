<!DOCTYPE HTML>
<html <?php language_attributes();?> >
<head>
<!-- Wordpress Theme Development Tutorial By- Maruf Hasan mitul -->
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' )?></title>
	<link rel="stylesheet" href="style.css" />
    <?php wp_head()?>
</head>
<body <?php body_class()?>>
	<div class="container">
		<header class="main-header">
			<h1><a href="<?php echo home_url();?>"><?php bloginfo( 'name' )?></a></h1>
			<h3><?php bloginfo( 'description' );?></h3>
			<div class="cus-searchform"> 
				<?php get_search_form();?>
			</div>
			

		<nav class="main-menu">
			<div class="menu">
				<?php
				$args =array(
					'theme_location' => 'primary'
				);
				
				wp_nav_menu($args); ?>
			</div>
		</nav>			
		</header>