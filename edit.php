<?php
include 'connect.php';
if (isset( $_POST['submit']))
{
}
else
{
}
$updatequery = "UPDATE users SET firstname=?, surname=?, email=?, password=? WHERE id=?";
$stmt = $mysqli->prepare($updatequery);
$stmt->bind_param('sssss',$_POST['fname'],$_POST['sname'],$_POST['email'],
$_POST['pass'],$_POST['id']);

if (!$stmt->execute())){
echo"Error:".$mysqli->error;
}
else {
echo "<p>Record updated successfully</p>";
echo "<a href=\"display.php\">display</a>";
}
$mysqli->close();
{
$populatequery = "SELECT * from users WHERE ID='".$_GET['id']."'";
$result = $mysqli->query ($populatequery);
if ($result){
if($result->num_rows>0){
while($row = $result->fetch_assoc()))
{
$fn = $row['firstname'];
$sn = $row['surname'];
$em = $row['email'];
$pw = $row['password'];
}
}
?>
<h1>Edit record:</h1>
<form action="edit.php?id=<?php echo $_GET['id']; ?>"method="post">
Firstname: <br>
<input class="form-control" type="text" id="fname" name="fname"
value="<?php echo "$fn"; ?>"/><br>
Surname:<br>
<input class="form-control" type="text" id="sname" name="sname"
value="<?php echo "$sn"; ?>"/><br>
Email:<br>
<input class="form-control" type="text" id="email" name="email"
value="<?php echo "$em"; ?>"/><br>
Password:<br>
<input class="form-control" type="text" id="pass" name="pass"
value="<?php echo "$pw"; ?>"/><br>
<input class="btn btn-primary" type="submit" id="submit" name="submit"
value="submit"/>
</form>
</div>
</body>
</html>
<?php
}

