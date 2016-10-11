<ul class="mb-l">
  <?php $projects = page('projects')->children()->visible(); ?>
  <?php $first = $projects->first() ?>

  <?php foreach($projects->limit($count) as $project): ?>
  <li <?php if($project == $first) { echo ' class="active ', 'project-', $project->num(), '"'; } else { echo ' class="', 'project-', $project->num(), '"';} ?>>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>

<!--
class="<?php echo 'project-', $project->num() ?>" -->
