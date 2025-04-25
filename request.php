<html>
<body>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //checks if the form was submitted using POST METHOD.
  
  $name = $_REQUEST['fname'];  //Retrieves the value of the input field named "fname" using the $_REQUEST superglobal array.
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
 
</body>
</html>