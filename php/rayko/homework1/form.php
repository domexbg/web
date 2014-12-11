<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <style type="text/css">
	label {
      display:inline-block;
      width:100px;
	  text-align: left;
      margin: 5px;
    }
  </style>
</head>
<body>
<form method="post" action="index.php">
  <label>Име:</label>
  <input type="text" name="it_name"> <br/>
  <label>Сума:</label> 
  <input type="text" name="it_amount"> <br/>
  <label>Вид:</label> 
   <select name="it_group">
      <option value="food">Храна</option>
      <option value="transport">Транспорт</option>
      <option value="clothes">Дрехи</option>
      <option value="other">Други</option>
    </select> <br/>
   
   <button type="submit">Добави</button>
</form>
</body>
</html>
