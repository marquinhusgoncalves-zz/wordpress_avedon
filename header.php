<html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class = "no-js" lang = ""> <!--<![endif]-->
<!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
<head>
	<meta charset = "<?php bloginfo( 'charset' ); ?>">
	<!-- <meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1"> -->
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<link rel = "icon" href = "<?php bloginfo('stylesheet_directory');?>/favicon.png">
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<meta name = "format-detection" content = "telephone=no">
	<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
	<script src = "//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src = "//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<?php wp_head(); ?>
</head>

<body id = "stage">
  <div class = "container" style = "background: white">

	<header class = "topo_fixed header_menu">
		<a href = "<?php echo esc_url( home_url( '/' ) ); ?>"><img style = "height: 80px; margin: 15px 3%; position: absolute" src = "<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt = "avedon"></a>
		<input	type = "checkbox" id = "sidebartoggler" name = "" value = "">	
			<label class = "toggle visible-xs-inline-block" for = "sidebartoggler">☰</label>
			<nav class = "menu_principal sidebar visible-xs-inline-block"><?php wp_nav_menu(''); ?></nav>
			<nav class = "menu_principal hidden-xs" style = "margin: 30px 30px 0"><?php wp_nav_menu(''); ?></nav>
	</header>