<html>
<body>
<head>
<title>Maheen Huda, R17CS217</title>
</head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
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

$sql = "SELECT * FROM sds";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1'>
<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Age</th>
	<th>Address</th>
	<th>Pincode</th>
	</tr>"; 
while($row = $result->fetch_assoc()) 
{
	echo "<tr>";
	echo "<td>" . $row['fname'] . "</td>";
	echo "<td>" . $row['lname'] . "</td>";
	echo "<td>" . $row['age'] . "</td>";
	echo "<td>" . $row['address'] . "</td>";
	echo "<td>" . $row['pincode'] . "</td>";
	echo "</tr>";
}
echo "</table>";
} 
else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>

