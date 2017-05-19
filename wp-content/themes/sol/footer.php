<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sol
 */

?>
<footer id="colophon" class="site-footer" role="contentinfo">
  <?php dynamic_sidebar( 'footer' ); ?>
</footer><!-- #colophon -->
<div class="report-incident">
  <?php dynamic_sidebar( 'report_incident' ); ?>
</div>
<?php wp_footer(); ?>

</body>
</html>
