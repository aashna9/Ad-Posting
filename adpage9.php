<?php
	  session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"><!-- InstanceBegin template="/Templates/master.dwt" codeOutsideHTMLIsLocked="false" -->
<!--<![endif]-->
<head>

<!-- Basic Page Needs ================================================== 
================================================== -->

<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Proximet Responsive Site Template</title>
<!-- InstanceEndEditable -->
<meta name="description" content="Place to put your description text">
<meta name="author" content="">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Mobile Specific Metas ================================================== 
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS ==================================================
================================================== -->

<link rel="stylesheet" href="extra/proximet/Proximet_free/HTML/css/base.css">
<link rel="stylesheet" href="extra/proximet/Proximet_free/HTML/css/skeleton.css">
<link rel="stylesheet" href="extra/proximet/Proximet_free/HTML/css/screen.css">
<link rel="stylesheet" href="extra/proximet/Proximet_free/HTML/css/prettyPhoto.css" type="text/css" media="screen" />

<!-- Favicons ==================================================
================================================== -->

<link rel="shortcut icon" href="extra/proximet/Proximet_free/HTML/images/favicon.png">
<link rel="apple-touch-icon" href="extra/proximet/Proximet_free/HTML/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="extra/proximet/Proximet_free/HTML/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="extra/proximet/Proximet_free/HTML/images/apple-touch-icon-114x114.png">

<!-- Google Fonts ==================================================
================================================== -->

<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>

<!-- Home - Content Part ==================================================
================================================== -->
<div id="header">
  <div class="container header"> 
    <!-- Header | Logo, Menu
		================================================== -->
    <header>
      <div class="logo"><a href="extra/proximet/Proximet_free/HTML/index.html"><img src="extra/proximet/Proximet_free/HTML/images/logo.png" alt="" /></a></div>
      <div class="mainmenu">
        <div id="mainmenu">
          <ul class="sf-menu">
            <li><a href="index.php" id="visited"><span class="home"><img src="extra/proximet/Proximet_free/HTML/images/home.png" alt="" /></span>Home</a></li>
            <li><a href="account.php"><span class="home"><img src="extra/proximet/Proximet_free/HTML/images/about.png" alt="" /></span>My Account</a></li>
            <li><a href="postadd.php"><span class="home"><img src="extra/proximet/Proximet_free/HTML/images/portfolio.png" alt="" /></span>Post your ad</a>
              <ul>
                <li><a href="extra/proximet/Proximet_free/HTML/gallery.html">Portfolio Gallery</a></li>
              </ul>
            </li>
            <li><a href="extra/proximet/Proximet_free/HTML/blog.html"><span class="home"><img src="extra/proximet/Proximet_free/HTML/images/blog.png" alt="" /></span>Blog</a>
              <ul>
                <li><a href="extra/proximet/Proximet_free/HTML/singleblog.html">Single Post</a></li>
              </ul>
            </li>
            <li><a href="extra/proximet/Proximet_free/HTML/features.html"><span class="home"><img src="extra/proximet/Proximet_free/HTML/images/features.png" alt="" /></span>features</a></li>
            <li><a href="extra/proximet/Proximet_free/HTML/contact.html"><span class="home"><img src="extra/proximet/Proximet_free/HTML/images/contact.png" alt="" /></span>Contact</a></li>
          </ul>
        </div>
        
        <!-- Responsive Menu -->
        
        <form id="responsive-menu" action="#" method="post">
          <select>
            <option value="">Navigation</option>
            <option value="index.html">Home</option>
            <option value="about.html">About</option>
            <option value="portfolio.html">Portfolio</option>
            <option value="gallery.html">Portfolio Gallery</option>
            <option value="blog.html">Blog</option>
            <option value="singleblog.html">Single Post</option>
            <option value="features.html">Features</option>
            <option value="contact.html">Contact</option>
          </select>
        </form>
      </div>
    </header>
  </div>
</div>
<!-- Home Content Part - Slider ==================================================
================================================== -->
<!-- InstanceBeginEditable name="content" -->
<div class="flexslider">
  <ul class="slides">
    <li> <a href="#"><img src="extra/proximet/Proximet_free/HTML/images/flexslider/3.jpg" alt=""/></a></li>
    <li> <img src="extra/proximet/Proximet_free/HTML/images/flexslider/6.jpg" alt="" /></li>
    <li> <a href="#"><img src="extra/proximet/Proximet_free/HTML/images/flexslider/4.jpg" alt="" /></a>
      <p class="flex-caption">Welcome to Proximet Site. This is example of the Caption Title.</p>
    </li>
  </ul>
