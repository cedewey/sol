<?php get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
<section class="section section-about">

  <div class="container">

    <div class="content about-text">

      <?php if( get_field("about-text") ): ?>
        <p class="about-text"><?php the_field("about-text");?></p>
      <?php endif; ?>
    </div>

    <?php if( get_field("about-image") ): ?>
      <div class="content about-image">
      <p><?php the_field("about-image"); ?></p>
      </div>
    <?php endif; ?>

  </div>

    <div class="content about-learn-more-button">

      <?php if( get_field("about-text") ): ?>
        <a href="<?php the_field("about-learn-more-link");?>"><button class="about-learn-more-button"><?php the_field("about-learn-more-link-text");?></button></a>
      <?php endif; ?>
    </div>

  </div>
</section>

<section class="section section--updates">
  <h2 class= "upcoming-events">Latest Updates</h2>
  <div class="container">
    <?php $query = new WP_Query( 'posts_per_page=3' );

      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="content content--td">
          <div class="update">
            <h5 class="update-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h5>

            <p class="update-excerpt">
              <?php the_excerpt(); ?>
            </p>

            <a href="<?php the_permalink(); ?>" class="read-more">
              Read More
              <svg class="icon icon-more"><use xlink:href="#icon-more"></use></svg>
            </a>
          </div>
        </div>

      <?php endwhile; else: ?>

      <div class="content content--td">
        <h5 class="date__title white">
          No updates.
        </h5>
      </div>

    <?php endif; ?>

  </div>
</section>





  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
