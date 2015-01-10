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
    </script>
    </head>

    <body>
        <div class="container">  
            <form role="form" id="form1" method="POST" action="page.php">                      		
                <div class="form-group">
                    <label for="name1">Username:</label>
                    <input type="text" class="form-control" name="username" id="name1" 
                    placeholder="въведете текст">
                </div>
                <div class="form-group">
                    <label for="pass">Password:</label>
		    <input type="text" class="form-control" name="pass" id="pass" 
                    placeholder="въведете парола">
                </div>
                <input id="button1" type="submit" class="btn btn-default" value="Вход"/>
            </form>
        </div>
       
    </body>

    </html>
