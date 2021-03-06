<?php

$ROOT = '../';

$content = "loopMesh";
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



    <!------------------>
    <div class="row">

      <div  class="col section no-pad-top" style="width:100%; max-width:1023px;">
        <div class="section no-pad-top">
          <video class="responsive-video z-depth-1" controls type="video/mp4" width="auto" height="auto" loop poster="<?=$cDir?>vids/a-poster.png">
            <source src="<?=$cDir?>vids/moebiusCapture_00.mp4">
            </video>
          </div>
        </div>


        <div  class="col section no-pad-top" style="width:100%; max-width:1023px;">
          <div class="section no-pad-top">
            <video class="responsive-video z-depth-1" controls type="video/mp4" width="auto" height="auto" loop poster="<?=$cDir?>vids/b-poster.png">
              <source src="<?=$cDir?>vids/moebiusCapture_01.mp4">
              </video>
            </div>
          </div>


          <div  class="col section no-pad-top" style="width:100%; max-width:1023px;">
            <div class="section no-pad-top">
              <video class="responsive-video z-depth-1" controls type="video/mp4" width="auto" height="auto" loop poster="<?=$cDir?>vids/c-poster.png">
                <source src="<?=$cDir?>vids/moebiusCapture_02.mp4">
                </video>
              </div>
            </div>


            <div  class="col section no-pad-top" style="width:100%; max-width:1023px;">
              <div class="section no-pad-top">
                <video class="responsive-video z-depth-1" controls type="video/mp4" width="auto" height="auto" loop poster="<?=$cDir?>vids/d-poster.png">
                  <source src="<?=$cDir?>vids/moebiusCapture_03.mp4">
                  </video>
                </div>
              </div>


              <div  class="col section no-pad-top" style="width:100%; max-width:1023px;">
                <div class=" section no-pad-top ">
                  <video class="responsive-video z-depth-1" controls type="video/mp4" width="auto" height="auto" loop poster="<?=$cDir?>vids/e-poster.png">
                    <source src="<?=$cDir?>vids/moebiusCapture_04.mp4">
                    </video>
                  </div>
                </div>

              </div>

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
