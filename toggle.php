<?php
include("dbconnect.php");
 if (isset( $_GET['sid']))
{
$sid=$_GET['sid'];
$squery = "select c_id from sub_categories where s_id = '$sid'";
$sresult = mysql_query($squery) or die ("squerry err");
$cidlist = mysql_fetch_array($sresult);
 $cid = $cidlist[0];
 }
 if (isset( $_GET['cid']))
 {
	$cid=$_GET['cid']; 
}
echo "
<div class='one_third lastcolumn sidebar'>
    <section class='first'>
      <h3>Refine your Search</h3>
      <div class='boxtwosep'></div>
	  <ul class='blogList'>";
	  
	$cquery = "select c_name from categories where c_id = '$cid'";
	$cresult = mysql_query($cquery);
	$cname = mysql_fetch_array($cresult);
	$table = $cname[0];

    $colquery = "SELECT column_name
FROM information_schema.columns
WHERE table_name =  '$table'
AND column_name NOT LIKE  '%1'";    

  
    
   
    $colresult = mysql_query($colquery) or die ("colquerry err");
 $colcount = mysql_num_rows($colresult);

if($colcount>0)
{

	$i=0;
	  while( $colrow1 = mysql_fetch_row($colresult))
	  {
		 
	    if($i==0)
    	 {  
		 $fieldname = $colrow1[0];
		 }
		else
         {
	     	$fieldname="$fieldname,$colrow1[0]";
         }
	 $i++;
	 }
	
}
     
	$rquery = "select $fieldname from $table";
	
    $rresult = mysql_query($rquery) or die ("rquerry err");
 $rcount = mysql_num_rows($rresult);

if($rcount>0)
{
   while( $rrow = mysql_fetch_field($rresult))
	  {
		  $fname = $rrow->name;
		  $field = str_replace("_"," ",substr($fname,4));
		  
    echo "<div class=$fname>
	<label for = $fname>
			 $field:
	 </label>"; 

		$fquery = "select distinct $fname from $table";
	
		    $fresult = mysql_query($fquery) or die ("fquerry err");
			
			if(($rrow->type)=="int")
			{?>
				<!--<input type="text" id="maxi"  />
                <br />to <br />-->
                <input type="text" id="max" />
				<input type="button" value="enter" id='<?php echo $fname?>' class="refine_int" />
				
			<?php }
			
			else
			 {while( $frow = mysql_fetch_array($fresult))
			 {?>
				  <br><input type="radio" value='<?php echo $frow[$fname] ?>' id='<?php echo $fname ?>' name='<?php echo $fname?>' class="refine_field" />
		<?php echo "$frow[$fname]";
			}}
				echo "</div>";
	  }//rrow

mysql_free_result($fresult);
}//rcount
	  
	
	 
			 

	echo "</ul>
    </section>
  </div>
  
    <div class='two_thrd'><!-- Blog Comments ==================================================
================================================== -->
   <h2>Ads</h2>
    <section class='comments'>
	  <div id='comments'>

	<!--ad column-->
        <ul id='articleCommentList'>";
 if (isset( $_GET['sid']))
{
  $addetails = "select * from ad_details where s_id='$sid'";
 }
  if (isset( $_GET['cid']))
 {
 $addetails = "select * from ad_details where c_id='$cid'";
 }
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
        </li></ul>
      </div>
    </section>
  </div>
<!--categoriees column-->";



?>
  