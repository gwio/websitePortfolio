<?php
$content = "template";
$cDir = 'content/' . $content . '/';
?>
<!----------------------------------------------------------------------------->

<?php include ("include/php/hd.php"); ?>

<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->

<main>
  <div class="container">

    <div class="row section grey">

           <?php include ("include/php/loadText.php"); ?>

    </div>

    <div class="row grey darken-2" id="masonry-grid">

<!----------------------->
      <?php include ("include/php/loadImg.php"); ?>


    </div>

  </div>
</main>


<!----------------------------------------------------------------------------->

<?php include ("include/php/fo.php"); ?>

<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->
