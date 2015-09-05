<?php

include ($cDir . 'text.php');


echo '<div class="row">';
echo '<div class="col"  style="width:100%; max-width:1023px;">';
echo '<p class="descTitle grey-text text-darken-4">' . $title . '</p>';


echo '<p class="grey-text text-darken-4 descText">' . $desc . '</p>';





echo'<div class="divider"></div>';
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

echo '<p class="descLinks">';
echo $links;

echo '</p>';

echo '</div>';
echo '</div>';

?>
