<?php
require_once __DIR__ . '/require.php';
$gallery = new GalleryService(getConnection());
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$gallery->saveImage($id);
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>MD - Mariia Diachenko</title>
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
  <?php $gallery->showOne($id) ?>
  <?php $gallery->renderForm();?>


  <a href="<?php echo getProjectPatch() . '/gallery.php'; ?>">To gallery index</a>
  <a href="<?php echo getProjectPatch() . '/index.php'; ?>">To main page</a>
</body>

</html>
