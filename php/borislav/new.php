<?php
srand(time());

$arr = explode(PHP_EOL, file_get_contents("test.txt") );

foreach ( $arr as $i )
{
  //file_put_contents("test.txt", "$i" . PHP_EOL, FILE_APPEND);
  echo "<span style='border: 5px dotted red; font-size: " . ( rand()%500 + 100) . "%; color: rgb(" . rand()%256 . "," . 
        rand()%256 . "," . rand()%256 . ");'>" . ($x * $i) . "</span>";
}



$x=10;
$file=   file_get_contents ( "test.txt");
$arr = explode(PHP_EOL,$file);
foreach ( $arr as $i);
//for ( $i = 0; $i < 10; $i++)
{
   //file_put_contents ( "test.txt","$i" . PHP_EOL , FILE_APPEND );

  echo "<span style='border: 5px dotted red; font-size: " . ( rand()%500 + 100) . "%; color: rgb(" . rand()%256 . "," . 
        rand()%256 . "," . rand()%256 . ");'>" . ($x * $i) . "</span>";
}
echo "<br>";

echo "<br>";

 
$y=20; 
$y += 100;
echo $y;
echo "<br>";

$z=50;
$z -= 25;
echo $z;
echo "<br>";

$i=5;
$i *= 6;
echo $i;
echo "<br>";

$j=10;
$j /= 5;
echo $j;
echo "<br>";

$k=15;
$k %= 4;
echo $k;
?>   
