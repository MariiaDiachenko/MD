<?php//$pageCount and url needs to be provided ?>
<?php
  $page = (int)filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT);
  $page = $page ?:(int)$page;
  $prev = $page-1;
  $next = $page+1;
?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php if ($page!==1): ?>
      <li class="page-item"><a class="page-link" href="<?php echo $url . '?page=' . $prev; ?>">Previous</a></li>
    <?php endif; ?>

    <?php for ($i=1; $i < $pageCount+1; $i++):?>
      <li class="page-item"><a class="page-link" href="<?php echo $url . '?page=' . $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>

    <?php if ($page!==$pageCount): ?>
      <li class="page-item"><a class="page-link" href="<?php echo $url . '?page=' . $next; ?>">Next</a></li>
    <?php endif; ?>
  </ul>
</nav>
