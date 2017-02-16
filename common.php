<?php
# This is the PHP file for common code on Michael's website.

# Prints page header with the given style sheets and scripts.
function head($styles = NULL, $scripts = NULL) {
  ?>

  <!DOCTYPE html>
  <html>
    <head>
      <title>Michael Woody's Website</title>
      <meta charset="utf-8" />
      <meta name="description" content="Michael Woody is a graphic designer in Seattle, Washington." />
      <meta name="keywords" content="web design, user experience design, package design, visual design, minimalist" />
      <link href="images/home/favicon.svg" type="image/svg" rel="shortcut icon" />
      <link href="style.css" type="text/css" rel="stylesheet" />

      <?php add_styles($styles); ?>

      <script src="https://use.typekit.net/szu5vdq.js" type="text/javascript"></script>
      <script src="main.js" type="text/javascript"></script>

      <?php add_scripts($scripts); ?>

    </head>
    <body>
      <header>
        <a href="mellomikie.com">
          <img src="images/home/logoforweb.svg" alt="Michael's logo" />
        </a>
      </header>

        <?php
}

# Prints page footer.
function foot() {
  ?>

    <footer>
      <!-- TODO add footer here -->
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
?>
