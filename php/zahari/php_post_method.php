<html>
<body>

    <form action="index.php" method="POST">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

<?php
        /*
        if ( '3' == 3 )  
            echo "<h1>'3' == 3 => TRUE </h1>";
        else    echo "<h1>'3' == 3 => FALSE </h1>";
        if ( '3' === 3 )  
            echo "<h1>'3' === 3 => TRUE </h1>";
        else    echo "<h1>'3' === 3 => FALSE </h1>";
         */
        if ( $_SERVER["REQUEST_METHOD"] === "POST" ) {
           echo "<pre>";
           echo var_dump($_POST) . "<br/>";
           echo print_r($_POST) . "<br/>";
           echo "</pre>";

           file_put_contents("post1.txt", $_POST["name"] . ", " . $_POST["email"] . PHP_EOL,            FILE_APPEND);
        }
    ?>
</body>
</html> 
