<?php

$ROOT = '../';

$content = "beP515";
$cDir = $content . '/';
include_once($cDir . 'text.php');
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

      <div  class="col section no-pad-top" style="width:100%; max-width:1023px;">
        <div class="section no-pad-top">
        <video class="responsive-video z-depth-1" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_A.png">
          <source src="<?=$cDir?>vids/beKidsP5_A.mp4" >
          </video>
        </div>
        </div>

        <div  class="col section no-pad-top" style="width:100%; max-width:1023px;">
          <div class="section no-pad-top">
          <video class="responsive-video z-depth-1" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_B.png">
            <source src="<?=$cDir?>vids/beKidsP5_B.mp4" >
            </video>
          </div>
          </div>


          <div  class="col section no-pad-top" style="width:100%; max-width:1023px;">
            <div class="section no-pad-top">
            <video class="responsive-video z-depth-1" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_C.png">
              <source src="<?=$cDir?>vids/beKidsP5_C.mp4" >
              </video>
            </div>
            </div>


            <div  class="col section no-pad-top" style="width:100%; max-width:1023px;">
              <div class="section no-pad-top">
              <video class="responsive-video z-depth-1" controls type="video/mp4" width="auto" height="auto"  poster="<?=$cDir?>vids/bePoster_D.png">
                <source src="<?=$cDir?>vids/beKidsP5_D.mp4" >
                </video>
              </div>
            </div>

            </div>
            <!----------------------->

            <div class="row left-align" id="masonry-grid">

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
