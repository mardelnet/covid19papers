<div class="registro">
  <!--<div class="voto">
    <?php // if(function_exists('the_ratings')) { the_ratings(); } ?>
  </div>-->
  <div class="base_datos">
  <?php
  $basededatos = get_the_terms(get_the_ID(),'basedatos');
  $tipo_acceso = get_the_terms(get_the_ID(),'tipoacceso');
  $fuente = get_the_terms(get_the_ID(),'fuente');
  $palabrasclave = get_the_terms(get_the_ID(),'palabrasclave');
  $autores = get_the_terms(get_the_ID(),'autores');
  ?>
  <?php if ( is_single() == false ) : ?>
  <div class="tipoderegistro">
    Paper
  </div>
  <?php endif; ?>
  <?php if ( $tipo_acceso[0]->slug == 'open-access' ) : ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/candado-abierto.png" title="Open Access">
  <?php else : ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/candado-cerrado.png" title="Restricted Access">
  <?php endif; ?>
  <?php if ( empty($basededatos) == false ) : ?>
  <div class="autores">
    <?php foreach ($basededatos as $base) : ?>
      <?php if ( $base->slug == 'wos' ) : ?>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logo-wos.png" title="Web of Science">
      <?php elseif ( $base->slug == 'scopus' ) : ?>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logo-scopus.png" title="Scopus">
      <?php else : ?>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logo-scielo.png" title="Scielo">
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <?php else : ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logo-scielo.png" title="Scielo">
  <?php endif; ?>
  </div>
  <div class="titulo">
    <a href="<?php echo get_permalink(); ?>">
      <?php echo get_the_title(); ?>
    </a>
  </div>
  <?php if ( empty($autores) == false ) : ?>
  <div class="autores">
    <?php foreach ($autores as $autor) : ?>
      <a href="/autores/<?php echo $autor->slug; ?>" style="margin-right:15px">
        <?php echo $autor->name; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <div class="ano_fuente">
    2020 /
    <?php if ( empty($fuente) == false ) : ?>
    <?php foreach ($fuente as $f) : ?>
      <a href="/fuente/<?php echo $f->slug; ?>" style="margin-right:15px">
        <?php echo $f->name; ?>
      </a>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <?php if ( is_single() ) : ?>
  <div class="resumen">
    <?php
    $content = get_the_content();
    if ( is_single() ) {
        echo the_content();
    }
    else {
        //echo strip_tags (substr( $content , 0 , 200 )) . '[...]';
    }
    ?>
  </div>
  <?php endif; ?>
  <?php if ( empty($palabrasclave) == false ) : ?>
  <div class="palabrasclave">
    <?php foreach ($palabrasclave as $palabra) : ?>
      <a href="/palabrasclave/<?php echo $palabra->slug; ?>" style="margin-right:15px">
        <?php echo $palabra->name; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php include 'registro-foot.php'; ?>
</div>
