<?php


$folders = glob($ROOT . 'content/*',GLOB_ONLYDIR);
$dates = array();
$projects = array();

//if all
if ($myTag === 0) {
  foreach( $folders as $folder ):
    //include content description
    include ($folder . '/text.php');
    //folder content => date from text for sort
    $projects[$datum] = $indexName;
  endforeach;
  //load only by tag
} else {
  foreach( $folders as $folder ):
    //include content description
    include ($folder . '/text.php');
    //folder content => date from text for sort
    foreach( $tags as $_tag ):
      if ($myTag === $_tag ) {
        $projects[$datum] = $indexName;
      }
    endforeach;
  endforeach;
}

//sort high to low
krsort($projects);

foreach( $projects as $datum => $indexName ):

  include ($ROOT . 'content/' . $indexName . '/text.php');
  //project card
  echo    '<div class="col s12 m6 l4">';

  echo      '<a href="' . $ROOT . 'content/' . $indexName . '.php">';
  echo        '<div class="card  grey lighten-5 fade">';
  echo          '<div class="card-image ">';
  echo            '<img src="'. $ROOT .'content/' . $indexName. '/title.png" class="responsive-img">';
  echo          '</div>';
  echo          '<div class="card-content safari-flicker">';
  echo           '<p class="truncate " id="oben">' . $title . '</p>';
  sort           ($tags);

                 $arrlength=count($tags);
  echo           '<p class="medium truncate" id="unten"><em><small>';
                 for($x=0;$x<$arrlength;$x++) {
                   if ($x !== $arrlength-1 ) {
                     echo  $tags[$x] . ', ';
                   } else {
                     echo  $tags[$x] ;
                  }
                 }
                 echo '</small></em></p><br>';

  echo          '</div>';
  echo        '</div>';
  echo      '</a>';

  echo     '</div>';

endforeach;

?>
