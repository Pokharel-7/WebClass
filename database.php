<?php
$db_server="localhost";
$db_user="root";
$db_password= "";
$db_name = "web";
$conn="";

$conn= mysqli_connect ($db_server, $db_user,$db_password,$db_name);

if($conn)
{
    echo "connection established successfully";
}

    else{
        echo "no connection";

    }

?>


