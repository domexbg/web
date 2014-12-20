<!DOCTYPE html>
<html>
<meta http-equiv="Content-type" content="text/html; charset=windows-1251">

<body>

<?php
  #header('Content-Type: text/html; charset=utf-8');
  #<meta http-equiv="Content-type" content="text/html; charset=utf-8">
  $color_arr = array("red", "blue" , "green", "yellow", "purple", "cyan", "magenta");
  $s = "LATIN-КИРИЛИЦА";
  #$s = iconv('windows-1251','UTF-8', $s);
  for ($p = 0; $p < strlen($s); $p += 1) {
      #$size = (10 * $p) % 100;
      $size = rand(20, 100);  
      #$color = $color_arr[rand(0, 6)];
      $color = "rgb(" .
          rand(0,255) . "," .
          rand(0,255) . "," .
          rand(0,255) .  
      ")";
    echo "<span style='color:" . $color . "; font-size:" . $size .
        "px;'>" . $s[$p]  . "</span>";
	#echo convert_cyr_string($s[$p],'w','a'); #convert to cyrillic the output string
  }
?>

</body>
</html> 
