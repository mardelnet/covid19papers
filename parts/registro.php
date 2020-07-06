<?php
if ( get_post_type() == 'datasets' ) {
  include 'registro-dataset.php';
}
else {
  include 'registro-paper.php';
}
?>
