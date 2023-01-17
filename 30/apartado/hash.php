<?php

$original = "Jose Vicente";
$hash1 = sha1($original);
$hash2 = sha1($original);

echo "El primer picadillo es:<br>";
echo $hash1."<br>";
echo "El segundo picadillo es:<br>";
echo $hash2."<br>";

?>