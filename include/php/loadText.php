<?php

include ($cDir . 'text.php');


echo '<div class="row">';
echo '<div class="col s12 m12 l8 offset-l2">';
echo '<h4><span class="medium grey-text text-darken-4">' . $title . '</span></h4>';




echo '<p class="medium grey-text"><em><small>';
sort($tags);
$arrlength=count($tags);
for($x=0;$x<$arrlength;$x++)
{
  if ($x !== $arrlength-1 ) {
    echo  $tags[$x] . ', ';
  } else {
    echo  $tags[$x] ;
  }
}
echo '</em></small></p>';


echo '<p class="grey-text text-darken-2 flow-text">' . $desc . '</p>';

echo '<p class="medium"><small>';
echo $links;

echo '</small></p>';


echo '</div>';
echo '</div>';

?>
