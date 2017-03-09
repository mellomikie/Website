<?php
# This is the PHP file for the Seattle animation film festival project page of
# Michael's website.

include("common.php");

$styles = array("styles/saff.css");

head($styles);
?>

<img class="spread" src="images/saff/saffintroimage1.jpg" alt="Seattle animation film festival" />

<h1>Seattle Animation Film Festival</h1>

<p>
  I created an advertising campaign for an animated film festival in Seattle
  using iconography to represent the adaptability of animated film. The campaign
  was expressed through print, motion, merchandise and digital formats.
</p>

<div id="icons">
  <img src="images/saff/SAFFsecondimage1.png" alt="Full icon" />
  <img src="images/saff/SAFFthirdimagee.jpg" alt="Title icon" />
  <img src="images/saff/SAFFfourthimage.png" alt="Other icons" />
</div>

<h2>Iconography</h2>

<p>
  The icon set further represents the adaptability of animated film by
  showcasing what animation is and can be: whimsical, artistic, experimental,
  2-dimensional, 3-dimensional, storytelling and more.
</p>

<div id="website">
  <video src="videos/saff.mp4" autoplay="autoplay" loop="loop">
    Your browser does not support the video element or the MP4 video format.
  </video>
  <a class="link-box" href="">Visit Site</a>
</div>

<div id="mobile">
  <img src="images/saff/SAFFuxscreen1.jpg" alt="Title screen" />
  <img src="images/saff/SAFFuxscreen2.jpg" alt="Home screen" />
  <img src="images/saff/SAFFuxscreen3.jpg" alt="Detail screen" />
</div>

<h2>Mobial App</h2>

<p>
  I designed a task flow for a mobile app that shows how the Seattle Animation
  Film Festival brand would translate to a digital device and provide the user
  with useful information about the festival, allow them to purchase a pass as
  well as giving detailed breakdowns of each film that is featured.
</p>

<div id="merchandise">
  <img src="images/saff/safftshirt.png" alt="T-shirt" />
  <img src="images/saff/safftote.png" alt="Tote" />
  <img src="images/saff/allpins.png" alt="Pins" />
</div>

<?php foot(); ?>
