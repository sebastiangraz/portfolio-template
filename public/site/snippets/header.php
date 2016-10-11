<header class="header" role="banner">
  <div class="header-content">
    <a class="logo" href="<?php echo url() ?>">
      <h2 class="mb-l">Marie Strom Gunner</h3>
      </a>
      <ul class="projects">
        <?php foreach(page('projects')->children()->visible()->limit(8) as $project): ?>
          <li>
            <h2><a data-id="<?php echo 'project-', $project->num() ?>" href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h2>
          </li>
        <?php endforeach ?>
      </ul>
      <ul>
        <li><a href="/projects">See all projects</a></li>
      </ul>
      <ul class="link-group mt-l">
        <li><a href="/about">About</a></li>
        <li><a href="/kontakt">Kontakt</a></li>
      </ul>
    </div>
  </header>
