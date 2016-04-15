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
<div class="container">
  <div class="two_third lastcolumn contact1">
    <div id="contactForm">
      <h2>post your ad here</h2>
      <div class="sepContainer"></div>

<script type="text/javascript" src="js.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		$("#cid").change(function () {
			$("#content").html('Retrieving...');
			$.ajax({
				type: "POST",
				data:  "data=" + $("#cid").val(),
				url: "form.php",
				success: function(msg){
					$("#content").html(msg)
				}
			});
		});
	   
	   
	   /*subcategories*/
	   
	   $("#cid").change(function () {
		$("#subcategory").html('Retrieving...');
			$.ajax({
				type: "POST",
				data:  "data=" + $("#cid").val(),
				url: "subcategories.php",
				success: function(msg){
					$("#subcategory").html(msg)
				}
			});
		});
		
		   
	});
	/*
function getCharCount(limit)
{
var tArea	    = document.getElementById("adtitle"),
	 countDisplay = document.getElementById("displaycount");
	 countRemains = limit - tArea.value.length
countDisplay.innerHTML = "Total characters : " + tArea.value.length + " Remaining: " + countRemains;
}
function exist(divName)
	{
           var newdiv=  "username:<br><input type='text' name='uname'> <br> password <br> <input type='password' name='pass'>";
          document.getElementById(divName).innerHTML=  newdiv ;
   
     }
	 function new(divName)
	 {
           var newdiv=  "please register now for posting your ad  <br><a href='registration.php'><input name='register' value='register' type='button'></a>";
          document.getElementById(divName).innerHTML=  newdiv ;
   
	 }
		
function numb(no)
{
	var letter=/^[0-9]+$/;
	var nme=no.name;
	var nlen=no.value.length;

	if(no.value.match(letter))
	{
		if(nlen<10 || nlen>10|| no.value=='0')
		{
			document.getElementById('num').innerHTML = 'Must have 10 Characters.';
			document.getElementById(nme).value='';
			document.getElementById(nme).focus();
		}
		else
		{
			document.getElementById('num').innerHTML = '';
		}
	}
	else
	{
		document.getElementById('num').innerHTML = 'Only Numbers are allowed';
		document.getElementById(nme).value='';
		document.getElementById(nme).focus();
	}
}
function cemail(mail)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var nme=mail.name;
	var nlen=mail.value.length;

	if(mail.value.match(mailformat))
	{
		document.getElementById('eml').innerHTML = '';
	}
	else
	{
		document.getElementById('eml').innerHTML = 'Invaild Email Address';
		document.getElementById(nme).value='';
		document.getElementById(nme).focus();
}
}


function validations(err,field,type,max_len,not_null)
{

	var letter=/^[0-9]+$/;
	var idname=field.name;
	var len=field.value.length;
	if(type == 'int')	  
	{
	  if(field.value.match(letter))
	 {
		document.getElementById(err).innerHTML = '';
	 }
	else
	{
		document.getElementById(err).innerHTML = 'Only Numbers are allowed';
		document.getElementById(idname).value='';
		document.getElementById(idname).focus();
	}
   }
	if(len>max_len)
		{
			document.getElementById(err).innerHTML = 'exceeded maximum limit';
			document.getElementById(idname).value='';
			document.getElementById(idname).focus();
		}
		else
		{
			document.getElementById(err).innerHTML = '';
		}
}	

 function subcat(divName){
           var newdiv = "<label for='subcategory'>subcategory:</label><select name='sid' id='sid'><option value='$snamefetch[s_id]'>$snamefetch[s_name]</option></select>";
           document.getElementById(divName).innerHTML=  newdiv ;
   
     }*/
</script>
<form action="ad1.php" method="post" id="contact_form" enctype="multipart/form-data">
<?php
echo "<div class='category'>
          <label for='category'>category:</label>
           <select name='cid' id='cid'><option>Select</option>";
		$link = mysql_connect('localhost','root','') or die("connection error");	
	    mysql_select_db('ad_posting') or die("database error");
	   	$catquery="select * from categories";
		$cnameresult=mysql_query($catquery,$link) or die ("query error");
	    while($cnamefetch=mysql_fetch_array($cnameresult))
		{
		 echo "<option value='$cnamefetch[c_id]'>$cnamefetch[c_name]</option>";
		}
      echo"
           </select>
     </div> 
	 <div id='subcategory'>
	 </div>
	 <div id='content'></div>   
	    </form>";
	 
?>
    </div>
    <!-- end contactForm --> 
  </div>
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