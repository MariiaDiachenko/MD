<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ? $title : 'MD - Mariia Diachenko'; ?></title>
    <link rel="Shortcut icon" href="logo.ico" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link href="css/responsive-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="Shortcut icon" href="logo.ico" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="skin/default.css">
  </head>
  <body>
    <!-- todo style logout to position fixed -->
    <?php if (isLogged()):?>
      <div class="logout">
        <a href="<?php echo getProjectPatch() . '/logout.php'; ?>">logout</a>
      </div>
    <?php endif;?>
