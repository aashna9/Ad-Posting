<?php

 if ($handle = opendir('temp')) {
	 
	 
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != "..")
	  {	  		

          	$thelist .= '<a href="upload/'.$file.'">'.$file.'</a> ('.round((filesize('upload/'.$file) / 1024), 2) . ' Kb)<br />';
          }
       }
  closedir($handle);
  }
  
?>
<p>List of files (files removed hourly):</p>
<p></p>
