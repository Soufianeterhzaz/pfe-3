<?php
/**
 * Header of my website.
 *
 * @package WordPress
 * @subpackage EHTIC
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</head>
<body>
	<header>
		<p>Header de mon site</p>		
	</header>
	<div id="page">
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
		</nav>
		<section id="content">