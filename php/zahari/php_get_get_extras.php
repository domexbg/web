<html>
<body>

    <form action="index.php" method="GET">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

<?php
        /*
		if ( '3' == 3 )  
			echo "<h1>'3' == 3 => TRUE </h1>";
		else	echo "<h1>'3' == 3 => FALSE </h1>";
		if ( '3' === 3 )  
			echo "<h1>'3' === 3 => TRUE </h1>";
		else	echo "<h1>'3' === 3 => FALSE </h1>";
		 */
		if ( $_GET && ( $_GET["name"] || $_GET["email"] ) ) {
           echo "<pre>";
           echo var_dump($_GET) . "<br/>";
           echo print_r($_GET) . "<br/>";
		   echo "</pre>";

		   file_put_contents("post1.txt", $_GET["name"] . ", " . $_GET["email"] . PHP_EOL,         	FILE_APPEND);
           echo "<pre>";
		   echo var_dump( explode(PHP_EOL, file_get_contents("post1.txt") ) );
		   echo "</pre>";
		}
    ?>
</body>
</html> 
