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
include("resize-class.php");
	$cid = $_POST['cid'];
	$sid = $_POST['sid'];
	$ad_no = $_POST['ad_no'];
	include("dbconnect.php");
	$cquery = "select c_name from categories where c_id = '$cid'";
	$cresult = mysql_query($cquery);
	$cname = mysql_fetch_array($cresult);
	$table = $cname[0];
	$adquery = "select field_name from form_fields where c_id = '$cid'";
    $adresult = mysql_query($adquery) or die ("adquerry err");
 $adcount = mysql_num_rows($adresult);
if($adcount>0)
{
	$i=0;
	
	$x = 0;
	
  while( $adrow = mysql_fetch_row($adresult))
   {

	  if(substr($adrow[0],2,1)=='c')
	 { 
			
           $x = 1;		
	       $c = $_POST[$adrow[0]];
	       $cval = "'".implode(',',$c)."'";
		   $check = $adrow[0];	
	     
	}
	 
	 else
	{
			 
	  $fieldrow[$i]=$_POST[$adrow[0]];
	  
	  if($fieldrow[$i]=="")
	  {
		$fieldrow[$i]="N.A.";
	  }
	  if($i==0)
      {  $fname = $adrow[0];
	        $value = "'".$fieldrow[$i]."'";
	  }
	  else
      {
	     	$fname="$fname,$adrow[0]";
		    $value="$value,'$fieldrow[$i]'";
      }
	 $i++;
	}
   }//whille
	 
	 	   if($x)
	   {
		   
		   $fname = "$check,$fname";
		   $value="$cval,$value";
	   }
 
	 
	 $query = "insert into $table($fname,ad_no1) values($value,'$ad_no')";

		$result = mysql_query($query) or die("query err");
	    $rowaffect = mysql_affected_rows();
}//if adcount
    $adtitle=$_POST['adtitle'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $message=$_POST['message'];
	 $email=$_POST['email'];
	$con=$_POST['no'];
	$website=$_POST['website'];
	$aquery = "insert into ad_details(ad_no,city,state,ad_title,ad_description,website,email,contact,c_id,s_id) values('$ad_no','$city','$state','$adtitle','$message','$website','$email','$con','$cid','$sid')";
	
	$aresult = mysql_query($aquery) or die("aquery err");
	$arowaffect = mysql_affected_rows();
		
		
		
		


		

	
	// Single file
	$tmp_name = $_FILES["file"]["tmp_name"];
	$name = $_FILES["file"]["name"];
	$ext = substr(strrchr($name, '.'), 1);
	include("autoid.php");
$img_id= autoid("img_id","ad_images");
$name = $img_id.".".$ext;

	switch(strtolower($ext)) {
		case 'jpg':	
		case 'jpeg':
		case 'png':
		case 'gif':
		case 'png':
		case 'doc':
		case 'txt':
			move_uploaded_file($tmp_name,"upload/$name");
		break;
	}

$imgquery = "insert into ad_images(path,ad_no,img_id) values('upload/$name','$ad_no','$img_id')";
$imgresult = mysql_query($imgquery) or die("imgquery err");
$imgrowaffect = mysql_affected_rows();

	
	
if($arowaffect>0)
{
	echo "<div class='container portfolio'>
	<p>your ad will be uploaded shortly!!</p>
		       <p><h2>PREVIEW YOUR AD</p>
		<div class='container portfolio'>
		<h2>$adtitle</h2>
		  <div class='on_third'>
    <div class='flexslider'>
      <ul class='slides'>
        <li>
        <section class='boxfour'> <a href='upload/$name' class='prettyPhoto[gal]'> <img src='upload/$name' width='420' height='242' alt=''/></a> </section>
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
		
		
		
      </li>
    </div>
 
  <!-- end pagination --> 
  
</div>
		
		<div class='two_third lastcolumn'>
    <h3>AD DETAILS</h3>";
	
 if($rowaffect>0)
 {
	$pquery = "select field_name from form_fields where c_id = '$cid'";
    $presult = mysql_query($pquery) or die ("adquerry err");
    $pcount = mysql_num_rows($presult);
    if($pcount>0)
    {
      while( $prow = mysql_fetch_row($presult))
      {
	     $field = $prow[0];
		 $values =$_POST[$field];
		   if(substr($field,-1)==1)		 
		    {
			$temp = strrev(substr(strrev(substr($field,2)),1));
			}
			else
			{
			$temp = substr($field,2);
			}
			$fname = str_replace("_"," ",$temp);
		   if($values!="" and $field!='ad_no1')
		echo "<p> $fname:  $values</p>";
	  }//while
	}//pcount
	echo "
	$message</p>
<p class='portfolio'><a href='#'>Project Details</a> | <a href='#'>Visit Website</a></p>
  </div>";
  
}
		echo "</div>";
  ?>
 <section class="comments">
  
  <div class="two_third lastcolumn contact1">
 
      <div class="blankSeparator"></div>
      <div class="sepContainer2"></div>
        <div id='comments'>
         <div id="contactForm">
      <h2>Leave a comment</h2>
      <div class="sepContainer"></div>
      <form action="#" method="post" id="comment_form">
        <div class="message">
          <label for="message">Your Comment:</label>
          <p> Please enter your comment</p>
          <textarea id=message name=message rows=6 cols=10></textarea>
        </div>
        <div id="loader">
         <input type="submit" value="Submit" />
        </div>
      </form>
    </div>
</div>
</div>
</section>
</div>
<form action="multiple.php" method="post" id="comment_form">
<?php
echo "<input name='ad_no' type='hidden' value='$ad_no'>";
?>
<input type="submit" value="add more photos" />
</form>
<?php
}
?>

	








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