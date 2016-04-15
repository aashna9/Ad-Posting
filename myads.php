<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Untitled Document</title>
</head>

<body>
<?php
include("dbconnect.php");

 if (isset( $_POST['email']))
{
	$email=$_POST['email'];
	$addetails = "select * from (ad_details natural join sub_categories) natural join categories where s_id in (select s_id from ad_details where email = '$email') and c_id in (select c_id from ad_details where email = '$email') and ad_details.email='$email' ";
	
 $adresult = mysql_query($addetails) or die ("adquerry err");
 $adcount = mysql_num_rows($adresult);
 $c = 0;
 if($adcount>0)
  {
	  while( $adrow = mysql_fetch_array($adresult))
	  {?>
    <div class="adtable">
	<table width="920" height="195" border="2">
	<tr>
    <th width="695" height="35">AD <?php echo ++$c ?></th>
    <th width="115">VIEWS</th>
    <th width="93">RESPONSES</th>
    </tr> 
    <tr>
    <td height="30">AD TITLE:<?php echo $adrow[ad_title]?></td>
	<td><?php echo $adrow[views] ?></td>
	<td><?php echo $adrow[responses] ?></td>
    </tr>
    <tr>
    <td height="30">DATE:
	<?php echo date('d.m.y',strtotime($adrow['posted_date']));
	echo "|STATUS:$adrow[status]";?> </td>
    </tr>
    <tr>
    <td height='30'>PHOTOS: new, Approved</td>
    </tr>
    <tr>
    <td height='20'><?php echo $adrow[c_name].">>".$adrow[s_name].">>".$adrow[city] ?></td></tr>
    </tr>
    <tr>
    <td><a href='adpage9.php?ad_no=<?php echo $adrow[ad_no]?>'>VIEW </a>|<a href='delete.php'>DELETE</a></td>
    </tr>
    </table></div>
    <?php }
}
}
?>




</body>
</html>