<!----------------------------------------------------------------------------->

<?php
$ROOT = "../";
$myTag = "openframeworks";
include($ROOT . "include/php/hd.php");
?>

<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->

<main>
  <div class="container" >

    <div class="row section">
      <div class="col s12" >
        <div class="row" id="masonry-grid">

          <!----------------------------------------------------------------------------->

          <?php

          include ($ROOT . "include/php/contentList.php");
          ?>

          <!----------------------------------------------------------------------------->
        </div>
      </div>
    </div>
  </div>

</main>

<!----------------------------------------------------------------------------->

<?php include ($ROOT . "include/php/fo.php"); ?>

<!----------------------------------------------------------------------------->
