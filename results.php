<?php
  $length = $_POST["length"];
  $width = $_POST["width"];
  $area = $length * $width;
  $perimeter = 2 * ($length + $width);
?>
<h5>The answer to the questions you have been searching for for years and have come to a website created by a 15 year old child to find:</h5>
The area of the rectangle is <?php echo "$area" ?>cm<sup>2</sup>.
The perimeter of the rectangle is <?php echo "$perimeter" ?>cm.