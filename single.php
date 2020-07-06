<?php
get_header();
get_template_part( 'parts/innernav' );
?>
<div class="container">
  <?php while ( have_posts() ) : ?>
    <?php if ( get_post_type() == 'post' ) : the_post(); ?>
      <a target="_self" href="/prensa">
        << Volver a Prensa
      </a>
      <div class="registro">
        <div class="titulo">
          <?php echo get_the_title(); ?>
        </div>
        <?php the_content(); ?>
      </div>
    <?php else : ?>
      <?php the_post(); get_template_part( 'parts/registro' ); ?>
    <?php endif; ?>
<?php endwhile; ?>
  <div id='comentarios'>
    <?php comments_template(); ?>
  </div>
</div>
<?php get_footer(); ?>
