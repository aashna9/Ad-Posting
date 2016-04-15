<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$conn = mysql_connect('localhost', 'root', '');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('ad_posting');
$result = mysql_query('select * from vehicles');
if (!$result) {
    die('Query failed: ' . mysql_error());
}
/* get column metadata */
$i = 0;
while ($i < mysql_num_fields($result))
 {
  $meta = mysql_fetch_field($result, $i);	
    if (!$meta)
	 {
		 echo "No information available<br />\n";
     }
       echo "<pre>
max_length: $meta->max_length
multiple_key:$meta->multiple_key
name:       $meta->name
not_null:   $meta->not_null
numeric:    $meta->numeric
primary_key:$meta->primary_key
table:      $meta->table
type:       $meta->type
unique_key: $meta->unique_key
zerofill:   $meta->zerofill
</pre>";
         
	
    $i++;
}
mysql_free_result($result);
		?> 
     
</body>
</html>
