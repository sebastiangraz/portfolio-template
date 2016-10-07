
<?php snippet('header') ?>

  <main class="main row" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <!-- <?php echo $page->text()->kt() ?> -->
      <?php
        $events = $page->project()->yaml();



        foreach($events as $event): ?>

          <h1><?php echo $event['project_title'] ?></h1>
          <p><?php echo date('Y-m-d', strtotime($event['project_date'])) ?></p>
          <p><?php echo $event['project_location'] ?></p>
          <?php if($image = $page->image($event['project_image'])) echo $image->html() ?>

        <?php endforeach ?>

    </div>


  </main>

<?php snippet('footer') ?>
