<form action="matrix.php" method="post" name="zaqvka" id="nomer">
 <?php
$link = mysqli_connect("localhost", "bobi", "", "bobi");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * from users_new";
$us    = mysqli_query($link, $query);


echo "<select name='select1' id='select1'>";
while ($t = mysqli_fetch_assoc($us)) {
    echo "<option value=" . $t["id"] . ">" . $t["name"] . "</option>";

}



$query = "select * from switches";
$sw    = mysqli_query($link, $query);

while ($t = mysqli_fetch_assoc($sw)) {
    echo "<option value=" . $t["id"] . ">" . $t["name"] . "</option>";

}
echo "</select >";
//*vtori select*
    echo"&nbsp;&nbsp;&nbsp;&nbsp;";


$query = "SELECT * from users_new";
$us    = mysqli_query($link, $query);


echo "<select name='select2' id='select2'>";
while ($t = mysqli_fetch_assoc($us)) {
    echo "<option value=" . $t["id"] . ">" . $t["name"] . "</option>";

}



$query = "select * from switches";
$sw    = mysqli_query($link, $query);

while ($t = mysqli_fetch_assoc($sw)) {
    echo "<option value=" . $t["id"] . ">" . $t["name"] . "</option>";

}
echo "</select>";

?>
<input type="submit" value="natisni"  name="button1" id="button1"/>

</form>
<?php
 if ($_POST ) {
 echo "";
 $query="insert into matrix values (" . $_POST["select1"] . "," .
        $_POST["select2"] .")";
echo ""$query;
//  mysqli_query($link,);
 }


?>
