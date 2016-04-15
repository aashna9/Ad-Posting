<script type="text/javascript" src="js/tiny_mce.js"></script>

<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "style,layer,table,wordcount",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,styleselect,fontsizeselect",
		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<?php
if (isset($_POST['data']))
{
$cid = $_POST['data'];
	$link = mysql_connect('localhost','root','') or die("connection error");	
	    mysql_select_db('ad_posting') or die("database error");
$adquery = "select * from form_fields where c_id = '$cid'";
$adresult = mysql_query($adquery) or die ("adquerry err");
 $adcount = mysql_num_rows($adresult);


 if($adcount>0)
{
	  while( $adrow = mysql_fetch_array($adresult))
	  {
	    if($adrow['input_type']=='t')
		 {
	 		
			 $tquery = "select c_name from categories where c_id = '$cid'";
			$tresult = mysql_query($tquery);
	         $tname = mysql_fetch_array($tresult);
        	 $table = $tname[0];
			 $vquery = "select $adrow[field_name] from $table"; 
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
		     echo "<div class=$adrow[field_name]>
		  	 <label for = $adrow[field_name] >
			 $adrow[field_name]:
			 </label>
			<input type='text' name=$adrow[field_name] id =$adrow[field_name] onChange='validations(\"$adrow[f_id]\",$adrow[field_name],\"$type\",\"$max\",\"$not_null\")'/>
			 <div name=$adrow[f_id] id = $adrow[f_id]>
			 </div>";
			
			
	     }
		 /* <?php
		function validations($field)
		{
			 <div name=$adrow[f_id] id = $adrow[f_id]>
		$val = $field.value;
		$len = $field.value.length;
	$tquery = "select c_name from categories where c_id = '$cid'";
	echo $tquery;
	$tresult = mysql_query($tquery);
	$tname = mysql_fetch_array($tresult);
	$table = $tname[0];
	$vquery = "select $valid from $table";
	$vresult = mysql_query($vquery);
	while (mysql_num_fields($vresult))
 {
  $meta = mysql_fetch_field($vresult);	
    if (!$meta)
	 {
		 echo "ERROR";
     }
	 else
	 {
	
	   if($meta->type == 'int')
           {
	          if($val->type == 'int')
	            {
				  if($len>$meta->max_length)
                  {echo "<div class='err'>maximumum limit of letters:$meta->max_length</div>";}
					
				}
			  else
			  {
				  {echo "<div class='err'>only letters allowed</div>";}
			  }
					
		   }
	    if($meta->not_null == 1)
		  {
			  if($val->not_null  == 0)
			  {echo "required field";}
		  }
}//else
 }//while
		}//function
?>*/
		 elseif($adrow['input_type']=='s')
		 {
	$query="select * from field_category where f_id = '$adrow[f_id]'";
	$cresult=mysql_query($query) or die ("query error");		
	    $count = mysql_num_rows($cresult);					
    echo "<div class=$adrow[field_name]>
	<label for = $adrow[field_name]>
			 $adrow[field_name]:
			 </label> 
			 <select name=$adrow[field_name] >"; 
	       while($cfetch=mysql_fetch_array($cresult))
		   {
	    echo "<option value='$cfetch[category]'>
		               $cfetch[category]
					   </option>";
		   }
			echo"</select></div>	";		 
	    }
		
		//checkbox
		
		   elseif($adrow['input_type']=='c')
	 {
	$query = "select * from field_category where f_id = '$adrow[f_id]'";
	$cresult = mysql_query($query) or die ("cquery error");		 
	  $count = mysql_num_rows($cresult);	
		 echo "
		 <div class='check'>   <p>
          <label>  <input type='checkbox' name=$adrow[field_name] />
		 $adrow[field_name]
		 </label>";
		 
		 while($cfetch=mysql_fetch_array($cresult))
		   {
			
			echo " <input type='checkbox' value='$cfetch[category]' name=$adrow[field_name] />
		 $cfetch[category]";
		echo "</div>";
		   }     
	 }
	 
	 //radio button
	 elseif($adrow['input_type']=='r')
		 {
			 $field[$adrow['field_name']]=$adrow['field_name'];
	$query="select * from field_category where f_id = '$adrow[f_id]'";
	$cresult=mysql_query($query) or die ("cquery error");	
	  $count = mysql_num_rows($cresult);
	  	    echo "<div class=$adrow[field_name]>
	<label for = $adrow[field_name]>
			 $adrow[field_name]:
			 </label>
			 ";	
    
			  while($cfetch=mysql_fetch_array($cresult))
		   {
			
			echo " <input type='radio' value='$cfetch[category]' name='$adrow[field_name]'/>$cfetch[category]";
		echo "</div>";
		   }
					 
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
        <input type='submit' name='submit' value='submit' />";

}//end isset
		?> 
        <script type="text/javascript">
if (document.location.protocol == 'file:') {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>
       