<HEAD>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
</HEAD>
<?php
 echo '<table border=1>'; 
 foreach($_POST as $x => $x_value) {
    echo "<tr><td>" . $x . "</td><td>". $x_value . "</tr></td>" ;
    }
	echo "</table>";
?> 