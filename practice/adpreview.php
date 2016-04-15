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

<link rel="stylesheet" href="../extra/proximet/Proximet_free/HTML/css/base.css">
<link rel="stylesheet" href="../extra/proximet/Proximet_free/HTML/css/skeleton.css">
<link rel="stylesheet" href="../extra/proximet/Proximet_free/HTML/css/screen.css">
<link rel="stylesheet" href="../extra/proximet/Proximet_free/HTML/css/prettyPhoto.css" type="text/css" media="screen" />

<!-- Favicons ==================================================
================================================== -->

<link rel="shortcut icon" href="../extra/proximet/Proximet_free/HTML/images/favicon.png">
<link rel="apple-touch-icon" href="../extra/proximet/Proximet_free/HTML/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../extra/proximet/Proximet_free/HTML/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../extra/proximet/Proximet_free/HTML/images/apple-touch-icon-114x114.png">

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
      <div class="logo"><a href="../extra/proximet/Proximet_free/HTML/index.html"><img src="../extra/proximet/Proximet_free/HTML/images/logo.png" alt="" /></a></div>
      <div class="mainmenu">
        <div id="mainmenu">
          <ul class="sf-menu">
            <li><a href="index.php" id="visited"><span class="home"><img src="../extra/proximet/Proximet_free/HTML/images/home.png" alt="" /></span>Home</a></li>
            <li><a href="account.php"><span class="home"><img src="../extra/proximet/Proximet_free/HTML/images/about.png" alt="" /></span>My Account</a></li>
            <li><a href="postadd.php"><span class="home"><img src="../extra/proximet/Proximet_free/HTML/images/portfolio.png" alt="" /></span>Post your ad</a>
              <ul>
                <li><a href="../extra/proximet/Proximet_free/HTML/gallery.html">Portfolio Gallery</a></li>
              </ul>
            </li>
            <li><a href="../extra/proximet/Proximet_free/HTML/blog.html"><span class="home"><img src="../extra/proximet/Proximet_free/HTML/images/blog.png" alt="" /></span>Blog</a>
              <ul>
                <li><a href="../extra/proximet/Proximet_free/HTML/singleblog.html">Single Post</a></li>
              </ul>
            </li>
            <li><a href="../extra/proximet/Proximet_free/HTML/features.html"><span class="home"><img src="../extra/proximet/Proximet_free/HTML/images/features.png" alt="" /></span>features</a></li>
            <li><a href="../extra/proximet/Proximet_free/HTML/contact.html"><span class="home"><img src="../extra/proximet/Proximet_free/HTML/images/contact.png" alt="" /></span>Contact</a></li>
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
$addetails = "select * from ad_details where ad_no='$adno' ";
 $adresult = mysql_query($addetails) or die ("adquerry err");
 $adcount = mysql_num_rows($adresult);
 if($adcount>0)
  {
	  while( $adrow = mysql_fetch_array($adresult))
	  {
echo "<div class='container portfolio'>
<h2>$adrow[ad_title]</h2>
  <div class='on_third'>
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
    
    <p>$adrow[ad_description]</p>
<p class='portfolio'><a href='#'>Project Details</a> | <a href='#'>Visit Website</a></p>
  </div>";}}
  ?>
<div class="two_third lastcolumn contact1">
    <div id="contactForm">
      <h2>Leave a comment</h2>
      <div class="sepContainer"></div>
      <form action="process.php" method="post" id="contact_form">
        <div class="name">
          <label for="name">Your Name:</label>
          <p> Please enter your full name</p>
          <input id=name name=email type=text placeholder="e.g. Mr. John Smith" required />
        </div>
        <div class="email">
          <label for="email">Your Email:</label>
          <p> Please enter your email address</p>
          <input id=email name=email type=email placeholder="example@domain.com" required />
        </div>
        <div class="message">
          <label for="message">Your Message:</label>
          <p> Please enter your question</p>
          <textarea id=message name=message rows=6 cols=10 required></textarea>
        </div>
        <div id="loader">
          <input type="submit" value="Submit" />
        </div>
      </form>
    </div>
    <!-- end contactForm --> 
    <section class="comments">
      <div class="blankSeparator"></div>
      <div class="sepContainer2"></div>
      <h2>related ads</h2>
      <div class="sepContainer2"></div>
      <div class="blankSeparator"></div>
      <div class="boxtwosep"></div>
      <div id="comments">
        <ul id="articleCommentList">
          <li>
            <div class="commentMeta">
              <p>April 23nd</p>
              <img class="user" src="images/blog/1.png" alt="Default user icon" /> </div>
            <!-- end commentMeta -->
            <div class="commentBody">
              <h3><a href="#">John Smith</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat lectus risus. Donec scelerisqu turpis non ligula convallis viverra pharetra metus volutpat. Mauris eu mattis metus. Nullam et faucibus dui. In hac habitasse platea dictumst. Praesent ut massa arcu, eget fermentum leo. </p>
              <a href="#" class="buttonhome fl">more <span>+</span></a> </div>
            <!-- end commentBody --> 
          </li>
          <li>
            <div class="commentMeta">
              <p>April 23nd</p>
              <img class="user" src="images/blog/2.png" alt="Default user icon" /> <span class="adminIcon">ADMIN</span> </div>
            <!-- end commentMeta -->
            <div class="commentBody adminReply">
              <h3><a href="#">Admin</a></h3>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor    quam,feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <a href="#" class="buttonhome fl">more <span>+</span></a> </div>
            <!-- end commentBody -->
            <ul>
            </ul>
          </li>
        </ul>
      </div>
      <!-- end Comments --> 
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
          <li><a href="#"><img src="../extra/proximet/Proximet_free/HTML/images/socials/twitter.png" class="poshytip" title="Twitter"  alt="" /></a></li>
          <li><a href="#"><img src="../extra/proximet/Proximet_free/HTML/images/socials/facebook.png" class="poshytip" title="Facebook" alt="" /></a></li>
          <li><a href="#"><img src="../extra/proximet/Proximet_free/HTML/images/socials/google.png" class="poshytip" title="Google" alt="" /></a></li>
          <li><a href="#"><img src="../extra/proximet/Proximet_free/HTML/images/socials/dribbble.png" class="poshytip" title="Dribbble" alt="" /></a></li>
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
<script src="../extra/proximet/Proximet_free/HTML/js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<!-- Main js files --> 
<script src="../extra/proximet/Proximet_free/HTML/js/screen.js" type="text/javascript"></script> 
<!-- Tooltip --> 
<script src="../extra/proximet/Proximet_free/HTML/js/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="../extra/proximet/Proximet_free/HTML/js/tabs.js" type="text/javascript"></script> 
<!-- Tweets --> 
<script src="../extra/proximet/Proximet_free/HTML/js/jquery.tweetable.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="../extra/proximet/Proximet_free/HTML/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="../extra/proximet/Proximet_free/HTML/js/superfish.js" type="text/javascript"></script> 
<script src="../extra/proximet/Proximet_free/HTML/js/hoverIntent.js" type="text/javascript"></script> 
<!-- Flexslider --> 
<script src="../extra/proximet/Proximet_free/HTML/js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script type="text/javascript" src="../extra/proximet/Proximet_free/HTML/js/modernizr.custom.29473.js"></script>

</body>
<!-- InstanceEnd --></html>