<header class="header" role="banner">
  <div class="header-content">
    <h2 class="mb-l">Marie Strom Gunner</h2>
    <p>
      Utvalda verk
    </p>
    <ul class="projects mb-s mt-s">
      <?php foreach(page('projects')->children()->visible()->limit(6) as $project): ?>
        <li>
          <h2><a data-id="<?php echo 'project-', $project->num() ?>" href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h2>
        </li>
      <?php endforeach ?>
    </ul>
    <ul>
      <li><a href="/projects">Se alla verk &rarr;</a></li>
    </ul>
    <ul class="link-group mt-l">
      <li><a href="/about">Om Mig</a></li>
      <li><a href="/kontakt">Kontakt</a></li>
    </ul>
  </div>
</header>
