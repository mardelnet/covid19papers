<?php
$fuente = get_the_terms(get_the_ID(),'dataset_publisher_name');
$palabrasclave = get_the_terms(get_the_ID(),'dataset_keyword');
$license = get_the_terms(get_the_ID(),'dataset_license');
$dataset_superTheme = get_the_terms(get_the_ID(),'dataset_superTheme');
$periodicity = get_the_terms(get_the_ID(),'dataset_accrualPeriodicity');
$format = get_the_terms(get_the_ID(),'distribution_format');
$temporal = get_the_terms(get_the_ID(),'dataset_temporal');
$field_type = get_the_terms(get_the_ID(),'field_type');
$dataset_language = get_the_terms(get_the_ID(),'dataset_language');
$dataset_spatial = get_the_terms(get_the_ID(),'dataset_spatial');
?>
<div class="registro">
  <?php if ( is_single() == false ) : ?>
  <div class="tipoderegistro">
    Dataset
  </div>
  <?php endif; ?>
  <div class="base_datos">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/candado-abierto.png" title="Open Access">
    <?php if ( empty($license) == false ) : ?>
      <?php foreach ($license as $l) : ?>
        <a href="/dataset_license/<?php echo $l->slug; ?>" style="margin-right:15px">
          <?php echo $l->name; ?>
        </a>
      <?php endforeach; ?>
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
    <?php if ( empty($fuente) == false ) : ?>
    <?php foreach ($fuente as $f) : ?>
      <a href="/dataset_publisher_name/<?php echo $f->slug; ?>" style="margin-right:15px">
        <?php echo $f->name; ?>
      </a>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <?php if ( is_single() ) : ?>
  <div class="resumen">
    <?php
    $content = get_the_content();
    the_content();
    ?>
  </div>
  <?php endif; ?>
  <?php if ( empty($format) == false ) : ?>
  <div class="temporal" style="margin-top:25px">
    Formato:
    <?php foreach ($format as $f) : ?>
      <a href="/distribution_format/<?php echo $f->slug; ?>" style="margin-right:15px">
        <?php echo $f->name; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php if ( empty($field_type) == false ) : ?>
  <div class="field_type">
    Tipo de Dato:
    <?php foreach ($field_type as $field) : ?>
      <a href="/field_type/<?php echo $field->slug; ?>" style="margin-right:15px">
        <?php echo $field->name; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php if ( empty($temporal) == false ) : ?>
  <div class="temporal">
    Temporal:
    <?php foreach ($temporal as $t) : ?>
      <a href="/dataset_temporal/<?php echo $t->slug; ?>" style="margin-right:15px">
        <?php echo $t->name; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php if ( empty($periodicity) == false ) : ?>
  <div class="periodicity">
    Periodicidad:
    <?php foreach ($periodicity as $p) : ?>
      <a href="/dataset_accrualPeriodicity/<?php echo $p->slug; ?>" style="margin-right:15px">
        <?php echo $p->name; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php if ( empty($dataset_superTheme) == false ) : ?>
  <div class="dataset_superTheme">
    Supertheme:
    <?php foreach ($dataset_superTheme as $theme) : ?>
      <a href="/dataset_superTheme/<?php echo $theme->slug; ?>" style="margin-right:15px">
        <?php echo $theme->name; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php if ( empty($dataset_language) == false ) : ?>
  <div class="dataset_language">
    Idioma:
    <?php foreach ($dataset_language as $dl) : ?>
      <a href="/dataset_language/<?php echo $dl->slug; ?>" style="margin-right:15px">
        <?php echo $dl->name; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php if ( empty($dataset_spatial) == false ) : ?>
  <div class="dataset_spatial">
    Spatial:
    <?php foreach ($dataset_spatial as $ds) : ?>
      <a href="/dataset_spatial/<?php echo $ds->slug; ?>" style="margin-right:15px">
        <?php echo $ds->name; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php if ( empty($palabrasclave) == false ) : ?>
  <div class="palabrasclave">
    Palabras Clave:
    <?php foreach ($palabrasclave as $palabra) : ?>
      <a href="/dataset_keyword/<?php echo $palabra->slug; ?>" style="margin-right:15px">
        <?php echo $palabra->name; ?>
      </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <?php include 'registro-foot.php'; ?>
</div>
