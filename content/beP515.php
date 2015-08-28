<?php

$ROOT = '../';

$content = "beP515";
$cDir = $content . '/';
?>
<!----------------------------------------------------------------------------->

<?php include ($ROOT . "include/php/hd.php"); ?>

<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->

<main>
  <div class="container">

    <div class="row section grey">
      <!----------------------->

      <?php include ($ROOT . "include/php/loadText.php"); ?>
      <!----------------------->

    </div>

    <!----------------------->
    <div class="row">

    <div class="col s12 m12 l8 offset-l2">
      <video class="responsive-video" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_A.png">
        <source src="<?=$cDir?>vids/beKidsP5_A.mp4" >
        </video>
      </div>

      <div class="col s12 m12 l8 offset-l2">
        <video class="responsive-video" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_B.png">
          <source src="<?=$cDir?>vids/beKidsP5_B.mp4" >
          </video>
        </div>


        <div class="col s12 m12 l8 offset-l2">
          <video class="responsive-video" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_C.png">
            <source src="<?=$cDir?>vids/beKidsP5_C.mp4" >
            </video>
          </div>


          <div class="col s12 m12 l8 offset-l2">
            <video class="responsive-video" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_D.png">
              <source src="<?=$cDir?>vids/beKidsP5_D.mp4" >
              </video>
            </div>

      </div>
      <!----------------------->

      <div class="row grey darken-2" id="masonry-grid">

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
