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

$sql = "SELECT id, Telpon, Nama, Email FROM addressbook";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Telpon: " . $row["Telpon"]. "- Nama Kontak " . $row["Nama"]. "- Email" . $row["Email"]. "<br>" ;
    }
} else {
    echo "0 results";
}
$conn->close();
?> 