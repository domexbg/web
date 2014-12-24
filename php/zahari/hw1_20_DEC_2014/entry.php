<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    </script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
    </script>
</head>
<body>
  <div class="container">  
    <form role="form" id="form1" method="POST" action="entry.php">
		<a id="link1" href="index.php"> Списък </a>
		<br/>
        <div class="form-group">
           <label for="name1">Име:</label>
		   <input type="text" class="form-control" name="name" id="name1" 
            placeholder="Име на разход">
       </div>
        <div class="form-group">
           <label for="sum1">Сума:</label>
		   <input type="text" class="form-control" name="amount" id="sum1" 
            placeholder="Сума на разход">
        </div>
        <div class="form-group">
          <label for="sum1">Вид:</label>
    	  <select class="form-control" id="menu1" name="group">
            <option id="food" value="food">Храна</option>
            <option id="drinks" value="drinks">Напитки</option>
            <option id="clothes" value="clothes">Облекло</option>
            <option id="utilities" value="utilities">Косумативи</option>
            <option id="services" value="services">Услуги</option>
            <option id="other" value="other">Други</option>
          </select>
        </div>
    	<input id="button1" type="submit" class="btn btn-default" value="Добави"/>
	</form>
    <?php
if ($_POST) {
    echo "<pre>";
    echo var_dump($_POST);
    echo "</pre>";
    $line = date("d.m.Y") . ";";
    $line .= $_POST["name"] . ";";
    $line .= $_POST["amount"] . ";";
    $line .= $_POST["group"] . PHP_EOL;
    
    $res = file_put_contents("data.txt", $line, FILE_APPEND | LOCK_EX);
    if ($res)
        echo "<p style=\"color: green; font-weight: 100;\">" . "Записът беше успешен!</p>";
}
?>
  </div>
</body>
</html>
