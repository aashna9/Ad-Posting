 
    <?php /*?>     <?php
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
?><?php */?>