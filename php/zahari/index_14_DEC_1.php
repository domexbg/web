<!DOCTYPE html>
<html>
<body>

<h1><div style='border:5px dotted blue;color:red; font-size:100px; padding:50px;;'>M
</div>y First Heading</h1>

<p>My first paragraph.</p>
<?php
  $x = 15;
  $y = 5;
  for ($p = 0; $p < 10; $p += 1) {
	$size = ($x + $y) * $p; 
	echo "<p>The sum is <span style='color: purple; font-size:" . $size .
		"px;'>" . $size  . "</span>!</p>";
  }
?>

</body>
</html> 
