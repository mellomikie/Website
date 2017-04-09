<?php
# This is the PHP file for common code on Michael's website.

# Prints page header with the given style sheets and scripts.
function head($styles = NULL, $scripts = NULL) {
  ?>

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Michael Woody's Website</title>
      <meta charset="utf-8" />
      <meta name="description" content="Michael Woody is a graphic designer in Seattle, Washington." />
      <meta name="keywords" content="web design, user experience design, package design, visual design, minimalist" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="images/home/favicon.svg" type="image/svg" rel="shortcut icon" />
      <link href="styles/style.css" type="text/css" rel="stylesheet" />

      <?php add_styles($styles); ?>

      <script src="https://use.typekit.net/szu5vdq.js" type="text/javascript"></script>
      <script src="scripts/main.js" type="text/javascript"></script>

      <?php add_scripts($scripts); ?>

    </head>
    <body>
      <header>
        <!-- TODO add header here -->
      </header>

      <?php
}

# Prints page footer.
function foot() {
  ?>

      <footer>
        <a class="link-box" href="mailto:hi@mellomikie.com">Email</a>
        <a class="link-box" href="documents/mwresume.pdf">Resume</a>
        <a href="http://www.facebook.com/michael.woody.10" target="_blank">
          <img src="images/home/facebook.png" alt="Facebook" />
        </a>
        <a href="http://www.linkedin.com/in/michael-woody-64a6507" target="_blank">
          <img src="images/home/linkedin.png" alt="LinkedIn" />
        </a>
        <a href="http://www.instagram.com/mellomikie" target="_blank">
          <img src="images/home/instagram.png" alt="Instagram" />
        </a>
      </footer>
    </body>
  </html>

  <?php
}

# Adds (links) given CSS files to page.
function add_styles($styles) {
  foreach ((array) $styles as $style) {
    ?>

    <link href="<?= $style ?>" type="text/css" rel="stylesheet" />

    <?php
  }
}

# Adds given JavaScript files to page.
function add_scripts($scripts) {
  foreach ((array) $scripts as $script) {
    ?>

    <script src="<?= $script ?>" type="text/javascript"></script>

    <?php
  }
}

# Prints warning message if JavaScript is disabled.
function javascript_message() {
  ?>

  <noscript>

    <?php
    $message = "This web page requires JavaScript. Please visit this page with a JavaScript-enabled web browser.";
    flash($message);
    ?>

  </noscript>

  <?php
}

# Prints warning message about incomplete part of website.
function placeholder_message() {
  $message = "Not implemented yet!";
  flash($message);
}

# Prints flash message.
function flash($message) {
  ?>

  <div class="flash"><span><?= $message ?></span></div>

  <?php
}

# Displays the given portfolio of projects.
function portfolio($portfolio) {
  ?>

  <div id="portfolio">

    <?php foreach ($portfolio as $project) { ?>

      <div class="project">
        <h2>
          <?= $project->getTitle() ?>
          <br />
          <span>Add description here</span>
        </h2>
        <a href="<?= $project->getLink() ?>">
          <img src="<?= $project->getImage() ?>" alt="<?= $project->getImageTitle() ?>" />
        </a>
      </div>

    <?php } ?>

  </div>

<?php
}
