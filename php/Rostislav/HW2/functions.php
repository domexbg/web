<?php
function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
function logincheck($username, $password) {
		$passfile = file_get_contents("userpass.txt");
		$passline = explode(PHP_EOL, $passfile);
		foreach($passline as $i) {
			$userpass = explode(",", $i);
			if ($username === $userpass[0] and $password === $userpass[1]) {
				return true;
			}
			else {
				return false;
			}
		}
	}
?>