<?php get_header(); ?>
<?php get_template_part('parts/hambmenu'); ?>
<div id='home'>
  <a href="https://humanidades.mdp.edu.ar/" target="_blank">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/unmdp.png" />
  </a>
  <h1>
    <a href="/" target="_self">
      COVID-19 <span>Papers & Datasets</span>
    </a>
  </h1>
  <div id="search">
    <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
  </div>
  <!--
  <form id='main_form' method="get" action="">
    <input type="text" id="search" name="search" placeholder="Buscar..." style="margin-bottom:20px;">
    <input type="submit" value="Ir">
    <div>
      <input type="radio" id="all" name="radioval" value="all" selected> Todo
      <input type="radio" id="title" name="radioval" value="title"> Por título
      <input type="radio" id="author" name="radioval" value="author"> Por autor
      <input type="radio" id="source" name="radioval" value="source"> Por revista
      <input type="radio" id="keyword" name="radioval" value="keyword"> Por palabra clave
    </div>
  </form>
  -->
</div>
<?php
$count_registros_papers = wp_count_posts( 'registros' )->publish;
$count_registros_datasets = wp_count_posts( 'datasets' )->publish;
$count_registros = $count_registros_papers + $count_registros_datasets;
?>
<script>
jQuery(document).ready(function(){
  jQuery('#ajaxsearchliteres1').css('margin-top' , '-55px');
  jQuery('#ajaxsearchliteres1').css('border-radius' , '5px');
  jQuery('#home #ajaxsearchlite1 .probox .proinput input').attr("placeholder", "Buscar entre los <?php echo $count_registros; ?> registros...");
});
</script>
<?php get_footer(); ?>
