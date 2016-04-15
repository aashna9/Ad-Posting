<?php
$ad_no=$_POST['ad_no'];
include("dbconnect.php");
/**
 * Note: This is purely an example script. It will not do a whole lot and probably won't suit your needs. 
 * Please keep in mind that if you allow certain types of files to be uploaded to your server you could create a security risk.
 * Take note of the switches below that check file types.
*/

// CHANGE THIS ACCORDINGLY
$target_path = "upload/";


$uploads_dir = $target_path;


	// Multiple files
	foreach ($_FILES["Filedata"]["error"] as $key => $error) {
	    if ($error == UPLOAD_ERR_OK) {
	        $tmp_name = $_FILES["Filedata"]["tmp_name"][$key];
	        $name = $_FILES["Filedata"]["name"][$key];
	        $ext = substr(strrchr($name, '.'), 1);
			include("autoid.php");
            $img_id= autoid("img_id","ad_images");
            $name = $img_id.".".$ext;
			
			
	        switch(strtolower($ext)) {
				case 'jpg':	
				case 'jpeg':
				case 'png':
				case 'gif':
				case 'png':
				case 'doc':
				case 'txt':
				{	move_uploaded_file($tmp_name, "upload/$name");
					
					$mulquery = "insert into ad_images(path,ad_no,img_id) values('upload/$name','$ad_no','$img_id')";
	$mulresult = mysql_query($mulquery) or die("mulquery err");
	$mulrowaffect = mysql_affected_rows();}
				break;
				default:
					exit();
				break;
			}
	    }
	}


echo 'RETURN DATA!';

?>
