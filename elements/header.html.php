<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ? $title : 'MD - Mariia Diachenko'; ?></title>
    <link rel="Shortcut icon" href="logo.ico" />
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
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="skin/default.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
  </head>
  <body>
    <?php if (isLogged()):?>
      <div class="logged_menu">
        <a class="btn btn-success" href="<?php echo getProjectPatch() . '/logout.php'; ?>">logout</a>
        <a class="btn btn-success" href="<?php echo getProjectPatch() . '/gallery.php'; ?>">gallery</a>
        <a class='btn btn-success' href="<?php echo getProjectPatch() . '/index.php'; ?>">main page</a>
      </div>
    <?php endif;?>
