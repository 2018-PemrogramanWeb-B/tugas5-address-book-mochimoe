 <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE Tugas5DB";
if ($conn->query($sql) === TRUE) {
    echo "Database Tugas 5 berhasil dibuat";
} else {
    echo "Database Tugas 5 gagal: " . $conn->error;
}

$conn->close();
?> 