<?php
include connect.php;
$sql = "SELECT ID, firstname, surname, email FROM users";
$result = $mysqli->query ($sql);
if ($result){
if ($result_>num_rows > 0){
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Firstname</th>";
echo "<th>Surname</th>";
echo "<th>Email</th>";
echo "</tr>";
while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>".$row['ID']."</td>";
echo "<td>".$row['firstname']."</td>";  
echo "<td>".$row['surname']."</td>";
echo "<td>".$row['email']."</td>";
echo "</tr>";
}
echo "</table>";
}else {
echo"0 results";
}
$result->close();
$mysqli->close();
}
?>
