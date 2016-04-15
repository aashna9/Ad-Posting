
<html>
<head>
<title>categories</title>
</head>

<body>

<form method="GET" name="frm1" action="categories.php">
     <div id="dynamicInput">
          category name<br><input type="text" name="cname"><br>
          
          
     </div>
     <input type="submit" name="submit" value="submit" />
</form>
<?php
if(isset($_GET['submit']))
{
	$idname='c_id';
	$tablename='categories';
	function autoid($idname,$tablename)
{ 
	$max=0;
	   	$link = mysql_connect('localhost','root','') or die("connection error");	
	mysql_select_db('ad_posting') or die("database error");
		$querysid="select $idname from $tablename" ;
		$resultsid=mysql_query($querysid)or die("query error in function autoid");
	if(mysql_num_rows($resultsid))
	{
		while($fetch=mysql_fetch_array($resultsid))
		{
			$data= $fetch[$idname];
			$res=substr($data,1);
			$res=intval($res);
			if($max<$res)
			{
				$max=$res;
			}
		}
		$max=$max+1;
		$res1=substr($data,0,1);
		$resu=$res1.$max;
		return $resu;
		
	}
}
	$cname=$_GET['cname'];
	$cid= autoid($idname,$tablename);
	$link = mysql_connect('localhost','root','') or die("connection error");	
	mysql_select_db('ad_posting') or die("database error");
	$query="insert into categories values('$cname','$cid')";
	$result = mysql_query($query,$link) or die ("query error");
	$rowaffect = mysql_affected_rows();
	echo "affected rows:".$rowaffect;
	
}

?>
</body>

</html>