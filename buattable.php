<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Tugas5DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE AddressBook (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Telpon VARCHAR(15) NOT NULL,
Nama VARCHAR(30) NOT NULL,
Email VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel AddressBook berhasil dibuat";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
</body>
</html>