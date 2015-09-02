
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


  <nav class="grey lighten-3">
    <div class="nav-wrapper container">
      <div class=" row">
        <div class="col s12 ">
          <a href="<?=$ROOT?>index.php" class="brand-logo">Christian Gwiozda</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class='dropdown-button' data-constrainwidth="false" data-beloworigin="true" href="#!" data-activates='dropdown'>sort<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="mailto:christian@gwiozda.net">Contact</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="<?=$ROOT?>index.php">Christian Gwiozda</a></li>
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
      </div>
    </div>
  </nav>

  <!----------------------------------------------------------------------------->
