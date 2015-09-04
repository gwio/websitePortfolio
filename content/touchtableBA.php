<?php

$ROOT = '../';

$content = "touchtableBA";
$cDir = $content . '/';
?>
<!----------------------------------------------------------------------------->

<?php include ($ROOT . "include/php/hd.php"); ?>

<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->

<main>
  <div class="container">


    <!----------------------->

    <?php include ($ROOT . "include/php/loadText.php"); ?>
    <!----------------------->

<div class="row">
    <div class="col s12 m12 l8 section no-pad-top">
      <div class="video-container z-depth-1">
        <iframe src="https://player.vimeo.com/video/43830519"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
</div>

    <div class="row center-align" id="masonry-grid">


      <!----------------------->
      <?php include ($ROOT . "include/php/loadImg.php"); ?>
      <!----------------------->


    </div>

  </div>
</main>


<!----------------------------------------------------------------------------->

<?php include ($ROOT . "include/php/fo.php"); ?>

<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->
