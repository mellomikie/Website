<?php
# This is the PHP file for the main page of Michael's website.

include("common.php");

$styles = array("styles/index.css");

print_top($styles);
?>

<p id="intro">

  <?php print_logo(); ?>

  Seattle based designer specializing in visual identity and creative strategy
  with a user-centered focus
</p>

<?php
include("Project.php");

$posters = new Project("Posters", "posters.php", "images/posters/project.gif");
$antivaxx = new Project("Who are the Anti-Vaxxers?", "antivaxx.php", "images/antivaxx/project.gif", "Anti-vaxxers");
$taf = new Project("Texas Art &amp; Film", "taf.php", "images/taf/project.jpg");
$anne = new Project("Anne Douglass Therapy", "anne.php", "images/anne/project.jpg", "Anne Douglass");
$saff = new Project("Seattle Animation Film Festival", "saff.php", "images/saff/project.gif");
$catnip = new Project("Catnip", "catnip.php", "images/catnip/project.gif");
$immerse = new Project("Immerse", "immerse.php", "images/immerse/project.jpg");
$link = new Project("Link", "link.php", "images/link/pass.jpg");
$elements = new Project("Amazon Elements", "elements.php", "images/elements/project.jpg");
$portfolio = array($elements, $link, $immerse, $catnip, $saff, $anne, $taf, $antivaxx, $posters);

portfolio($portfolio);
?>

<div id="about">
  <h1>About Michael</h1>
  <p>
    Michael is a creative thinker and designer. With a background in
    Psychology, he approaches design with a balance of research, behavioral
    perspective, creative problem solving and close attention to detail to
    develop deliberate and effective solutions. He is thoughtful and passionate
    about crafting user experiences, brand identities and engaging visual
    designs. His love for travel and years living in Japan influence his
    approach to design.
  </p>
</div>

<?php print_bottom(); ?>
