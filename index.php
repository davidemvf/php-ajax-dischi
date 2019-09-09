<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">

    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

    <title></title>


  </head>
  <body>
    <div class="container">

        <?php
          include "vars.php";
          foreach ($data as $album) {
              echo '<div class="album">'
              . "<p>".$album["titolo"]."</p>"
              . "<p>".$album["autore"]."</p>"
              . "<p>".$album["anno"]."</p>"
              . "</div>";

        };
        ?>





    </div>


    <!-- TEMPLATE: selector -->
    <script id="item-template" type="text/x-handlebars-template"></script>
  </body>
</html>
