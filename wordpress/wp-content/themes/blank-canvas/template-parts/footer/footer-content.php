<?php if ( true === get_theme_mod( 'show_site_footer', false ) ) : ?>
	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
	<?php get_template_part( 'template-parts/footer/footer-menu' ); ?>
<?php endif; ?>


<footer>
<section> <h3 class="footer-text"> This is the footer content yaaa. </h3>
</section> 
</footer>

<?php
get_template_part( 'template-parts/footer/footer-info' );
?>