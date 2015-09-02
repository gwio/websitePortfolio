<?php
$dir = $cDir . '*.png';
$images = glob( $dir );

foreach( $images as $image ):
  if($image != $cDir . 'title.png'){
    echo '<div class="col s12 m12 l8 offset-l2">';
    echo '<div class="section"><img src="' . $image . '" class="responsive-img z-depth-1"></div>';
    echo '</div>';
  }
endforeach;
?>
