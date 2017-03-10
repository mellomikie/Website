<?php
# This is the PHP file for the main page of Michael's website.

include("common.php");

$styles = array("styles/index.css", "styles/portfolio.css");

head($styles);

include("Project.php");

$posters = new Project("Posters", "posters.php", "images/posters/postersfeaturedimageslow1.gif");
$antivaxx = new Project("Who are the Anti-Vaxxers?", "antivaxx.php", "images/antivaxx/AVfeaturedimage1.gif", "Anti-vaxxers");
$taf = new Project("Texas Art &amp; Film", "taf.php", "images/taf/taf_ftd_image_1000x1000.jpg");
$anne = new Project("Anne Douglass Therapy", "anne.php", "images/anne/annedouglassfeaturedimage.jpg", "Anne Douglass");
$saff = new Project("Seattle Animation Film Festival", "saff.php", "images/saff/SAFFpostermockup.jpg");
$catnip = new Project("Catnip", "catnip.php", "images/catnip/catnipprojectmockupgif3.gif");
$immerse = new Project("Immerse", "immerse.php", "images/immerse/immersemockup.jpg");
$link = new Project("Link", "link.php", "images/link/linkpassmockup.jpg");
$elements = new Project("Amazon Elements", "elements.php", "images/amazon_elements/ae_ft_image_1000x1000.jpg");
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

<?php foot(); ?>
