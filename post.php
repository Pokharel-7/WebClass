<?php
include("database.php");
?>

<html>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Name: <input type="text" name="name">
        Email: <input type="email" name="email">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the values from the form
        $name = $_POST['name'];  // Use 'name' instead of 'NAME'
        $email = $_POST['email'];  // Use 'email' instead of 'PASSWORD'
        
        // Process the form data here (e.g., save to database)
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email);
    }
    ?>
</body>
</html>
