<?php
include("dbconnect.php");
if(isset($_POST['sort']))
{
	$sort = $_POST['sort'];
$query = "select * from ad_details $sort ";
$result=mysql_query($query) or die ("query error");	
	  $count = mysql_num_rows($result);
 if($count>0)
  {
	  while( $row = mysql_fetch_array($result))
	  {
		  $desc=substr($row['ad_description'],0,155);
 		echo "
          <li>
            <div class='commentMeta'>
			<div class='imag'>
			<img  src='clips/clok4.jpg' height='25px' width='25px'>";
			echo date('d.m.y',strtotime($row['posted_date']));
			echo "
			</div><br>
             <div class='adimg'> <img src='$row[ad_image]'/></div></div>
            <!-- end commentMeta -->
<div class='commentBody'>
              <h3><a href='#'>$row[ad_title]</a></h3>
              <p>$desc...</p>
  <a href='adpage9.php?ad_no=$row[ad_no]' class='buttonhome fl'> more<span>+</span></a>
</div>
";
	  }
  }
}

?>