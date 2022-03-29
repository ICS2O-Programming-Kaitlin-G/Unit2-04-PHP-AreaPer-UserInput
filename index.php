<!DOCTYPE html>
<!-- ICS2O-Unit2-04-AreaPerRectangle-UserInput -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Area and perimeter calculator aka the coolest thing EVER now in php!!!">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>rectangle hours.(php edition)</title>
 
    <!-- wow favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- PHP echo time for webpage content heck yeah! -->
  <?php 
    echo "<h1>CHeating Exercise Software System (CHESS)</h1>";
  ?>

  <!-- form to receive some tasty information for area and perimeter -->
  <form action="./results.php" method="post" target="results">
    <label for="length">Length</label>
    <input type="number" id="length" placeholder="Give Length." name="length">
    <br>
    <br>
    <label for="width">Width</label>
    <input type="number" id="width" placeholder="Give Width." name="width">
    <br>
    <br>
    <input type="submit" value="Calculate Please :)"
    <br>
    <br>
  </form>

  <!-- Frame for results where they will appear mmmm -->
  <iframe id="results" name="results">
    The area of the rectangle is " + $area + cm<sup>2</sup>"
    The perimeter of the rectangle is " + $perimeter + cm"
  </iframe>
</body>
</html>