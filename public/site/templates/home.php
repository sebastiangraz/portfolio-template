<?php snippet('header') ?>

<main class="main row" role="main">

  <div class="text">

    <h1><?php echo $page->title()->html() ?></h1>
    <?php snippet('project-loop') ?>

  </div>

</main>

<?php snippet('footer') ?>
