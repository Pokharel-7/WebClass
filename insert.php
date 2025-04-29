<?php
include("database.php");

$username = "Sampada";
$password = "12345";

$sql = "INSERT INTO rejina (Name, passwords) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Data insertion done";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
