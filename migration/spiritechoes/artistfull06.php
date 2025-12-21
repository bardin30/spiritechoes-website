<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Sprite Echoes Fine Affordable Art</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body onResize="location.reload()">
<?php require_once('header.php'); ?>
<!--<?php require_once('04sitefiles/artistlinks04.php'); ?>
-->
<table width="100%" border=0 cellpadding=1 cellspacing=0>
  <font face="Arial, Helvetica, sans-serif">
  <tr>
    <td valign="top" width="200px">
	<strong>Name</strong>
	</td>
    <td valign="top" width="140px">
	<strong>City</strong>
	</td>
    <td width="100px" valign="top"><strong>Booth #</strong></td>
    <td align="center"><strong>Media</strong>
    </td>
  </tr>
    <tr>
	<td align="left" colspan="4" ><font color="#009999" size="-1" >*Indicates 
      that the artist will be demonstrating their media at the top of every hour 
      during the two day festival. Please check festival boards for time. </font> 
    </td>
	</tr>
<?php

$filename = "artistlist06.txt"; //heres the filename

$id = fopen($filename, "r"); //open the file
while ($data = fgetcsv($id, filesize($filename),"~")) //start a loop
$table[] = $data; //put each line into its own entry in the $table array
fclose($id); //close file
$num=0;
foreach($table as $row)
{
$num++;
  if($num % 2 ==0)
  {
    $bgcolor='#f3f3f3';
  }
  else
  {
    $bgcolor='#e3e3e3';
  }
echo "<tr bgcolor=$bgcolor>";
$info = explode(',',$row[0]);
$image = "images/artist/$info[0].jpg";
if (file_exists($image)) {
   //echo "<td><a href='$image'>$row[0]</a></td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
   echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
} else {
   echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
}


echo "</tr>\n";
}

?>
  </font>
</table>
<table width="100%" border="0" cellpadding="12" cellspacing="0">
  <tr>
    <td colspan="2" width="100%" align="center"><font face="Arial" size="4" color="#000066">Spirit</font>
        <font face="Arial" size="4" color="#000066">Echoes</font> <font face="Arial" size="4" color="#9999ff"><br>
        </font> <font face="Arial" size="2" color="#000000"> <strong> P.O. Box
        26701<br>
      Austin, TX 78755<br>
        Phone: (512) 331-8310<br>
        <a href="mailto:melodie@spiritechoes.com">melodie@spiritechoes.com</a></strong></font></td>
  </tr>
</table>
</body>
</html>
