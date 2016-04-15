<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = $_POST[$a];

}
?>

<h2>post your ad here</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' id='contact_form' enctype='multipart/form-data'>
 <?php
	$a = "abc";		
			 echo "<div class=$a>
			 <label for = $a>
			 $a:
			 </label>
			 <input type='text' name=$a />
			 </div>";
			 $farray = array($a=>$name);
	     foreach($farray as $key => $val)
		 {
			 echo "$key = $val";
			} 
			echo $a.value;
		
			echo"</select>	 
			 </div>";			 
		?> 
          
          <input type="submit" name="submit" value="Submit" />


      </form>
      
      
      

</body>
</html>

