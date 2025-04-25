<?php
$name ="BCA Students";

function sayHello(){
    GLOBAL $name;
    echo "hello" . $name;
}
sayHello();
?>