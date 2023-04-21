<?php
$conn = new mysqli("localhost", "root", "", "user");

$name = $_POST["name"];
$email = $_POST["email"];

echo "$name"."<br>";
echo "$email";



// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the database
$sql = "SELECT * FROM table_name";
$result = mysqli_query($conn, $sql);

// Display data in a table format
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

foreach(mysqli_fetch_all($result) as $row) {
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
}

echo "</table>";

// Close the database connection
mysqli_close($conn);


?>