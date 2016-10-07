<?php snippet('header') ?>

  <main class="main row" role="main">

    <div class="text">

      <h1><?php echo $page->name()->html() ?></h1>
      <h3><?php echo $page->ingress()->kt() ?></h3>
      <p><?php echo $page->text()->kt() ?></p>

    </div>


  </main>

<?php snippet('footer') ?>
