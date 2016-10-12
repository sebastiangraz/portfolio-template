<?php snippet('head') ?>
<?php  $projects = $page->project()->yaml(); ?>
<main class="main row" role="main">
  <div class="text-content">
    <div class="mb-l mt-l">
      <?php snippet('previous-page') ?>
      <h1 class="mb-s"><?php echo $page->title()->html() ?><sup><?php echo $page->project_date()->html() ?></sup></h1>
      <div class="mb-s">
        <h3><?php echo $page->project_method()->html() ?></h3>
      </div>
      <h3><?php echo $page->project_desc()->html() ?></h3>
    </div>
  </div>
  <?php

  foreach($projects as $project): ?>
  <figure class="mb-l relative">
    <?php if($image = $page->image($project['project_image'])):?>
      <?php echo $image->html() ?>
    <?php endif  ?>

  </figure>

<?php endforeach ?>


<?php snippet('next-prev') ?>


</main>

<?php snippet('footer') ?>
