<?php
// error reporting
ini_set('display_errors',1); 
 error_reporting(E_ALL);
$host="foo"; // Host name
$username="foo"; // Mysql username
$password="foo"; // Mysql password
$db_name="foo"; // Database name
$tbl_name="members"; // Table name
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1) {
session_start();
$_SESSION['login'] = "1";
header ("Location: http://www.google.com");
}
else {  
session_start();
$_SESSION['login'] = '';
header ("Location: http://www.yahoo.com");
}
?>
<?php
session_start();
if ($_SESSION['login'] == "1") {  
echo "you are logged in";
}
else if ($_SESSION['login'] == "") 
{
echo "you are not logged in";
}
?>
PAGE 1
session start()
if (match_found_in_database()) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username; // $username coming from the form, such as $_POST['username']
                                       // something like this is optional, of course
}
PAGE 2
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}
