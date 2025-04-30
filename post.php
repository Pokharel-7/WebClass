<?php 
include("database.php");
?>


<html>
    <head>
        <title>Fakebook</title>
    </head>
    <body>
        <form action="" method="post">
            <h1>Welcome</h1>
            Username: <input type="text" name="username">
            <br>
            Password: <input type="password" name="password">
            <br>
            <input type="submit" value="Submit">
        </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        echo "Please enter a username.";
    } else if (empty($password)) {
        echo "Please enter a password.";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user, password) VALUES('$username', '$hash')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
?>
    </body>
</html>