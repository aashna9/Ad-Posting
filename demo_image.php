<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="responsiveslides.css">
  <link rel="stylesheet" href="demo.css">
  <script src="jquery.min.js"></script>
  <script src="responsiveslides.min.js"></script>

<script>
$(function () {



      // Slideshow 3
      $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 540
      });


    });
</script>
</head>

<body>
 <!-- Slideshow 3 -->
    <ul class="rslides" id="slider3">
     <?php 
include("dbconnect.php");
   $sql="SELECT * FROM ad_images where ad_no='a1'";
   echo $sql;
   $result=mysql_query($sql,$link)or die("q err");
   while($row=mysql_fetch_object($result))
   {
   ?>
      <li><img src="<?php echo $row->path; ?>" alt=""></li>
      <?php
      }
      ?>
    </ul>

    <!-- Slideshow 3 Pager -->
    <ul id="slider3-pager">
    <?php 

   $sql1="SELECT * FROM ad_images where ad_no='a1'";
   
   $result1=mysql_query($sql1,$link)or die("q1 err");
   while($row1=mysql_fetch_object($result1))
   {
   ?>
      <li><a href="#"><img width="50"src="<?php echo $row1->path; ?>" alt=""></a></li>
      <?php
      }
      ?>
    </ul>
</body>
</html>