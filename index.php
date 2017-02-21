<?php
# This is the PHP file for the main page of Michael's website.

include("common.php");

$styles = array("index.css");

head($styles);
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

  <a id="email" href="mailto:hi@mellomikie.com">hi@mellomikie.com</a>

  <ul id="social">
    <li>
      <a href="http://www.facebook.com/michael.woody.10" target="_blank">
        <img src="images/home/facebook.png" alt="Facebook" />
      </a>
    </li>
    <li>
      <a href="http://www.linkedin.com/in/michael-woody-64a6507" target="_blank">
        <img src="images/home/linkedin.png" alt="LinkedIn" />
      </a>
    </li>
    <li>
      <a href="http://www.instagram.com/mellomikie" target="_blank">
        <img src="images/home/instagram.png" alt="Instagram" />
      </a>
    </li>
  </ul>

  <div id="resume">
    <a href="documents/mwresume.pdf">View Resume</a>
  </div>
</div>

<?php foot(); ?>
