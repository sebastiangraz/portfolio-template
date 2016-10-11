<div class="next-prev flex mb-l text-content">
  <?php if($page->hasPrevVisible()): ?>
    <div class="">
      <p>
        Previous
      </p>
      <a href="<?php echo $page->prevVisible()->url() ?>">
        <?php echo thumb($page->prevVisible()->image(), array('width' => 80)); ?>
        <h3><?php echo $page->prevVisible()->title() ?></h3>
      </a>
    </div>

  <?php endif ?>

  <?php if($page->hasNextVisible()): ?>
    <div>
      <p>
        Next
      </p>
      <a href="<?php echo $page->nextVisible()->url() ?>">
        <?php echo thumb($page->nextVisible()->image(), array('width' => 80)); ?>
        <h3><?php echo $page->nextVisible()->title() ?></h3>
      </a>
    </div>

  <?php endif ?>
</div>
