<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("dbconnect.php");
 if (isset( $_POST['uid']))
{
	$email=$_POST['email'];
 $caddetails = "SELECT * FROM ad_details WHERE ad_no in (select ad_no from watchlist where email ='$email')";
 $cadresult = mysql_query($caddetails) or die ("cadquerry err");
 $cadcount = mysql_num_rows($cadresult);
 if($cadcount>0)
  {echo " <ul id='articleCommentList'>";
	  while( $cadrow = mysql_fetch_array($cadresult))
	  {
		   $cdesc=substr($cadrow['ad_description'],0,220);
 		echo "
          <li>
            <div class='commentMeta'>
			<div class='imag'>
			<img  src='clips/clok4.jpg' height='25px' width='25px'>";
			echo date('d.m.y',strtotime($cadrow['posted_date']));
			echo "</div><br>
             <div class='adimg'> <img src='$cadrow[ad_image]'/></div></div>
            <!-- end commentMeta -->
<div class='commentBody'>
              <h3><a href='#'>$cadrow[ad_title]</a></h3>
              <p>$cdesc...</p>
  <a href='adpage9.php?ad_no=$cadrow[ad_no]' class='buttonhome fl'> more<span>+</span></a>
</div></li>
";
	  }
  }
            echo "</ul>";
}
?>
</body>
</html>