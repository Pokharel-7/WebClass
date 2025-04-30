<?php

include("database.php");
$id_deletion = 3;

$sql = "DELETE FROM rejina WHERE id = '$id_deletion'";
try {
    mysqli_query($conn, $sql);
    echo "User deleted successfully.";
} 
catch (mysqli_sql_exception $e) {
    echo "Could not delete: " . $e->getMessage();
}


mysqli_close($conn);
?> 