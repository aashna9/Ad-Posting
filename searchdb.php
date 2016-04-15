<?php
include("dbconnect.php");

if(isset($_POST['search']));
{
 $sql = $_POST['search'];
$search = explode(" ",$sql);

$i=0;

while($search[$i])
{$j=$i-1;
$table = "";
$cat_query = "select c_name from categories";
$cat_result = mysql_query($cat_query) or die ("$cat_querry err");
while($cat_row = mysql_fetch_array($cat_result))
{$field_query = "select field_name from form_fields where c_id in 


(select c_id from categories where c_name = '$cat_row[0]')";
$field_result = mysql_query($field_query) or die ("$field_querry err");
$field_row = mysql_fetch_array($field_result);
if($field_row)
{
$field_sub = implode(" like '%$search[$i]%' or ",$field_row);
$field = $field_sub." like '%$search[$i]%'";
 if($i==0)
   {
	$query4 = "";
   }
 else
  {$k=$j;
    $query4 = "";
	  while($search[$k])
       {
		    $not_like = implode(" not like '%$search[$k]%' and ",$field_row);
            $query4 = $query4."and ".$not_like." not like '%$search[$k]%'";
			$k--;
	   }
  }
  

$table = $table." or ad_no in (select ad_no1 from $cat_row[0] where $field $query4)";	
}
} // end while catrow


if($i==0)
{
	$query3 = "";
}
else
{
	$query3 = $query3."and ad_title not like '%$search[$j]%' ";
}
$query1 = "select * from ad_details where ad_no in (select ad_no from ad_details where ad_title like '%$search[$i]%' $query3 ";
$query2 = ")";


$query = $query1.$query2.$table;

$result=mysql_query($query) or die ("query error");	
	  $count = mysql_num_rows($result);
 if($count>0)
  {
	  while( $row = mysql_fetch_array($result))
	  {
		  $desc=substr($row['ad_description'],0,155);
 		echo "
          <li>
            <div class='commentMeta'>
			<div class='imag'>
			<img  src='clips/clok4.jpg' height='25px' width='25px'>";
			echo date('d.m.y',strtotime($row['posted_date']));
			echo "
			</div><br>
             <div class='adimg'> <img src='$row[ad_image]'/></div></div>
            <!-- end commentMeta -->
<div class='commentBody'>
              <h3><a href='#'>$row[ad_title]</a></h3>
              <p>$desc...</p>
  <a href='adpage9.php?ad_no=$row[ad_no]' class='buttonhome fl'> more<span>+</span></a>
</div>
";
	  }
  }
$i++;}
}
?>