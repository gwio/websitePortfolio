<?php

include ($cDir . 'text.php');


echo '<div class="row">';
echo '<div class="col s12 m12 l8">';
echo '<h4><span class="descTitle grey-text text-darken-4">' . $title . '</span></h4>';


echo '<p class="grey-text text-darken-4 descText">' . $desc . '</p>';


echo '<p class="tagStyle">';
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
echo '</p>';

echo '<p>';
echo $links;

echo '</p>';


echo '</div>';
echo '</div>';

?>
