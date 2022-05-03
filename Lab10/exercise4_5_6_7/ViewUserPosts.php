<?php
$author = $_POST["posts"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "j006e424", "ief7aeg3","j006e424");
/* check connection */
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
$query = "SELECT content FROM Posts where author_id='".$author."'";
if ($result = $mysqli->query($query)) {
/* fetch associative array */
	echo "<table style='border:1px solid;'>";
	echo "<th style='border:1px solid;'>".$author."'s Posts</th>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr style='border:1px solid;'><td style='border:1px solid;'>";
		echo $row["content"];
		echo "</td></tr>";
	}
	/* free result set */
	echo "</table>";
	$result->free();
}

/* close connection */
$mysqli->close();
?>
