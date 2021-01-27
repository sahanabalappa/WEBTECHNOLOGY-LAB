<?php
    $con=mysqli_connect("localhost","root","","student")or die("can't connect".mysqli_error());
	$res=mysqli_query($con,"select * from studentinfo");
	echo"***********Before Sorting***********<br/><br/>";
	echo"<table border=1><tr><th>USN</th><th>Name</th><th>Address</th></tr>";
	
	$a=array();
	while($row=mysqli_fetch_row($res))
	{
		echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
		array_push($a,$row[0]);
		
	}
	echo "</table><br/>";
	
	$n=count($a);
	for($i=0;$i<($n-1);$i++)
	{
		$pos=$i;
		for($j=$i+1;$j<$n;$j++)
		{
		    if($a[$pos]>$a[$j])
			$pos=$j;
		}
		if($pos != $i)
		{
			$temp=$a[$i];
			$a[$i]=$a[$pos];
			$a[$pos]=$temp;
		}
	}
	echo "************After Sorting**********<br/><br/>";
	echo"<table border=1><tr><th>USN</th><th>Name</th><th>Address</th></tr>";
	for($i=0;$i<$n;$i++)
	{
		$res=mysqli_query($con,"select * from studentinfo where usn='$a[$i]'");
		$row=mysqli_fetch_row($res);
		
		echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
	}
?>



database commands:

mysql -u root
create database citstudents
use citstudents;
create table citstudentinfo(usn varchar(10),name varchar(20),address varchar(30));
insert into citstudentinfo values("18cs97","abc","delhi");
