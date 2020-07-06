<div class="foot">
  <a style="border-right: 1px solid #ddd;">
    Recomendar
    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
  </a>
  <a style="border-right: 1px solid #ddd;">
    Compartir
    <?php echo do_shortcode( '[Sassy_Social_Share count="0"]' ); ?>
  </a>
  <a style="border-right: 1px solid #ddd;" href="<?php echo get_permalink(); ?>#comentarios">
    Comentar <img src="<?php echo get_template_directory_uri() ?>/assets/images/comments.png" class="plusicon">
  </a>
  <?php if ( is_single() == false ) : ?>
  <a class="vermas" target="_self" href="<?php echo get_permalink(); ?>">
    Ver más <img src="<?php echo get_template_directory_uri() ?>/assets/images/plus.png" class="plusicon">
  </a>
  <?php endif; ?>
</div>
