
<!----------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Christian Gwiozda</title>

  <?php
  echo '<!-----google material icons--->';
  echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
  echo '<!--Import materialize.css-->';
  echo '<link type="text/css" rel="stylesheet" href="' . $ROOT . 'include/css/materialize.css"  media="screen,projection"/>';
  echo '<!------own css--->';
  echo '<link href="' . $ROOT . 'include/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>';
  echo '<!-----fa-icons------------->';
  echo '<link rel="stylesheet" href="' . $ROOT . 'include/fa/css/font-awesome.min.css">';
  ?>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>

  <!----------------------------------------------------------------------------->



  <!-- Dropdown Structure -->
  <ul id="dropdown" class="dropdown-content">
    <li><a href="<?=$ROOT?>sort/audio.php">audio</a></li>
    <li><a href="<?=$ROOT?>sort/code.php">code</a></li>
    <li><a href="<?=$ROOT?>sort/education.php">education</a></li>
    <li><a href="<?=$ROOT?>sort/openframeworks.php">openframeworks</a></li>
    <li><a href="<?=$ROOT?>sort/photography.php">photography</a></li>
    <li><a href="<?=$ROOT?>sort/processing.php">processing</a></li>
    <li><a href="<?=$ROOT?>sort/typography.php">typography</a></li>
  </ul>
  <!-- Dropdown Structure -->



  <div class="container headerFix ">

    <div class="headerFix row valign-wrapper" style="line-height: 38px">




      <div class="col s12 left-align">

        <a  href="#" data-activates="mobile-demo" class="button-collapse hide-on-large-only navButton"><i class="fa fa-reorder"></i></a>

        <div class="brandtext">
          <a href="<?=$ROOT?>index.php">Christian Gwiozda</a>
        </div>

        <div class="headerNav hide-on-med-and-down">

          <span><a class='dropdown-button' data-constrainwidth="false" data-beloworigin="true" href="#!" data-activates='dropdown'><i class="fa fa-chevron-down"></i></a></span>
          <a href="mailto:christian@gwiozda.net">contact</a>
        </div>

      </div>

    </div>




    <ul class="side-nav" id="mobile-demo">
      <li><a href="mailto:christian@gwiozda.net">Contact</a></li>
      <li class="divider"></li>
      <li><a href="<?=$ROOT?>sort/audio.php">audio</a></li>
      <li><a href="<?=$ROOT?>sort/code.php">code</a></li>
      <li><a href="<?=$ROOT?>sort/education.php">education</a></li>
      <li><a href="<?=$ROOT?>sort/openframeworks.php">openframeworks</a></li>
      <li><a href="<?=$ROOT?>sort/photography.php">photography</a></li>
      <li><a href="<?=$ROOT?>sort/processing.php">processing</a></li>
      <li><a href="<?=$ROOT?>sort/typography.php">typography</a></li>
    </ul>

  </div>




  <!----------------------------------------------------------------------------->
