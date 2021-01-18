<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "mm3desai";
$dbname = "test1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sds(fname, lname, age, address, pincode)
VALUES('$_POST[fname]', '$_POST[lname]', '$_POST[age]', '$_POST[address]', '$_POST[pincode]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<form action="result.php" method="post">
First Name: <input type="text" name="fname" />
<input type="submit" />
</form>
</body>
</html>