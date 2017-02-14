<?php
# This is the PHP file for displaying the portfolio on the main page of
# Michael's website.

include("Project.php");

# TODO add projects to portfolio
$portfolio = array();
?>

<div id="portfolio">

  <?php foreach ($portfolio as $project) { ?>

    <div class="project">
      <a href="<?= $project->getLink() ?>">
        <span><?= $project->getTitle() ?></span>
        <img src="<?= $project->getImage() ?>" alt="<?= $project->getImageTitle() ?>" />
      </a>
    </div>

  <?php } ?>

</div>
