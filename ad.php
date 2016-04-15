<?php	// Single file
 if ($_FILES["file_img"]["error"] > 0) 
 {
    echo "Return Code: " . $_FILES["file_img"]["error"] . "<br>";
  } else
   {
echo "image";
	$tmp_name = $_FILES["file_img"]["tmp_name"];
	echo $tmp_name."hi";
	$name = $_FILES["file_img"]["name"];
	$ext = substr(strrchr($name, '.'), 1);
	switch(strtolower($ext)) 
	{
		case 'jpg':	
		case 'jpeg':
		case 'png':
		case 'gif':
			{move_uploaded_file($tmp_name,"upload/$name");
			echo "***".$name;}
		break;

	}
   }
	?>