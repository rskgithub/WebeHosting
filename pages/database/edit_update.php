<?php
$databaseName = $_POST['databaseName'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WebeHosting";

// connectie maken
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connectie
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$sql = "UPDATE `database`
        SET databaseName='$databaseName'
        WHERE id = '$id'";


if (mysqli_query($conn, $sql)) {
	header('location: database.php');
} else {
	echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>