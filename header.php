<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title('&#124;', true, 'right'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico" type="image/x-icon" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php if( get_theme_mod( 'wpforge_nav_position' ) == 'top') { ?>
    	<?php get_template_part( 'content', 'nav' ); ?>
    <?php } // end if ?>

	<div id="wrapper"> 
          
            <header id="header" class="row" role="banner"> 
            	<div class="site-header small-12 large-12 columns">
                <?php if( get_theme_mod( 'wpforge_logo' ) ) { ?>
                    <div class="header-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img src="<?php echo get_theme_mod('wpforge_logo'); ?>" alt="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>">
                        </a>
                    </div><!-- /.header-logo -->
                <?php } // end if ?>
                    <div class="header-info">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><small><?php bloginfo( 'description' ); ?></small></h2>                    
                    </div><!-- /.header-info -->
                 </div><!-- .site-header -->
            </header><!-- #header -->
            
            <?php if( get_theme_mod( 'wpforge_nav_position' ) == 'normal') { ?>
            	<?php get_template_part( 'content', 'nav' ); ?>
    		<?php } // end if ?>
    
        <section class="container row" role="document">