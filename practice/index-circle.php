<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"><!-- InstanceBegin template="/Templates/master1.dwt" codeOutsideHTMLIsLocked="false" -->
<!--<![endif]-->
<head>

<!-- Basic Page Needs ================================================== 
================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Circle Hover Effects with CSS Transitions" />
        <meta name="keywords" content="circle, border-radius, hover, css3, transition, image, thumbnail, effect, 3d" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="jquery/circle/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="jquery/circle/css/common.css" />
        <link rel="stylesheet" type="text/css" href="jquery/circle/css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
        <script src="js/modernizr.custom.js"></script>
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
            <li><a href="index1.php" id="visited"><span class="home"><img src="extra/proximet/Proximet_free/HTML/images/home.png" alt="" /></span>Home</a></li>
            <li><a href="signin.php"><span class="home"><img src="extra/proximet/Proximet_free/HTML/images/about.png" alt="" /></span>About</a></li>
            <li><a href="postadd.php"><span class="home"><img src="extra/proximet/Proximet_free/HTML/images/portfolio.png" alt="" /></span>Portfolio</a>
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
echo"
<div class='container1'>
			
			<section class='main'>";
include("dbconnect.php");
 $addetails="SELECT COUNT(c_id) FROM ad_details where c_id='c01'";

 $adresult = mysql_query($addetails,$link) or die ("adquerry err");
	while($row = mysql_fetch_array($adresult))
	{
	    echo "<ul class='ch-grid'>
					<li>
						<div class='ch-item ch-img-1'>
                       <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>education</h3>
                                <p>".$row['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
					 $addetails2="SELECT COUNT(c_id) FROM ad_details where c_id='c02'";

 $adresult2 = mysql_query($addetails2,$link) or die ("adquerry err");
	while($row2 = mysql_fetch_array($adresult2))
	{
                    	echo"<li>
						<div class='ch-item ch-img-2'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>food and dining</h3>
                               <p>".$row2['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
	}
	$addetails3="SELECT COUNT(c_id) FROM ad_details where c_id='c03'";

 $adresult3 = mysql_query($addetails3,$link) or die ("adquerry err");
	while($row3 = mysql_fetch_array($adresult3))
	{
	echo"
                    	<li>
						<div class='ch-item ch-img-3'>
                         <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>services</h3>
							 <p>".$row3['COUNT(c_id)']." ads</a></p>
                            </div>
						</div>
					</li>";
					}
					$addetails4="SELECT COUNT(c_id) FROM ad_details where c_id='c04'";

 $adresult4 = mysql_query($addetails4,$link) or die ("adquerry err");
	while($row4 = mysql_fetch_array($adresult4))
	{
					echo "
                    	<li>
						<div class='ch-item ch-img-4'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>health and fitness</h3>
                                 <p>".$row4['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
					$addetails5="SELECT COUNT(c_id) FROM ad_details where c_id='c05'";

 $adresult5 = mysql_query($addetails5,$link) or die ("adquerry err");
	while($row5 = mysql_fetch_array($adresult5))
	{
					echo"
					<li>
						<div class='ch-item ch-img-5'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>electronics and technology</h3>
							 <p>".$row5['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
					$addetails6="SELECT COUNT(c_id) FROM ad_details where c_id='c06'";

 $adresult6 = mysql_query($addetails6,$link) or die ("adquerry err");
	while($row6 = mysql_fetch_array($adresult6))
	{
					echo "
					<li>
						<div class='ch-item ch-img-6'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>mobile phones</h3>
							 <p>".$row6['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
					$addetails7="SELECT COUNT(c_id) FROM ad_details where c_id='c07'";

 $adresult7 = mysql_query($addetails7,$link) or die ("adquerry err");
	while($row7 = mysql_fetch_array($adresult7))
	{
					echo "
				</ul>
			
			
				<ul class='ch-grid'>
					<li>
						<div class='ch-item ch-img-7'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>home and lifestyle</h3>
							 <p>".$row7['COUNT(c_id)']." ads</a></p>
		                           </div>
						</div>
					</li>";
                    }
					$addetails8="SELECT COUNT(c_id) FROM ad_details where c_id='c08'";

 $adresult8 = mysql_query($addetails8,$link) or die ("adquerry err");
	while($row8 = mysql_fetch_array($adresult8))
	{
					echo "
                    	<li>
						<div class='ch-item ch-img-8'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>real estate</h3>
                                <p>".$row8['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
					$addetails9="SELECT COUNT(c_id) FROM ad_details where c_id='c09'";

 $adresult9 = mysql_query($addetails9,$link) or die ("adquerry err");
	while($row9 = mysql_fetch_array($adresult9))
	{
					echo "
                    	<li>
						<div class='ch-item ch-img-9'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>vehicles</h3>
                                <p>".$row9['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
					$addetails10="SELECT COUNT(c_id) FROM ad_details where c_id='c10'";

 $adresult10 = mysql_query($addetails10,$link) or die ("adquerry err");
	while($row10 = mysql_fetch_array($adresult10))
	{
					echo "
                    	<li>
						<div class='ch-item ch-img-10'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>travel and tourism</h3>
                              <p>".$row10['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
					$addetails11="SELECT COUNT(c_id) FROM ad_details where c_id='c11'";

 $adresult11 = mysql_query($addetails11,$link) or die ("adquerry err");
	while($row11 = mysql_fetch_array($adresult11))
	{
					echo "
					<li>
						<div class='ch-item ch-img-11'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>jobs</h3>
                              <p>".$row11['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
					$addetails12="SELECT COUNT(c_id) FROM ad_details where c_id='c12'";

 $adresult12 = mysql_query($addetails12,$link) or die ("adquerry err");
	while($row12 = mysql_fetch_array($adresult12))
	{
					echo "
					<li>
						<div class='ch-item ch-img-12'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>community</h3>
						 <p>".$row12['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
	$addetails13="SELECT COUNT(c_id) FROM ad_details where c_id='c13'";

 $adresult13 = mysql_query($addetails13,$link) or die ("adquerry err");
	while($row13 = mysql_fetch_array($adresult13))
	{
					echo "
				</ul>
		
			
				<ul class='ch-grid'>
					<li>
						<div class='ch-item ch-img-13'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>movies</h3>
                              <p>".$row13['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
	$addetails14="SELECT COUNT(c_id) FROM ad_details where c_id='c14'";

 $adresult14 = mysql_query($addetails14,$link) or die ("adquerry err");
	while($row14 = mysql_fetch_array($adresult14))
	{
					echo "
                    	<li>
						<div class='ch-item ch-img-14'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>matrimonial</h3>
                         <p>".$row14['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
	$addetails15="SELECT COUNT(c_id) FROM ad_details where c_id='c15'";

 $adresult15 = mysql_query($addetails15,$link) or die ("adquerry err");
	while($row15 = mysql_fetch_array($adresult15))
	{
					echo "
                    	<li>
						<div class='ch-item ch-img-15'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>news headlines</h3>
                             <p>".$row15['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
	$addetails16="SELECT COUNT(c_id) FROM ad_details where c_id='c16'";

 $adresult16 = mysql_query($addetails16,$link) or die ("adquerry err");
	while($row16 = mysql_fetch_array($adresult16))
	{
					echo "
                    	<li>
						<div class='ch-item ch-img-16'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>music</h3>
                              <p>".$row16['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
	$addetails17="SELECT COUNT(c_id) FROM ad_details where c_id='c17'";

 $adresult17 = mysql_query($addetails17,$link) or die ("adquerry err");
	while($row17 = mysql_fetch_array($adresult17))
	{
					echo "
					<li>
						<div class='ch-item ch-img-17'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>entertain ment</h3>
							 <p>".$row17['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
	$addetails18="SELECT COUNT(c_id) FROM ad_details where c_id='c18'";

 $adresult18 = mysql_query($addetails18,$link) or die ("adquerry err");
	while($row18 = mysql_fetch_array($adresult18))
	{
					echo "
					<li>
						<div class='ch-item ch-img-18'>
                        <a href='ad_category.php'>
							<div class='ch-info'>
								<h3>events</h3>
						 <p>".$row18['COUNT(c_id)']." ads</a></p>
							</div>
						</div>
					</li>";
					}
					echo "
				</ul>
			
			</section>
			
        </div>";
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