<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form id="form1" method="POST" action="entry.php">
		<a id="link1" href="index.php"> Списък </a>
        <br/>
        Име: <input id="name1" name="name" type="text"/> 
        <br/>
    	Сума: <input id="sum1" name="amount" type="text"/> 
        <br/>
    	Вид: 
    	<select id="menu1" name="group">
            <option id="food" value="food">Храна</option>
            <option id="drinks" value="drinks">Напитки</option>
            <option id="clothes" value="clothes">Облекло</option>
            <option id="utilities" value="utilities">Косумативи</option>
            <option id="services" value="services">Услуги</option>
            <option id="other" value="other">Други</option>
        </select>
        <br/>
    	<input id="button1" type="submit" value="Добави"/>
	</form>
    <?php
        if ( $_POST ) 
		{
           echo "<pre>";
		   echo var_dump($_POST);
		   echo "</pre>";
		   $line = date("d.m.Y") . ";";
		   $line .= $_POST["name"] . ";";
		   $line .= $_POST["amount"] . ";"; 
		   $line .= $_POST["group"] . PHP_EOL;

		   $res = file_put_contents("data.txt", $line, FILE_APPEND | LOCK_EX);
		   if ( $res ) 
			   echo "<p style=\"color: green; font-weight: 100;\">" . 
			        "Записът беше успешен!</p>";
		}
    ?>
</body>
</html>
