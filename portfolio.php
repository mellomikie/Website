<?php
# This is the PHP file for displaying the portfolio on the main page of
# Michael's website.

include("Project.php");

# TODO add projects to portfolio
$posters = new Project("Posters", "posters.php", "images/posters/postersfeaturedimageslow1.gif", "Posters");
$antivaxx = new Project("Who are the Anti-Vaxxers?", "antivaxx.php", "images/antivaxx/AVfeaturedimage1.gif", "Anti-vaxxers");

$portfolio = array($posters, $antivaxx);
?>

<div id="portfolio">

  <?php foreach ($portfolio as $project) { ?>

    <div class="project">
      <h2><?= $project->getTitle() ?></h2>
      <a href="<?= $project->getLink() ?>">
        <img src="<?= $project->getImage() ?>" alt="<?= $project->getImageTitle() ?>" />
      </a>
    </div>

  <?php } ?>

</div>
