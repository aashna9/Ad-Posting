
<?php
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['mail'];
	$password=$_POST['pass'];
	$contact=$_POST['no'];
include("dbconnect.php");
	$query = "insert into register values('$fname','$lname','$email','$password','$contact')";
	$result = mysql_query($query) or die("query err");
	$rowaffect = mysql_affected_rows();
	if($rowaffect>0)
	{
		echo "your registration has been successfully done
        <input name='back' type='button' value='home page'><a href='index.php'></a></input>";
	}
?>
