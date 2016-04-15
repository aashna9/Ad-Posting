<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("dbconnect.php");
 if (isset( $_POST['email']))
{
	$email=$_POST['email'];
	echo "
    <div id='contactForm'>
      <h3>registration form</h3>";
	  
 $regdetails = "select * from register where email='$email'";
 $regresult = mysql_query($regdetails) or die ("adquerry err");
 $regcount = mysql_num_rows($regresult);
 if($regcount>0)
  {
	  while( $regrow = mysql_fetch_array($regresult))
	  {
		  
	echo"
      <form method='POST' id='contact_form' action=''>
      
        <div class='fname'>
          <label for='fname'>First Name:</label>
          <input id=fname name=fname value=$regrow[fname] type=text/>
        </div>
         
         <div class='lname'>
          <label for='lname'>Last Name:</label>
          <input id=lname value=$regrow[lname] name=lname type=text />
        </div>
       
        <div class='mail'>
          <label for='mail'> Email:</label>
          <input id=mail name=mail value=$regrow[email] type=mail/>
        </div>
  
        <div class='message'>
          <label for='message'>Contact Number:</label>
          <input id=no name=no value=$regrow[contact_no] type=text></input>
        </div>
      </form>
    </div>
    <!-- end contactForm --> ";
	  }
  }
}
?>
	

</body>




</html>