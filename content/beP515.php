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


    <!----------------------->
    
    <?php include ($ROOT . "include/php/loadText.php"); ?>
    <!----------------------->



    <!----------------------->
    <div class="row">

      <div class="col s12 m12 l8 offset-l2 section no-pad-top">
        <video class="responsive-video card" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_A.png">
          <source src="<?=$cDir?>vids/beKidsP5_A.mp4" >
          </video>
        </div>

        <div class="col s12 m12 l8 offset-l2 section no-pad-top">
          <video class="responsive-video card" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_B.png">
            <source src="<?=$cDir?>vids/beKidsP5_B.mp4" >
            </video>
          </div>


          <div class="col s12 m12 l8 offset-l2 section no-pad-top">
            <video class="responsive-video card" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_C.png">
              <source src="<?=$cDir?>vids/beKidsP5_C.mp4" >
              </video>
            </div>


            <div class="col s12 m12 l8 offset-l2 section no-pad-top">
              <video class="responsive-video card" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_D.png">
                <source src="<?=$cDir?>vids/beKidsP5_D.mp4" >
                </video>
              </div>

            </div>
            <!----------------------->

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
