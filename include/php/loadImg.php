<?php
$dir = $cDir . '*.png';
$images = glob( $dir );

$imgCount = 0;
foreach( $images as $image ):
  if($image != $cDir . 'title.png'){
    $imgCount += 1;
    echo '<div class="col s12 m12 l8">';
    echo '<div class="section no-pad-top"><img alt="' . $title . $imgCount . '" src="' . $image . '" class="responsive-img z-depth-1"></div>';
    echo '</div>';
  }
endforeach;
?>
