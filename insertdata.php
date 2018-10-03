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
$sql = "INSERT INTO addressbook (Telpon, Nama, Email) VALUES ('08234657997','Bintang Nuralamsyah','bin@gmm.com')";
$sql =	"INSERT INTO addressbook (Telpon, Nama, Email) VALUES ('0823477997','Lala Nuralamsyah','33in@gmm.com')";

if ($conn->query($sql) === TRUE) {
    echo "Table AdressBook sukses memasukkan data";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
</body>
</html>