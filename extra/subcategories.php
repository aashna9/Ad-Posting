
<html>
<head>
<title>subcategories</title>
</head>

<body>

<form method="GET" name="frm2" action="subcategories.php">
     <div id="dynamicInput">
          subcategory name<br><input type="text" name="sname"><br>
          
       
           category name<br>
     
           <select name="cid">
       <?php
		$link = mysql_connect('localhost','root','') or die("connection error");	
	    mysql_select_db('ad_posting') or die("database error");
	   	$query="select * from categories";
		$cnameresult=mysql_query($query,$link) or die ("query error");
	    while($cnamefetch=mysql_fetch_array($cnameresult))
		{
		 echo "<option value='$cnamefetch[c_id]'>$cnamefetch[c_name]</option>";	
		}
	   ?>
           </select>
     </div>
     <input type="submit" name="submit" value="submit" />
</form>
<?php
if(isset($_GET['submit']))
{
	$idname = 's_id';
	$tablename = 'sub_categories';
	include ('autoid.inc');
	$sname=$_GET['sname'];
	$sid= autoid($idname,$tablename);
    $cid=$_GET['cid'];
	$link = mysql_connect('localhost','root','') or die("connection error");	
	mysql_select_db('ad_posting') or die("database error");
	$query="insert into sub_categories(s_name , s_id , c_id) values('$sname','$sid','$cid')";
	$result = mysql_query($query,$link) or die ("query error");
	$rowaffect = mysql_affected_rows();
	echo "affected rows:".$rowaffect;
	
}

?>
</body>

</html>