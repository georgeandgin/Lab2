<?php
/**
 * Template Name: Front Page Splash
 * Template Post Type: page
 * Description: Display a page a full window photo
 * @package Storytime
 */


get_header( 'splash' ); ?>

<header id="splash" <?php if ( has_header_image() ) { ?> style="background-image: url(
    <?php esc_url( header_image() ); ?>);"
    <?php } ?>>
    <div class="site-branding">

        <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
        <?php endif; ?>

        <?php if ( esc_attr(get_theme_mod( 'storytime_show_site_title', true ) ) ) : ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?></a></h1>
        <?php endif; ?>

        <?php	if (esc_attr(get_theme_mod( 'storytime_show_site_desc', true ) ) ) :
				$storytime_description = get_bloginfo( 'description', 'display' );
					if ( $storytime_description || is_customize_preview() ) : ?>
        <p class="site-description">
            <?php echo esc_html( $storytime_description );  ?>
        </p>
        <?php 
					endif;
				endif; ?>

    </div>

    <?php 
		// Check if there is a social menu.
		if ( has_nav_menu( 'splash' ) ) { 
			get_template_part( 'template-parts/navigation/nav', 'splash' ); 
		}
?>

</header>

<?php 
	get_footer( 'splash' );
