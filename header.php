<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lauraannseal
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Primary Meta Tags -->
    <title>Laura Ann Seal – UX Engineer</title>
    <meta name="title" content="Laura Ann Seal – UX Engineer">
    <meta name="description" content="Digital expertise to take your project from concept to masterpiece. ">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://lauraannseal.com/">
    <meta property="og:title" content="Laura Ann Seal – UX Engineer">
    <meta property="og:description" content="Digital expertise to take your project from concept to masterpiece. ">
    <meta property="og:image" content="wp-content/themes/lauraannseal/assets/images/LAURAANNSEAL.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="wp-content/themes/lauraannseal/assets/images/LAURAANNSEAL.jpg">
    <meta property="twitter:url" content="https://lauraannseal.com/">
    <meta property="twitter:title" content="Laura Ann Seal – UX Engineer">
    <meta property="twitter:description" content="Digital expertise to take your project from concept to masterpiece. ">
    <meta property="twitter:image" content="">
	
	<!-- google analytics -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157833823-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-157833823-1');
	</script>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
 
    <!-- bootstrap core css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="<?php bloginfo ('stylesheet_directory');?>/assets/fontawesome/css/all.min.css">


    <!--animate.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	
	
	
	<?php wp_head(); ?>
    


    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the-two-homers' ); ?></a>
    
    <!-- nav section -->
    <!-- mobile pop up menu -->
    <header class="hide-pro-up">
        <nav>
            <?php
                wp_nav_menu();
            ?>
        </nav>
        
        <!-- mobile menu button -->
        <div class="menu-mobile animated fadeInDown">
            menu
            <i class="fas fa-bars"></i>
        </div>  
    </header>
            
    <!-- desktop menu -->
    <header class="hide-until-pro">
        <nav class="animated fadeInDown">
			<?php
				wp_nav_menu( 'Primary');
			?>
		</nav>
    </header>
    <!-- nav section end -->