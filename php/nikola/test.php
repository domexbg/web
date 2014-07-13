<html>
<head> <meta charset="UTF-8">
<title>Login</title>
<style>
.red {
color: red;
font-size: 50;
}
.green {
color: green;
font-size: 50;
}
</style>
</head>
<body>
<?php
$usr = "nikola";
$psw = "marina";
$name = $_POST['name'];
$password = $_POST['password'];

if ($_POST['name']=="nikola" && $_POST['password']=="marina") {
echo "<p class='green'>Login Success</p>";
}
else { 
echo "<p class='red'>Login Failed</p>";
}
?> 

<form name="input" action="index.php" method="get">
  <input type="submit" value="Back">
  </form>

  </body>
  </html>
  
  
