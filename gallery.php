<?php
require_once __DIR__ . '/require.php';

if (!isLogged()) {
  redirect('index.php');
}

$gallery = new GalleryService(getConnection());
$gallery->saveImage();
$gallery->handleDelete(filter_input(INPUT_GET, 'delete', FILTER_SANITIZE_NUMBER_INT));

$title = 'MD - gallery edit';
include(__DIR__ . '/elements/header.html.php');
?>


<h1>Add image to gallery</h1>
<?php $gallery->renderForm(); ?>

<?php $gallery->showGallery(filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT)); ?>

<?php
$pageCount = $gallery->getPageCount();
$url = getProjectPatch() . '/gallery.php';
include(__DIR__ . '/elements/pagination.html.php');
?>


<a class='btn btn-success' href="<?php echo getProjectPatch() . '/gallery.php'; ?>">To gallery index</a>
<a class='btn btn-success' href="<?php echo getProjectPatch() . '/index.php'; ?>">To main page</a>
<?php
include(__DIR__ . '/elements/footer.html.php');
