<?php snippet('head') ?>

  <main class="main row" role="main">
    <div class="text-content">
      <div class="mb-l mt-l">
        <?php snippet('previous-page') ?>
        <h1><?php echo $page->title()->html() ?></h1>
        <p><?php echo $page->text()->kt() ?></p>
      </div>
    </div>
    <ul class="grid-3">
      <?php $projects = page('malningar')->children()->visible(); ?>
      <?php $first = $projects->first() ?>

      <?php foreach($projects->limit($count) as $project): ?>
      <li>
        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <a href="<?php echo $project->url() ?>">
          <img class="mb-s" src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
          <h2 class="mb-l"><?php echo $project->title()->html() ?></h2>
        </a>
        <?php endif ?>
      </li>
      <?php endforeach ?>
    </ul>


  </main>

<?php snippet('footer') ?>
