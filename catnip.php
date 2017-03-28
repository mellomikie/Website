<?php
# This is the PHP file for the catnip project page of Michael's website.

include("common.php");

$styles = array("styles/catnip.css");

head($styles);
?>

<img class="spread" src="images/catnip/intro.jpg" alt="Catnip" />

<h1>
  Catnip
  <br />
  <span>In collaboration with Caitlin Esworthy</span>
</h1>

<p>
  Catnip is an augmented reality mobile game app that incorporates 3D models and
  wayfinding to encourage the user to get out and explore. It offers options for
  relieving stress, relaxing and taking a break by connecting the user with
  unique, collectable digital cats.
</p>

<img id="logo" src="images/catnip/logo.png" alt="Logo" />

<div id="mobile">
  <img src="images/catnip/play_screen.jpg" alt="Play screen" />
  <img src="images/catnip/chat_screen.jpg" alt="Chat screen" />
  <img src="images/catnip/find_screen.jpg" alt="Find screen" />
</div>

<p>
  Catnip has two primary functions: exploring the city to discover digital cat
  locations and playfully interacting with your collected cats. We explored both
  of these tasks with a clickable prototype, making design decisions based on
  user research, heuristics and testing.
</p>

<!-- TODO tabbed content -->

<iframe src="https://player.vimeo.com/video/167828969"></iframe>

<h2>Marketing Video</h2>

<p>
  We created a marketing video to showcase the functionality of Catnip, using
  the 3D models in real space to show how the user can interact within the app.
</p>

<iframe src="https://player.vimeo.com/video/167835395"></iframe>

<h2>User Goal One</h2>

<p>
  One of our user’s primary goals is to escape stress and anxiety, so we focused
  on making a fun task that allowed for exploration of an urban environment with
  the instant gratification of finding and collecting unique digital cat
  friends.
</p>

<iframe src="https://player.vimeo.com/video/167836344"></iframe>

<h2>User Goal Two</h2>

<p>
  A secondary user goal is to deal with anxiety while on the go or when unable
  to get out and escape the stresses of life, so we designed a function of the
  mobile game to allow the user to interact with the cats they have collected by
  messaging, gifting, taking photos or sharing.
</p>

<iframe src="https://player.vimeo.com/video/167835181"></iframe>

<h2>User Goal Three</h2>

<p>
  Another goal of our user is to share delightful things with friends in order
  to feel connected. Within our game we created a task flow that allows the user
  to easily share their experiences in Catnip.
</p>

<div id="characters">
  <img src="images/catnip/space_kitty.jpeg" alt="Space kitty" />
  <img src="images/catnip/cupcake_kitty.jpeg" alt="Cupcake kitty" />
  <img src="images/catnip/dapper_kitty.jpeg" alt="Dapper kitty" />
</div>

<h2>Character Design</h2>

<p>
  Based on our research and heuristic analysis, our user was seeking instant
  gratification by seeing cute things that delight throughout the day. This
  insight became the basis of the creation of the cat characters, each with a
  unique personality that is also expressed in their appearance. The characters
  were created using 3D modeling software.
</p>

<?php foot(); ?>
