<?php
$string = "Hello Charlie. I am also Charlie";
$token = strtok($string, " ");

while ($token !== false)
{
echo "$token<br>";
$token = strtok(" ");
}
?>