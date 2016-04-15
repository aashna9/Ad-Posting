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
      <h2>registration form</h2>
      <div class="sepContainer"></div>
      <form method="POST" id="contact_form" action="success.php">
        <div class="name">
          <label for="name">contact Name:</label>
          <p> Please enter your full name</p>
          <input id=fname name=fname type=text placeholder="e.g. Mr. John Smith" required onChange="alpha(fname,'fn')"/>
         <div id="fn" class="err"></div>
        </div>
         
         <div class="username">
          <label for="username">userName:</label>
          <p> Please enter your choice username</p>
          <input id=uname name=uname type=text placeholder="e.g. john123" required onChange="username(uname)" />
           <div id="user" class="err"></div>
        </div>
       
        <div class="email">
          <label for="email"> Email:</label>
          <p> Please enter your email address</p>
          <input id=mail name=mail type=text onChange="cemail(mail)" placeholder="example@domain.com" required />
                <div id="eml" class="err"></div>
        </div>
  
         <div class="password">
          <label for="password">password:</label>
          <p> Please enter your choice password</p>
          <input id=pass name=pass type=password required onChange="paswrd(pass)" />
          <div id="pss" class="err"></div>
        </div>
        
        <div class="rpassword">
          <label for="rpassword">confirm passowrd:</label>
          <p> Please confirm your password</p>
          <input id=rpass name=rpass type=password required onChange="mpaswrd(pass,rpass)" />
       <div id="rpss" class="err"></div>
       </div>
        
        <div class="message">
          <label for="message">contact no.:</label>
          <p> Please enter your contact number</p>
          <input id=no name=no type=text placeholder="e.g. 9876543210" required  onChange="numb(no)"></input>
          <div id="num" class="err"></div>
        </div>
        <div class="img">
          <label for="img">profile image:</label>
          <p> Please import your profile image here</p>
          <input id=img name=img type=file required></input>
          </div>
        <div class="logo">
          <label for="logo">logo</label>
          <p> Please import your logo here</p>
          <input id=logo name=logo type=file required></input>
          </div>
        <div id="loader">
          <input type="submit" value="Register Now" name="submit"/>
        </div>
      </form>
      <style type="text/css" >
.err
{
	font-family: "Comic Sans MS", cursive;
	font-size: 13px;
	font-weight: bold;
	color:#FF3C3C;		
	}
</style>
<script type="text/javascript">
function username(uname)
{
	var nme = uname.name;
	var letters = /^[0-9A-Za-z]+$/;
	var len=uname.value.length;
	if(uname.value.match(letters))
	{
		if (len<4 || len>12)
		{
		document.getElementById('user').innerHTML = 'username must be within '+ 4+ 'to'+ 12+' characters.';	
		document.getElementById(nme).value='';
		document.getElementById(nme).focus();	
		}
		else 
		document.getElementById('user').innerHTML = '';
	}
	else
	{
		document.getElementById('user').innerHTML = 'Please enter proper username.';
		document.getElementById(nme).value='';
		document.getElementById(nme).focus();

	}
	}
function paswrd(pass)
{
	var nme=pass.name;
	var letters=/^[0-9A-Za-z]+$/;
	var len=pass.value.length;
	if(pass.value.match(letters))
	{
		if(len<6 || len>15)
		{
			document.getElementById('pss').innerHTML = 'Password must be within '+ 6+ 'to'+ 15+' characters.';
			document.getElementById(nme).value='';
			document.getElementById(nme).focus();
		}
		else
		{
			document.getElementById('pss').innerHTML = '';
		}
	}
	else
	{
		document.getElementById('pss').innerHTML = 'Password must consider only Charaters and Number.';
		document.getElementById(nme).value='';
		document.getElementById(nme).focus();
	}
}
function mpaswrd(pass,rpass)
{
	var pas=pass.value;
	var rpas=rpass.value;
	var nme=rpass.name;
	
		if(pas!=rpas)
		{
			document.getElementById('rpss').innerHTML = 'Password doesnt match.';
			document.getElementById(nme).value='';
			document.getElementById(nme).focus();	
		}
		else
		{
			document.getElementById('rpss').innerHTML = '';
		}
		
}
function alpha(vari,path)
{
	var nme = vari.name;
	var len = vari.value.length;
	
	var letters = /^[A-Za-z]+$/;
	if(vari.value.match(letters))
	{
			if (len<4 || len>12)
		{
		document.getElementById(path).innerHTML = 'name must be within '+ 4+ 'to'+ 12+' characters.';	
		document.getElementById(nme).value='';
		document.getElementById(nme).focus();	
		}
		else
		document.getElementById(path).innerHTML = '';
	}
	else
	{
		document.getElementById(path).innerHTML = 'Only Letters are allowed.';
		document.getElementById(nme).value='';
		document.getElementById(nme).focus();
	}
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
</script>
    </div>
    <!-- end contactForm --> 
  </div>
</div>
<!-- container ends here -->
<!-- Home Content Part - Box Two ==================================================
================================================== -->
<!-- end container -->
<!-- Home Content Part - Box Three ==================================================
================================================== -->
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