<?php

$ROOT = '../';

$content = "loopMesh";
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

    <!------------------>
    <div class="row">

      <div class="col s12 m12 l8 offset-l2">
        <video class="responsive-video" controls type="video/mp4" width="auto" height="auto" loop poster="<?=$cDir?>vids/a-poster.png">
          <source src="<?=$cDir?>vids/moebiusCapture_00.mp4" >
          </video>
        </div>


        <div class="col s12 m12 l8 offset-l2">
          <video class="responsive-video" controls type="video/mp4" width="auto" height="auto" loop poster="<?=$cDir?>vids/b-poster.png">
            <source src="<?=$cDir?>vids/moebiusCapture_01.mp4" >
            </video>
          </div>


          <div class="col s12 m12 l8 offset-l2">
            <video class="responsive-video" controls type="video/mp4" width="auto" height="auto" loop poster="<?=$cDir?>vids/c-poster.png">
              <source src="<?=$cDir?>vids/moebiusCapture_02.mp4" >
              </video>
            </div>


            <div class="col s12 m12 l8 offset-l2">
              <video class="responsive-video" controls type="video/mp4" width="auto" height="auto" loop poster="<?=$cDir?>vids/d-poster.png">
                <source src="<?=$cDir?>vids/moebiusCapture_03.mp4" >
                </video>
              </div>


              <div class="col s12 m12 l8 offset-l2">
                <video class="responsive-video" controls type="video/mp4" width="auto" height="auto" loop poster="<?=$cDir?>vids/e-poster.png">
                  <source src="<?=$cDir?>vids/moebiusCapture_04.mp4" >
                  </video>
                </div>

              </div>

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
