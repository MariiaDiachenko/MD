<article class="col-md-4 isotopeItem <?php echo isset($image['category'])?$image['category']:''; ?>">
  <?php if(isLogged()):?>
    <a class="btn btn-success" href="<?php echo getProjectPatch() . '/gallerySingle.php?id=' . $image['id'];?>">EDIT</a>
    <a class="btn btn-danger" href="<?php echo getProjectPatch() . '/gallery.php?delete=' . $image['id']; ?>" onclick="return confirm('Are you sure?')">DELETE</a>
  <?php endif; ?>
  <div class="portfolio-item">
    <div class="wow bounceIn">
        <img src="<?php echo getProjectPatch() . '/uploads/' . $image['name']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>
    <div class="portfolio-desc align-center">
      <div class="folio-info">
        <h5><a href="#"><?php echo $image['description']; ?></a></h5>
          <a href="<?php echo getProjectPatch() . '/uploads/' . $image['name']; ?>" class="fancybox">
            <i class="fa fa-external-link fa-2x"></i>
          </a>
        </div>
    </div>
  </div>
</article>
