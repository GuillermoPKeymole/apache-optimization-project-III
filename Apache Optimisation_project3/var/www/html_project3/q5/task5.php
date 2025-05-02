<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connection variables
$servername = "server07";  
$username = "root";        
$password = "alma";        
$dbname = "company";     

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

// Display data
if ($result->num_rows > 0) {
    echo "<h2>Employees List</h2><table border='1'><tr><th>Name</th><th>Salary</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["name"]) . "</td><td>$" . htmlspecialchars($row["salary"]) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

