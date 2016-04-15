
<?php
include("dbconnect.php");

 if (isset( $_GET['fname']))
{ 
$field = $_GET['fname'];
echo $field;
	if(isset($_POST['field']))
	 {$value = $_POST['field'];
     echo $value;
	 }
    elseif(isset($_GET['max']) and isset($_POST['min']))
     {
		$max = $_GET['max'];
		$min = $_POST['min'];
	 echo $max;
	 echo $min;
	 }



/*if(substr($field,0,5)=="")*/



echo "<ul id='articleCommentList'>";
$tbl = "select c_name from categories where c_id in (select c_id from form_fields where field_name = '$field')";

$tblresult = mysql_query($tbl) or die ("tblquerry err");
$tblrow = mysql_fetch_array($tblresult); 
 $table = $tblrow[0];

$addetails = "select * from ad_details where ad_no in (select ad_no1 from $table where $field = '$value' )";

 $adresult = mysql_query($addetails) or die ("adquerry err");
 $adcount = mysql_num_rows($adresult);
 if($adcount>0)
  {
	  while( $adrow = mysql_fetch_array($adresult))
	  {
		  $desc=substr($adrow['ad_description'],0,155);
 		echo "
          <li>
            <div class='commentMeta'>
			<div class='imag'>
			<img  src='clips/clok4.jpg' height='25px' width='25px'>";
			echo date('d.m.y',strtotime($adrow['posted_date']));
			echo "
			</div><br>
             <div class='adimg'> <img src='$adrow[ad_image]'/></div></div>
            <!-- end commentMeta -->
<div class='commentBody'>
              <h3><a href='#'>$adrow[ad_title]</a></h3>
              <p>$desc...</p>
  <a href='adpage9.php?ad_no=$adrow[ad_no]' class='buttonhome fl'> more<span>+</span></a>
</div>
";
	  }
  }

        echo "
        </li></ul>";
  
}

?>
