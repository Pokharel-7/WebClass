<?php
include("database.php");

$new_username = "nepal";  
$new_password = "lagrandee"; 

$sql = "UPDATE rejina
        SET passwords = '$new_password', name = '$new_username'
        WHERE id = '18'";

try {
    mysqli_query($conn, $sql);
    echo "User password updated successfully.";
} 
catch (mysqli_sql_exception $e) {
    echo "Could not update: " . $e->getMessage();
}

mysqli_close($conn);
?>
