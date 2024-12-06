<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<!-- HIER MOET DE NIEUWE HEADER HTML -->
<?php do_action('mytheme_before_header'); ?>
<header>
	<div class="left-container">
		<div class="logo-container">
			<a href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="angerlo's logo">
			</a>
			<div class="vertical-divider"></div>
		</div>
		<nav>
			<ul>
				<li><a href="<?php echo home_url('/'); ?>">Home</a></li>
				<li><a href="<?php echo home_url('/laatste-nieuws'); ?>">Laatste Nieuws</a></li>
				<li><a href="<?php echo home_url('/laatste-edities'); ?>">Laatste Edities</a></li>
				<li><a href="<?php echo home_url('/an-supporter'); ?>">AN Supporter</a></li>
				<li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div class="right-container">
		<?php if ( is_user_logged_in() ) : ?>
			<div class="user-info">
				<span class="loggedin-username">Welkom, <?php echo wp_get_current_user()->display_name; ?>!</span>
			</div>
		<?php else : ?>
			<a href="<?php echo wp_login_url(); ?>" class="login-button">Inloggen</a>
		<?php endif; ?>
	</div>
</header>
</html>