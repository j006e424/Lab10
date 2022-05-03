<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "j006e424", "ief7aeg3","j006e424");
/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
$id = $_POST["posts"];
echo "<table style='border: 1px solid;'>";
echo "<tr><th style='border: 1px solid;'>Post Id Deleted</th></tr>";
for($i=0;$i<count($_POST["posts"]);$i++)
{
	$query[$i] = "Delete FROM Posts where post_id='".$id[$i]."'";
	if ($mysqli->query($query[$i])) {
		echo "<tr><td style='border: 1px solid;'>".$id[$i]."</td></tr>";
	}
}
/* close connection */
echo "</table>";
$mysqli->close();
?>
