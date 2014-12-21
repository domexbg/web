<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
</head>
<body>
	<a id="link1" href="entry.php"> Добави разход </a>
	<form id="form1" method="GET" action="index.php">	
		<select id="menu1" name="group">
            <?php
		        $grp = "all";
		        if ( $_GET ) $grp = $_GET["group"];
                $menu_arr = array(
                  "all" => "Всички",
                  "food" => "Храна",
                  "drinks" => "Напитки",
                  "clothes" => "Облекло",
                  "utilities" => "Косумативи",
                  "services" => "Услуги",
    			  "other" => "Други"
			    );
				foreach ($menu_arr as $key => $value)
				{
					if ( $key === $grp )
					    $opt = "<option selected id=\"" . $key . "\"";
					else 
					    $opt = "<option id=\"" . $key . "\"";
					$opt .= " value=\"" . $key . "\">";
					$opt .= $value . "</option>";
					echo $opt . PHP_EOL;
				}
            ?>
		</select>
        <input id="button1" type="submit"/>
	</form>
    <?php
        $file = file_get_contents('data.txt', FILE_USE_INCLUDE_PATH);
		$lines = explode(PHP_EOL, $file);
		echo "<pre>";
		var_dump( $lines ); 
		echo "</pre>";

    ?>
	<table border="2">
		<tr>
            <td>Дата</td>
            <td>Име</td>
            <td>Сума</td>
            <td>Вид</td>
		</tr>
    <?php
	    $total = 0;	
	    for ($i = 0; $i < count($lines); $i++)
		{
			if ( 
				   !$lines[$i] || 
				   !strpos( $lines[$i] . ";all", ";" . $grp ) 
			   ) continue;
			$tin = explode(";", $lines[$i]);
			$total += floatval($tin[2]);
            echo "<tr>";
			for ($j = 0; $j < count($tin); $j++)
			{
				if ( isset($menu_arr[ $tin[$j] ]) )
				  echo "<td>" . $menu_arr[ $tin[$j] ]. "</td>";
				else 
				  echo "<td>" . $tin[$j] . "</td>";
			}
			echo "</tr>";
		}	
		echo "<tr><td>---</td><td>TOTAL</td><td>" . $total . "</td><td>---</td>";
    ?>
	</table>
</body>
</html>
