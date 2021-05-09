<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>ID</th>
<th>First name</th>
<th>Last Name</th>
<th>Email</th>
</tr>
<?php
$conn = mysqli_connect("remotemysql.com", "ZH3ESfMgtz", "OXLzZ9vKnG", "ZH3ESfMgtz");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, fname, lname,email FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fname"] . "</td><td>"
. $row["lname"]. "</td><td>". $row["email"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

<button style="background-color:green;color:white;width:100px;
height:30px;" onclick="window.location.href='index.php'">GO BACK</button>

</table>
</body>
</html>
