<?php
$ad_no=$_GET['ad_no'];
?>
<html>
<head>

	<script src="jquery-1.4.min.js" type="text/javascript"></script>
<script src="jquery.flash.min.js" type="text/javascript"></script>
	
	<script src="agile-uploader-3.0.js" type="text/javascript"></script>
	<link type="text/css" rel="stylesheet" href="agile-uploader.css" />
</head>
<body>



<form id="contact_form" enctype="multipart/form-data">
<?php
echo "
<input name='ad_no' type='hidden' value='$ad_no' />";
?>
<div id='multiple'>
<label for='file'>photos:</label>
</div>
    



<a href="#" onClick="document.getElementById('agileUploaderSWF').submit();"><input type='submit' name='submit' value='submit' /></a>
</form>
<div id = 'image' >
    <script type="text/javascript">
    	$('#multiple').agileUploader
		({
    	// submitRedirect: 'results.php',
    		formId: 'contact_form',
		    flashVars: 
		   {
			firebug: false,
    		form_action: 'process.php',
			type: "POST",
			data: "ad_no="+ad_no,
			file_limit: 30,
			max_post_size: (2000 * 2024),
		    success: function(msg)
			{
			 $("div#image").html(msg)
			}
			}
    	});	
    </script>

</body>
</html>