</div>
<!-- Home Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator"></div>

<?php
$adno=$_GET['ad_no'];
include("dbconnect.php");
 $cidquery = "select c_id from ad_details where ad_no='$adno'";
    $cidresult = mysql_query($cidquery,$link) or die ("cidquery err");
    $cidlist = mysql_fetch_array($cidresult);
    $cid = $cidlist['c_id'];
 $sidquery = "select s_id from ad_details where ad_no='$adno'";
    $sidresult = mysql_query($sidquery,$link) or die ("sidquery err");
    $sidlist = mysql_fetch_array($sidresult);
    $sid = $sidlist['s_id'];
 $cquery = "select c_name from categories where c_id = '$cid'";
	$cresult = mysql_query($cquery,$link) or die ("cidquery err");
	$cname = mysql_fetch_array($cresult);
	$table = $cname['c_name'];
 $addetails = "select * from ad_details a where a.ad_no='$adno' ";

    $detailsresult = mysql_query($addetails) or die ("adquerry err");
    $detailscount = mysql_num_rows($detailsresult);
$adtable = "select * from $table  where ad_no1 ='$adno'";
 
	$tableresult = mysql_query($adtable) or die ("tablequerry err");
    $tablecount = mysql_num_rows($tableresult);
	
	
	$adtable2 = "select * from $table  where ad_no1 ='$adno'";
 
	$tableresult2 = mysql_query($adtable2) or die ("tablequerry2 err");
    $tablecount2 = mysql_num_rows($tableresult2);
	
$nextquery = "SELECT MIN( ad_no ) AS ad_no 
FROM ad_details
WHERE s_id =  '$sid'
AND ad_no >  '$adno'";
    $nextresult = mysql_query($nextquery,$link) or die ("nextquerry err");
    $nextlist = mysql_fetch_array($nextresult);
    $next = $nextlist['ad_no'];

