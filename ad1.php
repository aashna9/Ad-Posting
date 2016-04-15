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
	echo "***".$tmp_name;
	$name = $_FILES["file"]["name"];
	$ext = substr(strrchr($name, '.'), 1);
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



$imgquery = "insert into ad_images(path,ad_no) values('upload/$name','$ad_no')";
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
        <section class='boxfour'> <a href='clips/elec7.jpg' class='prettyPhoto[gal]'> <img src='upload/$name' width='420' height='242' alt=''/></a> </section>
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
<?php
}
?>
<!--
if($arowaffect>0 and $rowaffect>0)
{?>
<html>
<head>
	<script src="jquery-1.4.min.js" type="text/javascript"></script>
	<script src="jquery.flash.min.js" type="text/javascript"></script>
	<link type="text/css" rel="stylesheet" href="unrelated.css" />
	
	<script src="agile-uploader-3.0.js" type="text/javascript"></script>
	<link type="text/css" rel="stylesheet" href="agile-uploader.css" />
</head>
<body>

<div id="demo">



<form id="multipleDemo" enctype="multipart/form-data">



<div id="multiple"></div>
    <div id = 'image' ></div>
</form>

<a href="#" onClick="document.getElementById('agileUploaderSWF').submit();">Submit</a>
</div>

    <script type="text/javascript">
    	$('#multiple').agileUploader
		({
    		// submitRedirect: 'results.php',
    		formId: 'multipleDemo',
	    	flashVars:
			 {
			   //firebug: false,
    		   form_action: 'process.php',
			   file_limit: 30,
			   max_post_size: (2000 * 2024)
	    	
    		 }
    	});	
    </script>

</body>
</html>
->