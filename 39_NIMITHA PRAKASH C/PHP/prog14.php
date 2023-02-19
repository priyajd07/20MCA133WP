<?php
$students=array("pra"=>"pranav","sha"=>"shaheen","mid"=>"midun","fala"=>"falahu","mush"=>"mushfique");
echo"<h1>PHP - Students Names Sorting </h1>";
echo "<h2>";
print_r($students);
echo "<br><br>";
echo "The Array sorted using asort : <br>";
asort($students);
print_r($students);
echo "<br><br>";
echo "The Array sorted using arsort : <br>";
arsort($students);
print_r($students);
echo "</h2>";
?>