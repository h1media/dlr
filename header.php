<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' ); }
	?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main-holder">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		<?php
		wp_nav_menu( array(
			'theme_location'  => 'header-menu',
			'depth'           => 2,
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'main-navigation',
			'menu_class'      => 'nav navbar-nav',
			'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			'walker'          => new WP_Bootstrap_Navwalker(),
		) );
		?>
    </nav>
