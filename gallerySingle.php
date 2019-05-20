<?php
require_once __DIR__ . '/require.php';

if (!isLogged()) {
  redirect('index.php');
}

$gallery = new GalleryService(getConnection());
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$image = $gallery->getImage($id);
$gallery->updateImage($image);
include(__DIR__ . '/elements/header.html.php');
?>

<?php $gallery->showOne($image) ?>
<h1>Edit image</h1>
<?php $gallery->renderForm($image);?>


<a class='btn btn-success' href="<?php echo getProjectPatch() . '/gallery.php'; ?>">To gallery index</a>
<a class='btn btn-success' href="<?php echo getProjectPatch() . '/index.php'; ?>">To main page</a>

<?php
include(__DIR__ . '/elements/footer.html.php');
