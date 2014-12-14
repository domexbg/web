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
      $letter_style = "color-red";
      if ( $i % 2 === 0 ) $letter_style = "color-blue";
      echo "<span class='" . $letter_style . "'>" . $msg[$i] . "</span>";
      $i++;
  }
?>
