<header class="header" role="banner">
  <div class="header-content">
    <div id="brand">
      <h2>Marie Strom Gunner</h2>
    </div>
    <ul class="flex link-group mt-s mb-l">
      <li><a href="/about">Om Mig &rarr;</a></li>
      <li><a href="/kontakt">Kontakt &rarr;</a></li>
    </ul>
    <p>
      Utvalda konstverk
    </p>
    <ul class="projects mb-s mt-s">
      <?php foreach(page('malningar')->children()->visible()->limit(6) as $project): ?>
        <li class="grid-2-sm">
          <div class="hidden-mobile">
            <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
              <a href="<?php echo $project->url() ?>">
                <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
              </a>
            <?php endif ?>
          </div>
          <h2><a class="project-hover" data-id="<?php echo 'project-', $project->num() ?>" href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h2>
        </li>
      <?php endforeach ?>
    </ul>
    <ul>
      <li><a class="cta" href="/malningar">Se alla konstverk &rarr;</a></li>
    </ul>
  </div>
</header>
