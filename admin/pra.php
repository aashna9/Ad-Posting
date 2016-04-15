  <?php
	$link = mysql_connect('localhost','root','') or die("connection err");
	mysql_select_db('ad_posting') or die("database err");
	$cquery = "select c_name from categories where c_id = 'c08'";
	$cresult = mysql_query($cquery);
	$cname = mysql_fetch_array($cresult);
	$table = $cname[0];
	$rquery = "select * from $table where ad_no='02'";
    $rresult = mysql_query($rquery) or die ("rquerry err");
 $rcount = mysql_num_rows($rresult);
  $frow = mysql_fetch_array($rresult);
if($rcount>0)
{$i=0;
   while( $rrow = mysql_fetch_field($rresult) )
	  {
		   $fname = $rrow->name;
		echo "<p> $fname:  $frow[$i]</p>";
	  }
}
	?>