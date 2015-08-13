<?php


$folders = glob('content/*',GLOB_ONLYDIR);
$dates = array();
$projects = array();


foreach( $folders as $folder ):
  //include content description
  include ($folder . '/text.php');
  //folder content => date from text for sort
  $projects[$datum] = $indexName;
endforeach;

//sort high to low
krsort($projects);

foreach( $projects as $datum => $indexName ):

  include ('content/' . $indexName . '/text.php');
  //project card
  echo    '<div class="col s12 m6 l4">';
  echo      '<a href="' . $indexName . '.php">';
  echo        '<div class="card waves-effect">';
  echo          '<div class="card-image">';
  echo            '<img src="content/' . $indexName. '/title.png" class="responsive-img">';
  echo          '</div>';
  echo          '<div class="card-content">';
  echo            $title;
  echo          '</div>';
  echo        '</div>';
  echo      '</a>';
  echo     '</div>';

endforeach;

?>
