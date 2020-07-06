<div id='foot' style="text-align:center">
  <?php
  $latest = new WP_Query(
      array(
          'post_type' => 'registros',
          'post_status' => 'publish',
          'posts_per_page' => 1,
          'orderby' => 'published',
          'order' => 'DESC'
      )
  );
  if($latest->have_posts()){
      $modified_date = $latest->posts[0]->post_modified;
      $modified_date = date("d/m/Y", strtotime($modified_date));
  }
  ?>
  Índice de referencia de papers y datasets sobre Covid-19 - <?php echo 'Última actualización: ' . $modified_date; ?><br>
  <a target="_self" href="/acerca-nuestro">
    Proyecto ORECCYT
  </a>
  -
  <a target="_blank" href="http://www2.mdp.edu.ar/index.php/en/">
    Universidad Nacional de Mar del Plata
  </a>
</div>
<?php wp_footer(); ?>
</body>
</html>
