<?php

include ($cDir . 'text.php');

echo '<div class="col s12 m12 l8 offset-l2">';
echo '<h4>' . $title . '</h4>';

sort($tags);

$arrlength=count($tags);
for($x=0;$x<$arrlength;$x++)
  {
    echo '<small>' . $tags[$x] . ', </small>';
  }



echo '<p>' . $desc . '</p>';
echo $links;
echo '</div>';

?>
