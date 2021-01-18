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
  background-color: green;
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

$sql = "SELECT * from books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1'>
<tr>
	<th>Title</th>
	<th>Author</th>
	<th>Publisher</th>
	</tr>"; 
  while($row = $result->fetch_assoc()) 
{
	echo "<tr>";
	echo "<td>" . $row['title'] . "</td>";
	echo "<td>" . $row['author'] . "</td>";
	echo "<td>" . $row['publisher'] . "</td>"; 
	echo "</tr>";   
}
echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
