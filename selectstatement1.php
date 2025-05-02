
<?php
include "database.php";
$sql = "SELECT * FROM rejina WHERE Name = 'rejina'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id :".$row["id"]."-NAME :".$row["Name"]. "<br>";




    }
}
else{
    echo "results";

}
mysqli_close($conn);



?>

