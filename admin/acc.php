<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) ;
else
 {	
 
	header ("location:signin.php");
    echo "Please log in first to see this page.";
}
 echo "<h3>Welcome </h3>" . $_SESSION['username'] . "!";
 $uname =$_SESSION['username'];
 $uid = $_SESSION['uid'];
 echo $uid;
  $link = mysql_connect('localhost','root','') or die ("connection error");
 mysql_select_db('ad_posting') or die ("db err");
 $addetails = "select s_name , c_name from sub_categories s, categories c, ad_details a where s.s_id=a.s_id , c.c_id=a.c_id , a.u_id='$uid'";
 $adresult = mysql_query($addetails) or die ("adquerry err");
 $adcount = mysql_num_rows($adresult);
 if($adcount>0)
  {
	  while( $adrow = mysql_fetch_array($adresult))
	  {echo $adcount;}
  }
 else
  {
	 echo "wrong";  
  }
?>
