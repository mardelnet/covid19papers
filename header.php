<?php
if ( is_single() && get_post_type() == 'registros' ) {
  $title = get_the_title();
  $desc = get_the_content();
}
else if ( is_single() && get_post_type() == 'datasets' ) {
  $title = get_the_title();
  $desc = get_the_content();
}
else {
  $title = 'COVID-19 Papers & Datasets';
  $desc = 'Índice de referencia de documentos recuperados sobre COVID-19 de las dos principales bases de datos a nivel internacional de información científica: Web of Science Core Collections y SCOPUS.';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php echo $title; ?></title>
  <meta name="<?php echo $desc; ?>">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:locale" content="es_AR" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:site_name" content="<?php echo $title; ?>" />
  <meta property="og:description" content="'<?php echo $desc; ?>" />
  <meta property="og:url" content="http://c1671026.ferozo.com/" />
  <meta property="og:image" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/ogimage.png" />
  <meta property="og:image:secure_url" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/ogimage.png" />
  <meta property="og:image:width" content="908" />
  <meta property="og:image:height" content="422" />
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/&nbsp;"/>
  <meta name="msapplication-TileColor" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/#FFFFFF" />
  <meta name="msapplication-TileImage" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon/mstile-310x310.png" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;800&display=swap" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166026289-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-166026289-1');
  </script>
  <?php wp_head();?>
</head>
<body>
