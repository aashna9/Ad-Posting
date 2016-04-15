
<?php
$i = 1000;
if (isset($_POST['data']))
{
$cid = $_POST['data'];
include("dbconnect.php");

	 $tquery = "select c_name from categories where c_id = '$cid'";
			$tresult = mysql_query($tquery);
	         $tname = mysql_fetch_array($tresult);
        	 $table = $tname[0];




$adtable = "select * from $table ";
	$tableresult = mysql_query($adtable) or die ("tablequerry err");
    $tablecount = mysql_num_rows($tableresult);
	


 if($tablecount>0)
{echo "
	<input name='abc' type='hidden' value='123' />";
	 while( $tblrow = mysql_fetch_field($tableresult))
  {
	  $field_name = $tblrow->name;
	  
$adquery = "select * from form_fields where field_name = '$field_name'";
$adresult = mysql_query($adquery) or die ("adquerry err");
 $adcount = mysql_num_rows($adresult);
	  $adrow = mysql_fetch_array($adresult);
	  
		   if(substr($field_name,-1)==1)		 
		    {
			$temp = strrev(substr(strrev(substr($field_name,4)),1));
			}
			else
			{
			$temp = substr($field_name,4);
			}
			$field = str_replace("_"," ",$temp);
    if(substr($field_name,2,1)=='t')
	 {
	 		
		
			 $vquery = "select $field_name from $table"; 
			
			$vresult = mysql_query($vquery);
	    while ( $meta = mysql_fetch_field($vresult))
         {
               	
           if (!$meta)
	                 {
		                   echo "ERROR";
                     }
					else
					{
					 $type = "$meta->type";
					 $max = $meta->max_length;
					 $not_null = $meta->not_null;
					}
         }
		     echo "<div class=$field_name>
		  	 <label for = $field_name >
			  $field:
			 </label>
			<input type='text' name=$field_name id =$field_name onChange='validations(\"$adrow[f_id]\",$field_name,\"$type\",\"$max\",\"$not_null\")'/>
			 </div>";
			
			
	     }
		
		 elseif(substr($field_name,2,1)=='s')
		 {
	$query="select * from field_category where f_id = '$adrow[f_id]'";
	$cresult=mysql_query($query) or die ("query error");		
	    $count = mysql_num_rows($cresult);					
    echo "<div class=$field_name>
	<label for = $field_name>
			  $field:
			 </label> 
			 <select name=$field_name >"; 
	       while($cfetch=mysql_fetch_array($cresult))
		   {
	    echo "<option value='$cfetch[category]'>
		               $cfetch[category]
					   </option>";
		   }
			echo"</select></div>	";		 
	    }
		
		//checkbox
		
elseif(substr($field_name,2,1)=='c')
	 {
	$query = "select * from field_category where f_id = '$adrow[f_id]'";

	$cresult = mysql_query($query) or die ("cquery error");		 
	  $count = mysql_num_rows($cresult);	
		 echo "
		 <div class='check'>   <p>
          <label>  
		  $field:
		 </label>";
		 while($cfetch=mysql_fetch_array($cresult))
		   {
			   
			?> <input type='checkbox' value='<?php echo $cfetch['category'] ?>' name="<?php echo $field_name?>[]" />
		<?php echo "$cfetch[category]";
		  
		   }    
		  
	 	echo "</div>";
	 }
	 
	 
	 //radio button
	 elseif(substr($field_name,2,1)=='r')
		 {
	$query="select * from field_category where f_id = '$adrow[f_id]'";
	$cresult=mysql_query($query) or die ("cquery error");	
	  $count = mysql_num_rows($cresult);
	  	    echo "<div class=$field_name>
	<label for = $field_name>
			  $field:
			 </label>
			 ";	
    
			  while($cfetch=mysql_fetch_array($cresult))
		   {
			
			echo " <input type='radio' value='$cfetch[category]' name='$field_name'/>$cfetch[category]";
		   }
					 
	  	echo "</div>";
		}
		
		
		 elseif(substr($field_name,2,1)=='d')
		 {
		
	  	    echo "<div class=$field_name>
	<label for = $field_name>
			  $field:
			 </label>
			  <input type='text' placeholder='yyyy-mm-dd for-eg:2014-12-20' name='$field_name' id='$i' onFocus='date($i)'/>
			  </div>";
			  $i++;
		}
		
		
		
	  }//end adrow

}//end adcount
 echo "
 <div class='adtitle'>
          <label for='adtitle'>Ad Title:</label>
          <p>Give your ad a catchy title</p>
          <input id=adtitle name=adtitle type=text size='65' required onKeyUp='getCharCount(65)'/>
          <div id='displaycount'></div>
        </div>
        <div class='state'>
          <label for='state'>state:</label>
          <p> Please select your state</p>
          <input id=state name=state type=text required />
        </div>
        <div class='city'>
          <label for='city'>city:</label>
          <p> Please select your city</p>
          <input id=city name=city type=text required />
        </div>
      <div class='photo'>
         <label for='file'>photos:</label>
<input type='file' name='file' id='file'><br>
        </div> 
        <div class='message'>
          <label for='message'>make your own ad:</label>
          <p>write a good detailed description. we recommend 150 characters or more and of course PLEASE DONT USE ALL CAPS.</p>
          <textarea id=message name=message rows=6 cols=10 required></textarea>
        </div>
         <div class='email'>
          <label for='email'>email:</label>
          <p> Please enter your email address so we can forward replies to your ad</p>
          <input id=email name=email type=text placeholder='e.g. example@domain.com' required onchange='cemail(email)'/>
<div id='eml' class='err'></div>
          
        </div>
        <div class='contact'>
          <label for='contact'>contact number.:</label>
          <p> Please enter a digit telephone number where interested buyers can call you. STD code is mandatory for landline. dont enter 0 before number</p>
          <input id=no name=no type=text onChange='numb(no)' placeholder='e.g. 9876543210' required></input>
            <div id='num' class='err'></div>
        </div>
        <div class='website'>
          <label for='website'>website:</label>
          <p> Please enter Your website</p>
          <input id=website name=website type=text required placeholder='e.g. domain.com'/>
        </div>
		
 
      ";

}//end isset
		?> 
