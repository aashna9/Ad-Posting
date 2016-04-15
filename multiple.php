<?php
if(isset($_POST['ad_no']))
$ad_no=$_POST['ad_no'];
?>
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



<form id="multipleDemo" enctype="multipart/form-data" method="post">
<?php
echo "
<input name='ad_no' id='ad_no' type='hidden' value='$ad_no' />";
?>


<div id="multiple"></div>
    
</form>

<a href="#" onClick="document.getElementById('agileUploaderSWF').submit();">Submit</a>
</div>

    <script type="text/javascript">
    	$('#multiple').agileUploader
		({
    		submitRedirect: 'ad_post.php',
    		formId: 'multipleDemo',
	    	flashVars:
			 {
			   firebug: false,
    		   form_action: 'process.php',
			   file_limit: 30,
			   max_post_size: (2000 * 2024)
    		}
    	});	
    </script>

</body>
</html>
