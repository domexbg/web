<?php
$link = mysqli_connect("localhost", "bobi", "", "bobi");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$user=$_GET["user"];
$q=$_GET["switch"];
$query = "SELECT * from switch";
$us    = mysqli_query($link, $query);

       //var_dump($q);
$count=0;
      
for (;$user != $q;$count++)    {
  $us    = mysqli_query($link, $query);
  if ($count>100){break;
  }
   
     while ($t = mysqli_fetch_assoc($us))   {
          // echo '<pre>', print_r($t, true), '</pre>';
           // echo '<pre>', print_r($user, true), '</pre>';
           //  echo "<br><br>";
                
          if  ($user == $t["port1"]){
                 echo "$user<br>";
                 $user=$t["Mqsto"];
                 // echo '<pre>', print_r($t, true), '</pre>';
            //echo '<pre>', print_r($user, true), '</pre>';
            
          } elseif ($user == $t["port2"]) {
                echo "$user<br>";
                $user=$t["Mqsto"];
            
                // echo '<pre>', print_r($t, true), '</pre>';
           // echo '<pre>', print_r($user, true), '</pre>';
            
          } elseif ($user == $t["port3"]) {
                   echo "$user<br>";
                   $user=$t["Mqsto"];
                   // echo '<pre>', print_r($t, true), '</pre>';
           // echo '<pre>', print_r($user, true), '</pre>';
            
          } elseif ($user == $t["port4"]) {
                   echo "$user<br>";
                   $user=$t["Mqsto"];
                   // echo '<pre>', print_r($t, true), '</pre>';
           // echo '<pre>', print_r($user, true), '</pre>';
            
          }elseif ($user == $t["port5"]){
                echo "$user<br>";
                   $user=$t["Mqsto"];
                   // echo '<pre>', print_r($t, true), '</pre>';
           // echo '<pre>', print_r($user, true), '</pre>';
            
          }elseif ($user == $t["port6"]) {
                     echo "$user<br>";
                     $user=$t["Mqsto"];
                     // echo '<pre>', print_r($t, true), '</pre>';
           // echo '<pre>', print_r($user, true), '</pre>';
          }elseif ($user == $t["port7"]) {
                   echo "$user<br>";
                   $user=$t["Mqsto"];
               // echo '<pre>', print_r($t, true), '</pre>';
               // echo '<pre>', print_r($user, true), '</pre>';
          }

      }
}
              //var_dump($count);
              echo "$q";
?>
