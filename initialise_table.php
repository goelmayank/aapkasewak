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

$sql = "INSERT INTO $table_name (parentname, menuname, link, delete_flag) VALUES ('0', 'HOME', 'adminhome.php', 'n');";
$sql .= "INSERT INTO $table_name (parentname, menuname, link, delete_flag) VALUES ('0', 'HOME MANAGER', 'managehomepage1.php', 'n');";
$sql .= "INSERT INTO $table_name (parentname, menuname, link, delete_flag) VALUES ('0', 'PRODUCT MANAGEMENT', 'manageproduct.php', 'n');";
$sql .= "INSERT INTO $table_name (parentname, menuname, link, delete_flag) VALUES ('0', 'CHANGE PASSWORD', 'adminhome.php#', 'n');";
$sql .= "INSERT INTO $table_name (parentname, menuname, link, delete_flag) VALUES ('0', 'MANAGE BANNER', 'adminhome.php#', 'n');";
$sql .= "INSERT INTO $table_name (parentname, menuname, link, delete_flag) VALUES ('0', 'LOGOUT', 'logout.php', 'n');";
$sql .= "INSERT INTO $table_name (parentname, menuname, link, delete_flag) VALUES ('3', 'ADD PRODUCT', 'addproduct.php', 'n');";
$sql .= "INSERT INTO $table_name (parentname, menuname, link, delete_flag) VALUES ('3', 'MANAGE PRODUCT', 'manageproduct.php', 'n')";
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>