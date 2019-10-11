<?php
$servername = "localhost";
$username = "student";
$password = "firstlab";

//create connection
$mysqli = mysqli($servername, $username, $password, $dbasename);

//check connection
if ($mysqli->connect errno) {
printf("Connect failed: %s\n", $mysqli->connect error);
exit();
}
?>
