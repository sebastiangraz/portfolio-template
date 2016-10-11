<?php snippet('head') ?>
  <main class="main row" role="main">

    <div class="text-content mt-l">
      <?php snippet('previous-page') ?>
      <h1 class="mb-s"><?php echo $page->name()->html() ?></h1>
      <h3 class="mb-s"><?php echo $page->ingress()->kt() ?></h3>
      <p><?php echo $page->text()->kt() ?></p>

    </div>


  </main>

<?php snippet('footer') ?>
