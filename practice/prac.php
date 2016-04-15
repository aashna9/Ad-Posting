<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("dbconnect.php");
 $addetails="SELECT COUNT(c_id) FROM ad_details where c_id='c01'";

 $adresult = mysql_query($addetails,$link) or die ("adquerry err");
	while($row = mysql_fetch_array($adresult))
	{
	    echo "There h are". $row['COUNT(c_id)'] ;
	}
?>	
</body>
</html>
