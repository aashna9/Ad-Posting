
<?php
	$cid = $_POST['cid'];
	$link = mysql_connect('localhost','root','') or die("connection err");
	mysql_select_db('ad_posting') or die("database err");
	$cquery = "select c_name from categories where c_id = '$cid'";
	echo $cquery;
	$cresult = mysql_query($cquery);
	$cname = mysql_fetch_array($cresult);
	$table = $cname[0];
	$adquery = "select field_name from form_fields where c_id = '$cid'";
	echo $adquery;
    $adresult = mysql_query($adquery) or die ("adquerry err");
 $adcount = mysql_num_rows($adresult);
if($adcount>0)
{
	echo $adcount;
	$i=0;
	  while( $adrow1 = mysql_fetch_row($adresult))
	  {
	  $fieldrow[$i]=$_POST[$adrow[0]];
	    if($i==0)
    	 {  $fname = $adrow1[0];
	        $value = "'".$fieldrow[$i]."'";
			echo $fieldrow[$i];
		 }
		else
         {
	     	$fname="$fname,$adrow1[0]";
		    $value="$value,'$fieldrow[$i]'";
			echo $fieldrow[$i];
         }
	 $i++;
	 }
	  	echo $fname;
		echo $value;
	 $query = "insert into $table ($fname) values($value)";
	   echo $query;
		$result = mysql_query($query) or die("query err");
	    $rowaffect = mysql_affected_rows();
		echo $rowaffect;
		if($rowaffect>0)
		echo "successfully inserted";
}

?>





