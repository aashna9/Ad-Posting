
<?php
if (isset($_POST['data']))
{
$cid = $_POST['data'];

include("dbconnect.php");
$squery = "select * from sub_categories where c_id = '$cid'";
echo "   <label for='subcategory'>subcategory:</label><select name='sid' id='sid'>";
	$snameresult=mysql_query($squery,$link) or die ("query error");
	    while($snamefetch=mysql_fetch_array($snameresult))
		{
		 echo "<option value='$snamefetch[s_id]'>$snamefetch[s_name]</option>";
		}
      echo"
           </select>";
}
?>