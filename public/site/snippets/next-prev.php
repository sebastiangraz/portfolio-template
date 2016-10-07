<div class="next-prev flex mb-l">
  <?php if($page->hasPrevVisible()): ?>
    <a href="<?php echo $page->prevVisible()->url() ?>">
      <h3><?php echo $page->prevVisible()->title() ?></h3>
    </a>
  <?php endif ?>

  <?php if($page->hasNextVisible()): ?>
    <a href="<?php echo $page->nextVisible()->url() ?>">
      <h3><?php echo $page->nextVisible()->title() ?></h3>
    </a>
  <?php endif ?>
</div>
