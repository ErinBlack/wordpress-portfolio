<?php
/*
Template Name: Portfolio Page
*/
?>
<?php get_header(); ?>

<!-- Loop through posts  -->
<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
      <!-- Have Posts  -->
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <!-- No posts  -->
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<!-- Grabbing all of the portfolio posts -->
<?php get_template_part('content', 'portfolio'); ?>

<?php get_footer(); ?>
