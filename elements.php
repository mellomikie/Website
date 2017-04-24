<?php
# This is the PHP file for the Amazon elements project page of Michael's
# website.

include("common.php");

$styles = array("styles/elements.css");

print_top($styles);
?>

<img class="intro spread" src="images/elements/intro.jpg" alt="Amazon Elements" />

<h1>Amazon Elements</h1>

<p>
  Amazon Elements is a brand that is transparent about the origins of its
  products. My role was to design a brand page that expresses what they stand
  for, provides the consumer with information about the products and allows for
  products to be purchased. Additionally, I designed a data driven testing
  module for the vitamins &amp; supplements product line.
</p>

<img class="spread" src="images/elements/transparency_showcase.jpg" alt="Transparency showcase" />
<img class="spread" src="images/elements/vitamins_showcase.jpg" alt="Vitamins showcase" />
<img class="spread" src="images/elements/baby_wipes_showcase.jpg" alt="Babywipes showcase" />

<p>
  The challenge of creating the brand page for Amazon Elements was to
  incorporate two very different products and have them speak the same visual
  language under one brand. Having large showcase graphics to hero the products
  and explain the brand is a solution that leaves room for future products.
</p>

<img class="spread" src="images/elements/vitamin_d.jpg" alt="Vitamin D" />
<img class="spread" src="images/elements/turmeric.jpg" alt="Turmeric" />
<img class="spread" src="images/elements/vitamins.jpg" alt="Vitamins" />

<div id="website">
  <h2>Branding Page</h2>
  <p>
    After research and customer insights, I organized the content of the page
    with high level information about the brand and products at the top, with
    further details about what Amazon Elements stands for included with images
    that customers responded well to. Lastly, the point of purchase divides the
    products into categories for an easier shopping experience that allows for
    future product to easily be added.
  </p>
  <img src="images/elements/website.jpg" alt="Website" />
</div>

<!-- TODO tabbed content -->

<h2>Vitamins Testing Report</h2>

<p>
  For the vitamins product line, customers can scan each individual bottle with
  their mobile phone to see detailed information about the origins of the
  product. I was tasked to design the testing report that visualized data from
  comprehensive tests the vitamins go through. The challenge was to show complex
  scientific testing methods that customers are not familiar with in a way they
  can understand quickly and effortlessly. I used a simple line graph throughout
  the report to make it easier for customers to understand the wealth of data
  while color coding the report with the brand colors of each individual
  vitamin.
</p>

<div id="mobile">
  <img src="images/elements/turmeric_test.jpg" alt="Turmeric testing" />
  <img src="images/elements/calcium_test.jpg" alt="Calcium testing" />
  <img src="images/elements/vitamin_d_test.jpg" alt="Vitamin D testing" />
  <img src="images/elements/vitamin_k_test.jpg" alt="Vitamin K testing" />
</div>

<?php print_bottom(); ?>