$prevquery = "SELECT MAX( ad_no ) AS ad_no
FROM ad_details
WHERE s_id =  '$sid'
AND ad_no <  '$adno'";
   $prevresult = mysql_query($prevquery,$link) or die ("$prevquerry err");
   $prevlist = mysql_fetch_array($prevresult);
   $prev = $prevlist['ad_no'];


 if($detailscount>0 and $tablecount>0)
  {
	 $frow = mysql_fetch_array($tableresult);


     $adrow = mysql_fetch_array($detailsresult);
	  echo " 
	  
	  <div class='container portfolio'>
<h2>$adrow[ad_title]</h2>";
    if($prev > 0)
       {
		 echo "<p><a href='adpage9.php?ad_no=$prev'>PREVIOUS AD</a></p>"; 
	   }
	if( $next >0)
       {
	     echo "<p><a href='adpage9.php?ad_no=$next'>NEXT AD</a></p>";
	   }
		echo "<div class='on_third'>
    <div class='flexslider'>
      <ul class='slides'>
        <li>
        <section class='boxfour'> <a href='clips/elec7.jpg' class='prettyPhoto[gal]'> <img src='clips/elec7.jpg' width='420' height='242' alt=''/></a> </section>
      </li>
        <li>
        <section class='boxfour'> <a href='clips/elec4.jpg' class='prettyPhoto[gal]'> <img src='clips/elec4.jpg'  width='420' height='242' alt=''/></a> </section>
      </li>
        <li><section class='boxfour'> <a href='images/portfolio/bigsize.jpg' class='prettyPhoto[gal]'> <img src='images/home/1.png' width='420' height='242' alt=''/></a> </section></li>
      </ul>
    </div>
  <div id='pagination' class='fl'> 
    <!-- Pagination -->
    <ul class='pagination'>
      <li class='first-page'><a href='#'>&laquo;</a></li>
      <li><a href='#' >&lsaquo;</a></li>
      <li><a href='#' id='currentPage'>1</a></li>
      <li><a href='portfolio.html'>2</a></li>
      <li><a href='portfolio.html'>3</a></li>
      <li><a href='#'>4</a></li>
      <li><a href='#' >&rsaquo;</a></li>
      <li class='last-page'><a href='#'>&raquo;</a></li>
    </ul>
  </div>
  <!-- end pagination --> 
  
</div>
  <div class='two_third lastcolumn'>
    <h3>AD DETAILS</h3>
	<input name='add_to_watchlist' type='button' value='save_this_ad'>";
	
  while( $fieldrow = mysql_fetch_field($tableresult2))
	 {
		
		
           $field =  $fieldrow->name;
	
		   if(substr($field,-1)==1)		 
		    {
				
			$temp = strrev(substr(strrev(substr($field,4)),1));
			}
			else
			{
			
			$temp = substr($field,4);
			}
			$fname = str_replace("_"," ",$temp);
		
		   if($frow[$field]!='N.A.' and $field!='ad_no1')
	        {echo "<p> $fname:  $frow[$field]</p>";}
	  }
	 
echo "
	$adrow[ad_description]</p>
    
<p class='portfolio'><a href='#'>Project Details</a> | <a href='#'>Visit Website</a></p>
  </div>";}
  ?>

  

  <div class="two_third lastcolumn contact1">
  <section class="comments">
      <div class="blankSeparator"></div>
      <div class="sepContainer2"></div>
        <div id='comments'>
            <?php
$comdetails = "select * from ad_comments where ad_no='$adno'";
 $comresult = mysql_query($comdetails) or die ("comquerry err");
 $comcount = mysql_num_rows($comresult);
 if($comcount>0)
  {
	  echo 
			 "<h2>comment</h2>
      <div class='sepContainer2'></div>
      <div class='blankSeparator'></div>
      <div class='boxtwosep'></div>
        <ul id='articleCommentList'>";
	  while( $comrow = mysql_fetch_array($comresult))
	  { $udetails = "select * from register where u_id ='$comrow[u_id]'";
        $uresult = mysql_query($udetails) or die ("uquerry err");
         $urow = mysql_fetch_array($uresult);
		  $comdesc=$comrow['com_description'];
 		echo "<li>
            <div class='commentMeta'>
			<div class='imag'>";
			echo date('d.m.y',strtotime($comrow['commented_date']));
			echo "
			</div><br>
             </div>
            <!-- end commentMeta -->
<div class='commentBody'>
              <h3><a href='#'>$urow[username]</a></h3>
              <p>$comdesc...</p>
</div>
";
	  }
  }
        echo "
        </li>
        </ul>";
    ?>
    </div>
      <!-- end Comments --> 
      <?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
	 $email = $_SESSION['email'];
   if($email!=$adrow['email'])
    { echo "<div id='contactForm'>
      <h2>Leave a comment</h2>
      <div class='sepContainer'></div>
      <form action='comment.php' method='post' id='comment_form'>
      <input name='ad_no' type='hidden' value='$adno'>
        <div class='message'>
          <label for='message'>Your Comment:</label>
          <p> Please enter your comment</p>
          <textarea id=message name=message rows=6 cols=10></textarea>
        </div>
        <div id='loader'>
         <input type='submit' value='Submit' />
        </div>
      </form>
    </div>";
    }
    }
