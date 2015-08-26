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
  echo        '<div class="card waves-effect">';
  echo          '<div class="card-image">';
  echo            '<img src="'. $ROOT .'content/' . $indexName. '/title.png" class="responsive-img">';
  echo          '</div>';
  echo          '<div class="card-content">';
  echo            $title;
  echo          '</div>';
  echo        '</div>';
  echo      '</a>';
  echo     '</div>';

endforeach;

?>
