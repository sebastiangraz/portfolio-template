
<?php snippet('header') ?>

<main class="main row" role="main">
  <div class="text-content">
    <div class="mb-l">
      <h1><?php echo $page->title()->html() ?></h1>
      <h2><?php echo $page->project_date()->html() ?></h2>
      <h3><?php echo $page->project_method()->html() ?></h3>
      <h3><?php echo $page->project_desc()->html() ?></h3>
    </div>
  </div>
  <?php
  $projects = $page->project()->yaml();
  foreach($projects as $project): ?>
    <figure class="mb-l">
      <?php if($image = $page->image($project['project_image'])) echo $image->html() ?>
    </figure>

  <?php endforeach ?>


<?php snippet('next-prev') ?>


</main>

<?php snippet('footer') ?>
