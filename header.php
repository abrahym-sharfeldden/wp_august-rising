<?php
/****
	* The header for August Rising
	*
	* This is the template that displays all of the <head> section
	*
 ****/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/css/style.css">

	<?php wp_head(); ?>
</head>


<section class="main-section">
	<div class="home-container flex-parent">
		<div class="flex-parent header-container">
			<div class="logo-container flex-container">
				<h2>August Rising</h2>
			</div>
			<div class="navbar-container flex-container">
				<ul class="flex-parent">
					<li class="flex-container"><a href="<?php echo home_url(); ?>">Home</a></li>
					<li class="flex-container"><a href="<?php echo home_url(); ?>/#scrollToAbout">My Story</a></li> <!-- Who I am, About -->
					<li class="flex-container"><a href="<?php echo home_url(); ?>/#scrollToContact">Reach Out</a></li> <!-- Contact, get in touch, Connect -->
					<li class="flex-container"><a href="<?php echo home_url(); ?>/#scrollToBlog">Blog</a></li>
				</ul>
				<hr>
			</div>
		</div>