<?php
$db=mysql_connect("localhost","root","") or die("cant connect");
$dbh=mysql_select_db("booking",$db);
echo "Entered Successfully!";
$a=$_POST["src"];
$b=$_POST["des"];
$c=$_POST["type"];
$d=$_POST["date"];
$e=$_POST["email"];
$sql=mysql_query("insert into bus_reservation values('$a','$b','$c','$d','$e')");

?>