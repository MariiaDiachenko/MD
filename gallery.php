<?php
require_once __DIR__ . '/require.php';

if (!isLogged()) {
  redirect('index.php');
}

$gallery = new GalleryService(getConnection());
$gallery->saveImage();
$gallery->handleDelete(filter_input(INPUT_GET, 'delete', FILTER_SANITIZE_NUMBER_INT));

$title = 'MD - gallery edit';
require(__DIR__ . '/elements/header.html.php');
?>

<div class="jumbotron">
  <h1>Add image to gallery</h1>
  <?php $gallery->renderForm(); ?>

  <?php
  $pageCount = $gallery->getPageCount();
  $url = getProjectPatch() . '/gallery.php';
  require(__DIR__ . '/elements/pagination.html.php');
  ?>

  <div class="container">
    <?php $gallery->showGallery(filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT)); ?>
  </div>
  
  <?php require(__DIR__ . '/elements/pagination.html.php'); ?>
</div>
<?php
require(__DIR__ . '/elements/footer.html.php');
