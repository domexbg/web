<?php
session_start();
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    </script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
    function stepdown(var n){
        document.getElementById('countdown').innerHTML=n;
    }
        </script>
    
    </head>
<?php

   
    if ( isset($_POST['username']) ){        
    
        $username='user';
        $password='qwerty';
        if ($username==$_POST['username'] and $password==$_POST['pass']) {
            echo '<h1>Успешен вход</h1>';
            $clock=10;
            setcookie("loggedin", "true", time()+$clock);
            while ( isset($_COOKIE['loggedin']) ){
                echo '<script>stepdown(' . $clock . ')</script>';
                sleep(1);
                
            }
            echo "<h1 id='countdown'></h1>";
            exit;
               
        }
        else {
            echo 'Грешно име или парола';
        }
           
    }
    else {
        echo '<h1>отказан достъп</h1>';
    }
    
    $_SESSION['time']     = time();
?> 
