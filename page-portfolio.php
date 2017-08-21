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
<?php
$args = array(
  'post_type' => 'portfolio'
); //end array
$query = new WP_Query($args);
?>

<section class="row no-max pad">
  <!-- looping through all portfolio posts -->
  <?php if( $query->have_posts()) : while ($query->have_posts()) : $query->the_post();  ?>
    <div class="small-6 medium-4 large-3 columns grid-item">
      <a href="<?php the_permalink();?>" ><?php the_post_thumbnail('large'); ?></a>
    </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</section>


<?php get_footer(); ?>
