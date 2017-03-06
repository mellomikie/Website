<?php
# This is the PHP file for displaying the portfolio on the main page of
# Michael's website.

include("Project.php");

# TODO add projects to portfolio
$posters = new Project("Posters", "posters.php", "images/posters/postersfeaturedimageslow1.gif", "Posters");
$antivaxx = new Project("Who are the Anti-Vaxxers?", "antivaxx.php", "images/antivaxx/AVfeaturedimage1.gif", "Anti-vaxxers");
$taf = new Project("Texas Art &amp; Film", "taf.php", "images/taf/taf_ftd_image_1000x1000.jpg", "Texas Art &amp; Film");
$anne = new Project("Anne Douglass Therapy", "anne.php", "images/anne/annedouglassfeaturedimage.jpg", "Anne Douglass");
$saff = new Project("Seattle Animation Film Festival", "saff.php", "images/saff/SAFFpostermockup.jpg", "Seattle Animation Film Festival");

$portfolio = array($saff, $anne, $taf, $antivaxx, $posters);
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
