<?php
# This is the PHP file for common code on Michael's website.

# Prints page header with the given style sheets and scripts.
function head($styles = NULL, $scripts = NULL) {
  ?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" />
      <title>Michael Woody's Website</title>
      <link href="images/home/favicon.svg" type="image/svg" rel="shortcut icon" />
      <link href="style.css" type="text/css" rel="stylesheet" />

      <?php add_styles($styles); ?>

      <script src="https://use.typekit.net/szu5vdq.js"></script>
      <script>try{Typekit.load({ async: true });}catch(e){}</script>

      <?php add_scripts($scripts); ?>

    </head>
    <body>
      <div id="head">
        <a href="mellomikie.com">
          <img id="logo" src="images/home/logoforweb.svg" alt="Michael's logo" />
        </a>
      </div>

        <?php
}

# Prints page footer.
function foot() {
  ?>

    <!-- TODO add footer here -->
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
