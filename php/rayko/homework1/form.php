<script>
</script>
<style>
	label {
    display:inline-block;
    width:100px;
    text-align: left;
    }
 </style>
<form method="post" action="index.php">
  <label>Item name:</label>
  <input type="text" name="it_name"> <br/>
  <label>Amount:</label> 
  <input type="text" name="it_amount"> <br/>
  <label>Item group:</label> 
   <select name="it_group">
      <option value="food">Храна</option>
      <option value="transport">Транспорт</option>
      <option value="clothes">Дрехи</option>
      <option value="other">Други</option>
    </select> <br/>
   
   <button type="submit">Добави</button>
</form>