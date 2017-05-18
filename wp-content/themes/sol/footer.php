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
	<div class="sol-info">
    <p>
      PO BOX 181085<br>
      Denver, CO 80218<br>
      office: 303-839-5204<br>
      hotline: 1-888-557-4441<br>
      email: info@solcolorado.org
    </p>
	</div><!-- .sol-info -->
  <div id="mc_embed_signup">
    <form id="mc-embedded-subscribe-form" class="validate" action="//coavp.us6.list-manage.com/subscribe/post?u=c997b4335f715bea290fd621d&amp;id=ea67b721b2" method="post" name="mc-embedded-subscribe-form" target="_blank">
      <div id="mc_embed_signup_scroll">
        <label for="mce-EMAIL">Subscribe to our mailing list</label><br>
          <input id="mce-EMAIL" class="email" name="EMAIL" value="" type="email"><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;">
          <input tabindex="-1" name="b_c997b4335f715bea290fd621d_ea67b721b2" value="" type="text">
        </div>
        <div class="clear">
          <input id="mc-embedded-subscribe" class="button" name="subscribe" value="Subscribe" type="submit">
        </div>
      </div>
      </form>
  </div><!-- subscribe form -->
    <nav id="social-navigation" class="social-navigation" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'social-menu' ) ); ?>
  </nav><!-- #social-navigation -->
</footer><!-- #colophon -->
<div class="report-incident">
<a href="https://docs.google.com/forms/d/e/1FAIpQLScex1fgvuhewnR6IlBUbpNDy0V8SEes8jGftB0SL3a8ma3Jgg/viewform">Report an Incident</a>
</div>
<?php wp_footer(); ?>

</body>
</html>
