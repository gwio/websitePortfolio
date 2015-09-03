<?php

$ROOT = '../';

$content = "plotterDrawing";
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



    <div class="row center-align" id="masonry-grid">

      <div class="col s12 m12 l8 offset-l2">
        <div class="video-container card">
          <iframe src="https://player.vimeo.com/video/31036094"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>

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
