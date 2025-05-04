<?php 
$file =fopen("abc.txt",'r');
//$content = fread ($file,filesize("abc.txt"));

echo fgetc($file);
echo fgets($file);

//echo $content;
//fclose($file);
?>