else
     { echo "<div id='contactForm'>
      <h2>Leave a comment</h2>
      <div class='sepContainer'></div>
      <form action='comment.php' method='post' id='comment_form'>
      <input name='ad_no' type='hidden' value='$adno'>
        <div class='message'>
          <label for='message'>Your Comment:</label>
          <p> Please enter your comment</p>
          <textarea id=message name=message rows=6 cols=10></textarea>
        </div>
        <div id='loader'>
         <input type='submit' value='Submit' />
        </div>
      </form>
    </div>";
    } 
  
   echo"  
   <div id='comments'> 
	<!--related-ad column-->
	<h2>RELATED ADS</h2>";
 $caddetails = "SELECT * FROM ad_details WHERE s_id ='$sid' AND ad_no <> '$adno' and status='active'";
 $cadresult = mysql_query($caddetails) or die ("cadquerry err");
 $cadcount = mysql_num_rows($cadresult);
  if($cadcount>0)
  {echo " <ul id='articleCommentList'>";
	  while( $cadrow = mysql_fetch_array($cadresult))
	  {
		   $cdesc=substr($cadrow['ad_description'],0,155);
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
            echo "</ul>
      </div>";?>
    </section>
  </div>
</div>
<div class="container clients">
  <div class="sepContainer"></div>
  <h2>last viewed</h2>
  <div class="one_sixth"> <img src="images/client1.jpg" alt=""/><div class="atitle">ad_title</div></div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client2.jpg" alt=""/><div class="atitle">ad_title</div> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client3.jpg" alt=""/><div class="atitle">ad_title</div> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client4.jpg" alt=""/><div class="atitle">ad_title</div> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client5.jpg" alt=""/><div class="atitle">ad_title</div> </div>
  <!-- end one_sixth -->
  <div class="one_sixth lastcolumn"> <img src="images/client6.jpg" alt=""/><div class="atitle">ad_title</div> </div>
  <!-- end one_sixth lastCol --> 
</div>




<div class="blankSeparator1"></div>
<!-- InstanceEndEditable --><!--Footer ==================================================
================================================== -->
<div id="footer">
  <div class="container footer">
    <div class="one_fourth">
      <h3>Latest Tweets</h3>
      <div id="tweets"></div>
    </div>
    <div class="one_fourth">
      <h3>Blogroll</h3>
      <ul>
        <li class="lines"><a href="#" title="">Development Blog</a></li>
        <li class="lines"><a href="#" class="">New Freebies</a></li>
        <li class="lines"><a href="#" class="">Themeforest Theme</a></li>
        <li class="lines"><a href="#" class=""> Design News</a></li>
        <li class="lines"><a href="#" class="">WordPress Theme</a></li>
      </ul>
    </div>
    <div class="one_fourth">
      <h3>Archive</h3>
      <ul>
        <li class="lines"><a href="#" class=""> August 2012</a></li>
        <li class="lines"><a href="#" class="">July 2012</a></li>
        <li class="lines"><a href="#" class="">Juny 2012</a></li>
        <li class="lines"><a href="#" class=""> May 2012</a></li>
        <li class="lines"><a href="#" class="">April 2012</a></li>
      </ul>
    </div>
    <div class="one_fourth lastcolumn">
      <h3>About</h3>
      <p>Proximet is responsive, simple and clean template with a lot attention to detail. Get it now!</p>
      <p>Visit <a href="http://anarieldesign.com/" >Anariel Design</a> and find more interesting things.</p>
    </div>
  </div>
  <!-- container ends here --> 
</div>
<!-- footer ends here --> 
<!-- Copyright ==================================================
================================================== -->
<div id="copyright">
  <div class="container">
    <div class="eleven columns alpha">
      <p class="copyright">&copy; Copyright 2012. &quot;Proximet&quot; by <a href="http://www.anarieldesign.com/">Anariel</a>. All rights reserved.</p>
    </div>
    <div class="five columns omega">
      <section class="socials">
        <ul class="socials fr">
          <li><a href="#"><img src="extra/proximet/Proximet_free/HTML/images/socials/twitter.png" class="poshytip" title="Twitter"  alt="" /></a></li>
          <li><a href="#"><img src="extra/proximet/Proximet_free/HTML/images/socials/facebook.png" class="poshytip" title="Facebook" alt="" /></a></li>
          <li><a href="#"><img src="extra/proximet/Proximet_free/HTML/images/socials/google.png" class="poshytip" title="Google" alt="" /></a></li>
          <li><a href="#"><img src="extra/proximet/Proximet_free/HTML/images/socials/dribbble.png" class="poshytip" title="Dribbble" alt="" /></a></li>
        </ul>
      </section>
    </div>
  </div>
  <!-- container ends here --> 
</div>
<!-- copyright ends here --> 
<!-- End Document
================================================== --> 
<!-- Scripts ==================================================
================================================== --> 
<script src="extra/proximet/Proximet_free/HTML/js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<!-- Main js files --> 
<script src="extra/proximet/Proximet_free/HTML/js/screen.js" type="text/javascript"></script> 
<!-- Tooltip --> 
<script src="extra/proximet/Proximet_free/HTML/js/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="extra/proximet/Proximet_free/HTML/js/tabs.js" type="text/javascript"></script> 
<!-- Tweets --> 
<script src="extra/proximet/Proximet_free/HTML/js/jquery.tweetable.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="extra/proximet/Proximet_free/HTML/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="extra/proximet/Proximet_free/HTML/js/superfish.js" type="text/javascript"></script> 
<script src="extra/proximet/Proximet_free/HTML/js/hoverIntent.js" type="text/javascript"></script> 
<!-- Flexslider --> 
<script src="extra/proximet/Proximet_free/HTML/js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script type="text/javascript" src="extra/proximet/Proximet_free/HTML/js/modernizr.custom.29473.js"></script>

</body>
<!-- InstanceEnd --></html>