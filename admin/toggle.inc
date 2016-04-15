<?php

echo "
	<!--ad column-->
        <ul id='articleCommentList'>";
 if (isset( $_POST['sid']))
{
$sid=$_POST['sid'];
  $addetails = "select * from ad_details where s_id='$sid'";
 }
 else
 {$addetails = "select * from ad_details where c_id='$cid'";}
 $adresult = mysql_query($addetails) or die ("adquerry err");
 $adcount = mysql_num_rows($adresult);
 echo $adcount;
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
?>
   