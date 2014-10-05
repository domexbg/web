<!DOCTYPE html>
<html>
<head>
	<title>Envelop application</title>
</head>
<body>
<?php
if ($_POST) {
    $homePhone    = trim($_POST['homePhone']);
    $homePhone    = str_replace('!', '', $homePhone);
    $address      = trim($_POST['address']);
    $address      = str_replace('!', '', $address);
    $firstName    = trim($_POST['firstName']);
    $firstName    = str_replace('!', '', $firstName);
    $lastName     = trim($_POST['lastName']);
    $lastName     = str_replace('!', '', $lastName);
    $bDate        = (int) ($_POST['bDate']);
    $bMonth       = (int) ($_POST['bMonth']);
    $bYear        = (int) ($_POST['bYear']);
    $ddate        = $bDate . '-' . $bMonth . '-' . $bYear;
    $relationship = trim($_POST['relationship']);
    $relationship = str_replace('!', '', $relationship);
    $cellPhone    = trim($_POST['cellPhone']);
    $cellPhone    = str_replace('!', '', $cellPhone);
    $provider     = trim($_POST['provider']);
    $provider     = str_replace('!', '', $provider);
    $error        = false;
    if (($bDate > 29 && $bMonth = 2) || ($bDate > 30 && ($bMonth == 4 || $bMonth == 6 || $bMonth == 9 || $bMonth == 11)) || ($bDate > 31 && ($bMonth == 1 || $bMonth == 3 || $bMonth == 5 || $bMonth == 7 || $bMonth == 8 || $bMonth == 10 || $bMonth == 12))) {
        echo '<p>Incorrect date</p>';
        $error = true;
    }
    if (mb_strlen($homePhone) < 2) {
        echo '<p>Please enter your phone number</p>';
        $error = true;
    }
    if (mb_strlen($address) < 2) {
        echo '<p>Please enter your address</p>';
        $error = true;
    }
    if (!$error) {
        $result = array($homePhone, $address, $firstName, $lastName, $ddate, $relationship, $cellPhone, $provider);
        $fp   = fopen('information.csv', 'a');
		if ( fputcsv($fp, $result) ) {
            echo '<p>Successful entry.</p>';
        }
        fclose($fp);
    }
}
?>

	<form method="POST">
		<label> Home phone: </label><input type="text" class="mainInfo" id="homePhone" name="homePhone" /> <br />
		<label> Address: </label> <input type="text" class="mainInfo" id="address" name="address" /> <br />
		<label> First Name: </label> <input type="text"  class="persInfo" id="firstName" name="firstName" /> <br />
		<label> Last Name: </label><input type="text" class="persInfo" id="lastName" name="lastName" /> <br />
		<label> Date of Birth: </label> 
		<select name='bDate'id='bDate'>
			<?php
$dateCounter = 1;
for ($dateCounter = 1; $dateCounter <= 31; $dateCounter++) {
    echo '<option>' . $dateCounter . '</option>';
}
?>
		</select>
		<select name='bMonth' id='bMonth'>
			<?php
$monthCounter = 1;
for ($monthCounter = 1; $monthCounter <= 12; $monthCounter++) {
    echo '<option>' . $monthCounter . '</option>';
}
?>
		</select>
		<select name='bYear' id='bYear'>
			<?php
$yearCounter = 1920;
for ($yearCounter = 1920; $yearCounter <= 2014; $yearCounter++) {
    echo '<option>' . $yearCounter . '</option>';
}
?>
		</select><br />        
		<label> Relationship: </label><input type="text" id="relationship" name="relationship" /> <br />
		<label> Cell Number: </label><input type="text" name="cellPhone" /> <br />
		<label> Provider (At&t, Sprint, Verizon..Etc): </label> <input type="text" name="provider" /> <br />
		<input type="submit" value="Send" />
	</form> <br />
    <a href="sendEmail.php">
        <input type="button" value="Send email" />
    </a>
	
</body>
</html>