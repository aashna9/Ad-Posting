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

<script type="text/javascript" src="js.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		$(".refine_field").click(function () {
			$(".comments").html('Retrieving...');
			var field = $(this).val();
			var fname = $(this).attr("id");
			$.ajax({
				type: "POST",
				data:  "field="+field,
				url: "refine.php?fname="+fname,
				success: function(msg){
					$(".comments").html(msg)
				}
			});
		});	   
	});
		$(document).ready(function(){
		$(".refine_int").click(function () {
			$(".comments").html('Retrieving...');
			/*var maximum = $("#maxi").val();
			alert(maximum);*/
			var mininmum = $("#max").val();
			alert(minimum);
			var fname = $(this).attr("id");
			alert(fname);
			$.ajax({
				type: "POST",
				data:  "min="+minimum,
				url: "refine.php?fname="+fname+"&?max="+maximum,
				success: function(msg){
					$(".comments").html(msg)
				}
			});
		});	   
	});
	$(document).ready(function(){
		$(".search_obj").click(function () {
				$(".comments").html('Retrieving...');
				var search_obj = $("#search_txt").val();
			$.ajax({
				type: "POST",
				data: "search="+search_obj,
				url: "searchdb.php",
				success: function(msg){
					$(".comments").html(msg)
				}
			});
		});	   
	});
	
		$(document).ready(function(){
		$(".sort").click(function () {
				$(".comments").html('Retrieving...');
				var sort_comm = $(this).val();
			$.ajax({
				type: "POST",
				data: "sort="+sort_comm,
				url: "sort.php",
				success: function(msg){
					$(".comments").html(msg)
				}
			});
		});	   
	});
	
</script>






<?php
include("dbconnect.php");
if (isset( $_GET['cid']))
{

$cid=$_GET['cid'];

}
echo "<div class='container singleblog'>
<div id='refine'>";

	 include("toggle.php");
	echo "</div>";
	?>

  <div class='one_seventh lastcolumn sidebar'>
    <section class='first'>
     <label for='search_txt'>SEARCH</label>
<input type='text' name='search_txt'  id='search_txt'/>
<div class='search_obj'>
<img src="clips/right.jpg" height="10" width="10">
</div>
<label for='sort by'>SORT BY</label>
<select name="sort" class="sort">
<option value="">--select--</option>
<option value="order by price asc" >price:low to high</option>
<option value="order by price desc" >price:high to low</option>
<option value="order by posted_date desc" >latest ads </option>
</select>
 <h2>CATEGORIES</h2>
 <?php $query = "select * from categories";
 $result = mysql_query($query) or die ("querry err");
 $rowcount = mysql_num_rows($result);
 if($rowcount>0)
  {
	  while( $row = mysql_fetch_array($result))
	  {
	 		
	 		echo "<div class='toggle-trigger' id='$row[c_id]'>".ucwords(strtolower(str_replace("_"," ",$row['c_name'])))."</div>
    		<div class='toggle-container' >
     		<p>";
	  		$subquery = "select * from sub_categories where c_id in (select c_id from categories where c_name='$row[c_name]')";
	 		$subresult =  mysql_query($subquery) or die ("subquerry err");
	  $subrowcount = mysql_num_rows($subresult);
	   		if($subrowcount>0)
  		{
				echo"<ul>";
	 	 while( $subrow = mysql_fetch_array($subresult))
	  		{
	  			echo "<li id='$subrow[s_id]'><a href='#'>".ucwords(strtolower($subrow['s_name']))."</a></li>";
 	  		}
				echo "</ul>";
		}
 		echo "</p></div>";
		}
}
	
    echo "</section>
   
  </div>

</div>";
?>
<!-- container ends here -->

<div class="blankSeparator2"></div>
</div>
<!-- one-third column ends here -->
<!-- container ends here -->
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
