<div class="next-prev flex mb-l text-content">
  <?php if($page->hasPrevVisible()): ?>
    <a class="prev" href="<?php echo $page->prevVisible()->url() ?>">
      <div class="next-prev-image">
        <?php echo thumb($page->prevVisible()->image(), array('width' => 120)); ?>
      </div>
      <p>Förra</p>
      <h3><?php echo $page->prevVisible()->title() ?></h3>
    </a>

  <?php endif ?>

  <?php if($page->hasNextVisible()): ?>
    <a class="next" href="<?php echo $page->nextVisible()->url() ?>">
      <div class="next-prev-image">
        <?php echo thumb($page->nextVisible()->image(), array('width' => 120)); ?>
      </div>
      <p>Nästa</p>
      <h3><?php echo $page->nextVisible()->title() ?></h3>
    </a>

  <?php endif ?>
</div>
