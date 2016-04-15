<?php
/*	if(isset($_REQUEST['sub']))
	{
	$tmp_name = $_FILES["file"]["tmp_name"];
	$name = $_FILES["file"]["name"];
	$ext = substr(strrchr($name, '.'), 1);
	switch(strtolower($ext)) {
		case 'jpg':	
		case 'jpeg':
		case 'png':
		case 'gif':
			{move_uploaded_file($tmp_name,"upload/$name");
			echo "***".$name;}
		break;

	}
	}*/
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form enctype="multipart/form-data" method="post" action="ad.php">
<input type="file" name="file_img">
<input type="submit" name="sub">
</form>
</body>
</html>