<!----------------------------------------------------------------------------->

<?php
$ROOT = "../";

include ($ROOT . "include/php/hd.php");
?>

<!----------------------------------------------------------------------------->
<!----------------------------------------------------------------------------->

<main>
  <div class="container" >

    <div class="row section grey">
      <div class="col s12" >
        <div class="row  grey darken-1" id="masonry-grid">

          <!----------------------------------------------------------------------------->

          <?php
          $myTag = "processing";
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