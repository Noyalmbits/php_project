<?php
$students=["Alice","bob","Charlie","diana","eve"];
echo"orginal array:<br>";
print_r($students);
echo"<br><br>";
asort($students);
echo"array sorted in ascending order:<br>";
print_r($students);
echo"<br><br>";
arsort($students);
echo"array sorted in descending order:<br>";
print_r($students);
?>