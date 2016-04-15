<?php 
function autoid($idname,$tablename)
{ 
	$max=0;
	   	$link = mysql_connect('localhost','root','') or die("connection error");	
	mysql_select_db('dbms') or die("database error");
		$querysid="select $idname from $tablename" ;
		$resultsid=mysql_query($querysid)or die("query error in function autoid");
	if(mysql_num_rows($resultsid))
	{
		while($fetch=mysql_fetch_array($resultsid))
		{
			$data= $fetch[$idname];
			$res=intval($data);
			if($max<$res)
			{
				$max=$res;
			}
		}
		$max=$max+1;

		return $max;
		
	}
}
?>