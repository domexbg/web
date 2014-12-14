<head>
  <style>
    .color-red {
      color: red;
      font-size: 200%;
    }
    .color-blue {
      color: blue;
      font-size: 300%;
    }
  </style>
</head>

<?php
  $msg = "Formatted sentense each letter different size and color.";
  $l = strlen( $msg );
  $i = 0;
  echo $msg . "<br/>";

  while ( $i < $l )
  {
      $letter_style = "";
      $letter_style .= "color:rgb(" . rand(0, 255) . "," . 
                       rand(0, 255) . "," . rand(0, 255) . ");";
      $letter_style .= "font-size: " . rand(100, 1000) . "%;";

      echo "<span style='" . $letter_style . "'>" . $msg[$i] . "</span>";
      $i++;
  }
?>
