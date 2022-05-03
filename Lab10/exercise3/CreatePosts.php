<?php
$user = $_POST["user"];
$post = $_POST["post"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "j006e424", "ief7aeg3","j006e424");
/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
$query = "insert into Posts(content,author_id) values('".$post."','".$user."')";
if($post == '')
{
	echo "Post has no text";
}
elseif($mysqli->query($query))
{
	echo "Post Saved";
}
else
{
	echo "Post not written by existing user";
}
/* close connection */
$mysqli->close();
?>
