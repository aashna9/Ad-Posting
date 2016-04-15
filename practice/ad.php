
<?php


$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpg")
| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    if (file_exists("clips/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "clips/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "clips/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
	$category=$_POST['category'];
   	$adtype=$_POST['adtype'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $adtitle=$_POST['adtitle'];
    $message=$_POST['message'];
    $price=$_POST['price'];
    $seller=$_POST['seller'];
	$email=$_POST['mail'];
	$contact=$_POST['no'];
	$website=$_POST['website'];
    $email_dis=$_POST['email'];
  	$con_dis=$_POST['contact'];
	include("dbconnect.php");
	$query = "insert into ad_details(city,state,ad_title,ad_description,price,user_type,website,email_display,no_display) values('$city','$state','$adtitle','$message','$price','$seller','$website','$email_dis')";
	$result = mysql_query($query) or die("query err");
	$rowaffect = mysql_affected_rows();
	if($rowaffect>0)
	{
		echo "thankyou for choosing us";
		session_start();
		$_SESSION['title']=$adtitle;
		$_SESSION['desc']=$message;
		
		print'<meta http-equiv="refresh" content="0;adpreview.php">';
	}

?>
