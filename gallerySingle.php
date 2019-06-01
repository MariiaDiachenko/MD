<?php
require_once __DIR__ . '/require.php';

if (!isLogged()) {
  redirect('index.php');
}

$gallery = new GalleryService(getConnection());
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$image = $gallery->getImage($id);
$gallery->updateImage($image);
require(__DIR__ . '/elements/header.html.php');
?>
<section id="section-works" class="section appear clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="portfolio-items isotopeWrapper clearfix" id="3">
                      <?php $gallery->showOne($image) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<h1>Edit image</h1>
<?php $gallery->renderForm($image);?>


<a class='btn btn-success' href="<?php echo getProjectPatch() . '/gallery.php'; ?>">To gallery index</a>
<a class='btn btn-success' href="<?php echo getProjectPatch() . '/index.php'; ?>">To main page</a>

<?php
require(__DIR__ . '/elements/footer.html.php');
