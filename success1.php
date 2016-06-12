<?php
$db=mysql_connect("localhost","root","") or die("cant connect");
$dbh=mysql_select_db("booking",$db);
echo "Entered Successfully!";
$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["htype"];
$d=$_POST["rtype"];
$e=$_POST["per"];
$f=$_POST["num"];
$g=$_POST["datein"];
$h=$_POST["dateout"];
$i=$_POST["email"];
$sql=mysql_query("insert into hotel_reservation values('$a','$b','$c','$d','$e','$f','$g','$h','$i')");

?>