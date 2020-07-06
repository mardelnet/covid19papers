<div id="head">
  <nav role="navigation">
    <?php get_template_part('parts/hambmenu'); ?>
  </nav>
  <div class="col">
    <h1>
      <a href="/" target="_self">
        COVID-19 <span>Papers y Datasets</span>
      </a>
    </h1>
  </div>
  <div class="col">
    <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
  </div>
</div>
<?php if ( is_search() || is_archive() ) : ?>
<div class="pagination">
  <div class="col">
    <strong>
      Buscar por
      <?php
      if ( is_search() ) {
        echo 'término: ' . $_GET['s'];
      }
      else {
        echo get_queried_object()->taxonomy . ': ' . get_queried_object()->name;
      }
      ?>
    </strong>
  </div>
  <div class="col" style="text-align: right">
    <span style="display: inline-block">Páginas: </span><?php wpex_pagination(); ?>
  </div>
</div>
<?php endif; ?>
