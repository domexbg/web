<!DOCTYPE html>
<html>
<body>

<?php
  $color_arr = array("red", "blue" , "green", "yellow", "purple", "cyan", "magenta");
  $s = "String to be formatted as single letters in different colors.";
  for ($p = 0; $p < strlen($s); $p += 1) {
      $size = (10 * $p) % 100;
      $size = rand(20, 100);  
      $color = $color_arr[rand(0, 6)];
      $color = "rgb(" .
          rand(0,255) . "," .
          rand(0,255) . "," .
          rand(0,255) .  
      ")";
    echo "<span style='color:" . $color . "; font-size:" . $size .
        "px;'>" . $s[$p]  . "</span>";
  }
?>

</body>
</html> 
