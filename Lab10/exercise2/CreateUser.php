<?php
$user = $_POST["user"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "j006e424", "ief7aeg3","j006e424");
/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
$check = "select * from Users where user_id='".$user."'";
$query = "insert into Users values ('".$user."')";
if ($mysqli->query($query) && $user != '') {
	echo "User Added";
}
elseif($user == '')
{
	echo "Unable to add user: User Field Left Blank<br>";
}
elseif($mysqli->query($check))
{
	echo "User already exists";
}
/* close connection */
$mysqli->close();
?>
