<?php
# This is the PHP file for the Seattle animation film festival project page of
# Michael's website.

include("common.php");

$styles = array("styles/saff.css");

print_top($styles);
?>

<img class="intro spread" src="images/saff/intro.jpg" alt="Seattle animation film festival" />

<h1>Seattle Animation Film Festival</h1>

<p>
  I created an advertising campaign for an animated film festival in Seattle
  using iconography to represent the adaptability of animated film. The campaign
  was expressed through print, motion, merchandise and digital formats.
</p>

<div id="website">
  <video src="videos/saff.mp4" autoplay="autoplay" loop="loop">
    Your browser does not support the video element or the MP4 video format.
  </video>
  <a class="link-box" href="">Visit Site</a>
</div>

<div id="merchandise">
  <img src="images/saff/tshirt.png" alt="T-shirt" />
  <img src="images/saff/tote.png" alt="Tote" />
  <img src="images/saff/pins.png" alt="Pins" />
</div>

<h2>Iconography</h2>

<p>
  The icon set further represents the adaptability of animated film by
  showcasing what animation is and can be: whimsical, artistic, experimental,
  2-dimensional, 3-dimensional, storytelling and more.
</p>

<div id="icons">
  <img src="images/saff/full_icon.png" alt="Full icon" />
  <img src="images/saff/title_icon.jpg" alt="Title icon" />
  <img src="images/saff/other_icon.png" alt="Other icons" />
</div>

<h2>Mobial App</h2>

<p>
  I designed a task flow for a mobile app that shows how the Seattle Animation
  Film Festival brand would translate to a digital device and provide the user
  with useful information about the festival, allow them to purchase a pass as
  well as giving detailed breakdowns of each film that is featured.
</p>

<div id="mobile">
  <img src="images/saff/title_mobile.jpg" alt="Title screen" />
  <img src="images/saff/home_mobile.jpg" alt="Home screen" />
  <img src="images/saff/detail_mobile.jpg" alt="Detail screen" />
</div>

<?php print_bottom(); ?>
