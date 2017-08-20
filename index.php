<?php get_header(); ?>

<!-- Loop through posts  -->
<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
      <!-- Have Posts  -->
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <!-- No posts  -->
      <?php endwhile; else :?>
        <p><?php _e( 'Sorry, no posts match your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
