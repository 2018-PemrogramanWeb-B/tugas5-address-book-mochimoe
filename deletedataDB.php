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

// sql to delete a record
$sql = "DELETE FROM addressbook WHERE id=5";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 