<?php


$folders = glob('content/*',GLOB_ONLYDIR);
$dates = array();
$projects = array();


foreach( $folders as $folder ):

  include ($folder . '/text.php');

  $projects[$datum] = $indexName;


endforeach;

krsort($projects);

foreach( $projects as $datum => $indexName ):


  echo    '<div class="col s12 m6 l4">';
  echo      '<a href="' . $indexName . '.php">';
  echo        '<div class="card waves-effect">';
  echo          '<div class="card-image">';
  echo            '<img src="content/' . $indexName. '/titel.png" class="responsive-img">';
  echo          '</div>';
  echo          '<div class="card-content">';
  echo            'AA';
  echo          '</div>';
  echo        '</div>';
  echo      '</a>';
  echo     '</div>';

endforeach;

?>
