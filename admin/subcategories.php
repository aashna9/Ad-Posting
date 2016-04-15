
<?php
if(isset($_GET['submit']))
{
	$idname = "s_id";
	$tablename = "sub_categories" ;
	include ('autoid.inc');
	$sname=$_GET['s_name'];
	$sid= autoid($idname,$tablename);
    $cid=$_GET['cid'];
	$link = mysql_connect('localhost','root','') or die("connection error");	
	mysql_select_db('ad_posting') or die("database error");
	$query="insert into sub_categories(s_name , s_id , c_id) values('$sname','$sid','$cid')";
	$result = mysql_query($query,$link) or die ("query error");
	$rowaffect = mysql_affected_rows();	
}

?>