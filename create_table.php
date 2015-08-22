<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aapkasewak";
$table_name="navigation";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE $table_name (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
parentname VARCHAR(50) NOT NULL,
menuname VARCHAR(50) NOT NULL,
link VARCHAR(50) NOT NULL,
delete_flag ENUM('y', 'n'),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table $table_name created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>