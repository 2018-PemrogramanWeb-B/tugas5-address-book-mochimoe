 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugas5db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE addressbook SET Nama='Aisyah Tria' WHERE id=6";

if ($conn->query($sql) === TRUE) {
    echo "Data di update";
} else {
    echo "Error update data: " . $conn->error;
}

$conn->close();
?> 
