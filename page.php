<?php
get_header();
get_template_part( 'parts/innernav' );
?>
<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h2><?php echo get_the_title(); ?></h2>
  <?php the_content();
  endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
