<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kappscores
 */

?>

</div><!-- #content -->

<?php get_sidebar( 'footer' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-footer__wrap">
        <nav class="social-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
        </nav><!-- .social-menu -->

        <div class="site-info">
            <div><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kappscores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'kappscores' ), 'WordPress' ); ?></a></div>
            <div><?php printf( esc_html__( 'Theme: %1$s by %2$s', 'kappscores' ), 'kappscores', '<a href="https://www.devian.co.za rel="designer">Kappscores</a>' ); ?></div>
        </div><!-- .site-info -->
    </div><!-- .site-footer__wrap -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
