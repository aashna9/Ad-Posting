
<?php
	$name=$_POST['fname'];
	$username=$_POST['uname'];
	$email=$_POST['mail'];
	$password=$_POST['pass'];
	$contact=$_POST['no'];
	$website=$_POST['website'];
	$user=$_POST['user_type'];
	$link = mysql_connect('localhost','root','') or die("connection err");
	mysql_select_db('ad_posting') or die("database err");
	$query = "insert into register values('$name','$username','$email','$password','$contact','$website','$user')";
	$result = mysql_query($query) or die("query err");
	$rowaffect = mysql_affected_rows();
	if($rowaffect>0)
	{
		echo "your registration has been successfully done
        <input name='back' type='button' value='home page'><a href='index1.php'></a></input>";
	}
?>
