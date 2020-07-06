<?php
get_header();
get_template_part( 'parts/innernav' );
?>
<div class="container">
  <?php
  while ( have_posts() ) {
    the_post();
    get_template_part( 'parts/registro' );
  }
  ?>
  <div class="pagi">
    <?php wpex_pagination(); ?>
  </div>
</div>
<?php get_footer(); ?>
