<article class="col-md-4 isotopeItem event">
  <?php if(isLogged()):?>
    <h2><a href="<?php echo getProjectPatch() . '/' . $image['id'];?>">EDIT</a></h2>
  <?php endif; ?>
  <div class="portfolio-item">
    <div class="wow bounceIn">
      <a href="#">
        <img src="<?php echo getProjectPatch() . '/uploads/' . $image['name']; ?>" alt="<?php echo $image['alt']; ?>" />
      </a>
    </div>
    <div class="portfolio-desc align-center">
      <div class="folio-info">
        <h5><a href="#"><?php echo $image['name']; ?></a></h5>
          <a href="<?php echo getProjectPatch() . '/uploads/' . $image['name']; ?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
        </div>
    </div>
  </div>
</article>
