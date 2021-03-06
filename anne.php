<?php
# This is the PHP file for the Anne Douglass therapy project page of Michael's
# website.

include("common.php");

$styles = array("styles/anne.css");

print_top($styles);
?>

<img class="intro spread" src="images/anne/intro.jpg" alt="Anne Douglass therapy" />

<h1>Anne Douglass Therapy</h1>

<p>
  Anne Douglass is a mental health therapist in Seattle who needed branding for
  her growing business. I designed a brand system and logo that works across
  print and digital and redesigned her website.
</p>

<img id="logo" src="images/anne/logo.jpg" alt="Logo" />

<p>
  The logo was designed to express Anne’s personality, feel approachable to
  new clients, and have the personal touch of a signature. I collaborated with
  Ana Raab for photography used on the brochure and website.
</p>

<div id="brochure">
  <img src="images/anne/brochure_outside.jpg" alt="Brochure outside" />
  <img src="images/anne/brochure_inside.jpg" alt="Brochure inside" />
</div>

<div id="website">
  <h2>Website</h2>
  <p>
    I designed the website with the user in mind. Potential clients want to see
    the therapist they are considering so I made Anne the focal point of the
    site, providing important information and a method of contact at all times.
    The color palette and imagery is relaxing and approachable.
  </p>
  <a class="link-box" href="http://annedouglasstherapy.com">Visit Site</a>
  <img src="images/anne/website.jpg" alt="Website" />
</div>

<?php print_bottom(); ?>
