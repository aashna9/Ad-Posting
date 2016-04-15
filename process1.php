<?php
$ad_no=$_POST['ad_no'];
include("dbconnect.php");
include("resize-class.php");
/**
 * Note: This is purely an example script. It will not do a whole lot and probably won't suit your needs. 
 * Please keep in mind that if you allow certain types of files to be uploaded to your server you could create a security risk.
 * Take note of the switches below that check file types.
*/

// CHANGE THIS ACCORDINGLY
$target_path = "upload/";



$uploads_dir = $target_path;


	// Multiple files
	foreach ($_FILES["Filedata"]["error"] as $key => $error)
	 {
	    if ($error == UPLOAD_ERR_OK)
		 {
	        $tmp_name = $_FILES["Filedata"]["tmp_name"][$key];
	        $name = $_FILES["Filedata"]["name"][$key];
			
	        $ext = substr(strrchr($name, '.'), 1);
	        switch(strtolower($ext)) 
			{
				case 'jpg':	
				case 'jpeg':
				case 'png':
				case 'gif':
				case 'png':
				case 'doc':
				case 'txt':
					move_uploaded_file($tmp_name, "upload/$name");
					
						// *** Include the class

list($width,$height) = getimagesize("upload/$name");

	// *** 1) Initialise / load image
	$resizeObj = new resize("upload/$name");
	
	if($width >  $height)
	{
		$newheight = (($height*200)/$width) ;
		$newwidth = 200;
	}

	elseif($height > $width)
	{
		
		
		$newwidth = (($width*200)/$height) ;
		$newheight = 200;
	}
	else
	{
		$newwidth = 200 ;
		$newheight = 200;
	}
		// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage($newwidth, $newheight, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage("upload/img/$name", 100);
	
	$path = "upload/$name";
	
	
$mulquery = "insert into ad_images(path,ad_no) values('$path','$ad_no')";
	$mulresult = mysql_query($mulquery) or die("mulquery err");
	$mulrowaffect = mysql_affected_rows();
echo $mulquery;
	
				break;
				default:
					exit();
				break;
			}
	    }
	}


echo 'RETURN DATA!';

?>
