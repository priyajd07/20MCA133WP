<?php
$con=mysqli_connect("localhost","root","","college");
if(!$con)
{
	echo "connection failed.!";
}

$result=$con->query("select * from students");
if($result==false)
{
	echo "query failed.!";
}
else
{
	echo "<h1><u> PHP - Database Connection </u></h1>";
	while($row=$result->fetch_object())
	{
		echo "<h2>".$row->studname." , ".$row->email." , ".$row->dob."</h2>";
	}
}
?>