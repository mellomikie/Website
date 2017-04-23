<?php
# This is the PHP file for the antivaxx project page of Michael's website.

include("common.php");

$styles = array("styles/antivaxx.css");

print_top($styles);
?>

<img class="spread" src="images/antivaxx/AVintroimagedesktop.jpg" alt="Anti-vaxxers" />

<h1>
  Who are the Anti-Vaxxers?
  <span>
    In collaboration with
    <br />
    Tracey Nguyen &amp; Victoria Akulich
  </span>
</h1>

<p>
  This is a data visualization piece that attempts to clearly disseminate the
  facts about a complex issue using simple, approachable graphics. I
  collaborated to create an infographic poster and video to visually convey
  the facts about the anti-vaccination movement without bias.
</p>

<iframe src="https://player.vimeo.com/video/169750507"></iframe>

<p>
  In translating our research into a visualization, we wanted to bring the
  information to life in an engaging and playful way through animation and
  storytelling.
</p>

<div class="figure">
  <img src="images/antivaxx/antivaxxer_moodboard.jpg" alt="Mood board" />
  <div>
    <h2>Visual Style</h2>
    <p>
      In order to make the difficult subject matter digestible, we chose a soft
      color palette with pops of color to draw the viewer into the information.
      The graphic style of illustration and iconography is approachable and
      friendly.
    </p>
  </div>
</div>

<div class="figure">
  <img src="images/antivaxx/antivaxxerarchetypes.jpg" alt="Archetypes" />
  <div>
    <h2>Archetypes</h2>
    <p>
      After comprehensive research and analyzing the anti-vaccination movement
      in the U.S., we grouped the anti-vaxxers into five archetypes based on
      their reasons for opposing vaccines. I created custom icons to represent
      each archetype.
    </p>
  </div>
</div>

<div class="figure">
  <img src="images/antivaxx/antivaxxermap.jpg" alt="Map" />
  <div>
    <h2>Location Mapping</h2>
    <p>
      With further research, we were able to map the archetypes to specific
      locations across the U.S. and identify ecosystems that we explore within
      the infographic poster and video.
    </p>
  </div>
</div>

<img id="infograph" src="images/antivaxx/antivaxxerfinalposter.jpg" alt="Infographic poster" />

<h2>Infograph</h2>

<p>
  The infographic poster gives a comprehensive look at the complex issue of
  anti-vaccination in America, giving insight on the government and
  individual standpoints and providing unbiased, factual information about
  who the anti-vaxxers are, where they can be found and the history of the
  movement.
</p>

<?php print_bottom(); ?>
