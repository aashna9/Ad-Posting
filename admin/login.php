
   
<?php
	$username=$_POST['uname'];
	$password=$_POST['pass'];
    include("dbconnect.php");
	$query = "select * from admin where username='$username' and password='$password'";
	$result = mysql_query($query) or die("query err");
	$rowcount=mysql_num_rows($result);
	while($row = mysql_fetch_array($result))
	{
		echo"successfully loggedd";
	session_start();
	$_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
	$_SESSION['uid'] = $row['u_id'];
	print'<meta http-equiv="refresh" content="0;index1.php">';
	}
?>
   