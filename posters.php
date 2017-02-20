<?php
# This is the PHP file for the posters project page of Michael's website.

include("common.php");

$styles = array("posters.css");

head($styles);
?>

<div id="intro">
  <img src="images/posters/postersintroimage1.jpg" alt="Poster" />
</div>

<div id="content">
  <h1>Posters</h1>

  <p>
    The following is a collection of posters that I designed.
  </p>

  <div id="lemons" class="poster">
    <img src="images/posters/fucklifeposter1.jpg" alt="Lemons" />
  </div>

  <h2>Lemons</h2>

  <p>
    This poster was designed as a way to express anger in a fun and interesting
    way. So often we hold in our anger and are told that we should make the best
    of what is given to us. Making lemonade out of lemons is fine and all, but
    sometimes getting good and angry is much more cathartic.
  </p>

  <div id="snow" class="poster">
    <img src="images/posters/snowfallingposter.jpg" alt="Snow Falling on Cedars" />
  </div>

  <h2>Snow Falling on Cedars</h2>

  <p>
    Drawing on the themes of love and memory, I created illustrations that
    captured the core essence of the play. Red flecks on the poster reference
    the darker themes in the story such as murder and racial prejudice.
  </p>

  <div id="cat" class="poster">
    <img src="images/posters/antiquecatposter.jpg" alt="Antique Cat" />
  </div>

  <h2>Antique Cat</h2>

  <p>
    Appealing to a niche market of those interested in both cats and Japanese
    culture, I designed a poster based on a craigslist ad that featured an
    antique cat.
  </p>

  <div id="dim-sum" class="poster">
    <img src="images/posters/dimsumposter.jpg" alt="Dim Sum" />
  </div>

  <h2>Dim Sum</h2>

  <p>
    This poster is inspired by the variety of delicious food that comes with dim
    sum as well as my love for puns.
  </p>
</div>

<?php foot(); ?>
