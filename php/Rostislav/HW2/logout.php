<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>

<?php
session_unset();
session_destroy();
header("Location: index.php");
?>

</body>
</html>