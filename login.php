
<?php
	$email=$_POST['mail'];
	$password=$_POST['pass'];
    include("dbconnect.php");
	$query = "select * from register where email='$email' and password='$password'";
	$result = mysql_query($query) or die("query err");
	$rowcount=mysql_num_rows($result);
	while($row = mysql_fetch_array($result))
	{
		echo"successfully loggedd";
	session_start();
	$_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
	print'<meta http-equiv="refresh" content="0;account.php">';
	}
?>