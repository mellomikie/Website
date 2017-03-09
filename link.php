<?php
# This is the PHP file for the link project page of Michael's website.

include("common.php");

$styles = array("styles/link.css");

head($styles);
?>

<img class="spread" src="images/link/linkintroimage.jpg" alt="Link" />

<h1>Link</h1>

<p>
  I created a brand identity system for the Seattle Link light rail
  transportation system. The process began with research about the history of
  the transit system, rider demographics, interviews with the staff of the Link
  and came together through an identity system that I applied to print,
  advertising, web, and environmental graphics.
</p>

<img id="small-logo" src="images/link/LINKLOGO.png" alt="Small logo" />
<img id="big-logo" src="images/link/letsmoveforward.jpg" alt="Big logo" />

<h2>Logo &amp; Concept</h2>

<p>
  I designed this logo to represent the progress that the transit system brings
  to the Puget Sound region. The blue color is representative of the region and
  the yellow is for progress. Where they meet is Link, which is a catalyst for
  changing direction and moving forward.
</p>

<!-- TODO tabbed content -->

<div class="figure">
  <img src="images/link/linkprint.jpg" alt="Link print" />
  <div>
    <h2>Print</h2>
    <p>
      I created a print ad to exist at bus shelters and outside of Link stations
      to market to commuters who are looking for a way to save time on their
      commute and get out of traffic. I also designed a mailer to be sent out to
      explain about the new station expansions and provide information about the
      Link Pass.
    </p>
  </div>
</div>

<div class="figure">
  <img src="images/link/linkwebsitemockup.jpg" alt="Website" />
  <div>
    <h2>Digital</h2>
    <p>
      I designed a responsive homepage for Link that would focus on giving route
      information and provide riders with information about the Link Pass as
      well as new station expansions.
    </p>
  </div>
</div>

<div class="figure">
  <img src="images/link/environmentalgraphics.jpg" alt="Environmental graphics" />
  <div>
    <h2>Environmental Graphics</h2>
    <p>
      I designed a system of environmental graphics to exist within the Capitol
      Hill stations and stay true to the brand identity, using the yellow beam
      to represent progress and moving forward.
    </p>
  </div>
</div>

<?php foot(); ?>
