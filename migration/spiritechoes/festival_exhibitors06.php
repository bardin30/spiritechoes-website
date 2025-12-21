<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Sprite Echoes Fine Affordable Art</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<SCRIPT language=JavaScript type="text/javascript">

var width,height
var image,ext
var cond1,cond2
function transferview(image,width,height) {

cond1="width="+(width+20)+"";
cond2="height="+(height+70)+"";

var s1 ="<TITLE>Image</TITLE>"
var s15="<body onBlur=\"self.close();\">"
var s2 ="<CENTER><IMG SRC='"+image+"' BORDER=0><br>"
var s3 ="<a href=# onClick='self.close()'>Close Window</a>"
var s4 ="</CENTER>"
var s5 ="</BODY>"

ImageWindow=window.open(""+image, "newwin"+width,"toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,top=50,left=150,"+cond1+","+cond2);
ImageWindow.document.write(s1+s15+s2+s3+s4+s5)
ImageWindow.document.close()
}

</SCRIPT>
<style type="text/css">
<!--
p {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #009999;
	text-align: left;
	white-space: nowrap;
}
-->
</style>
</head>

<body onResize="location.reload()">
<?php require_once('header.php'); ?>

<table width="100%" border=0 cellpadding=1 cellspacing=0>
  <font face="Arial, Helvetica, sans-serif"> 
  <tr> 
    <td valign="top" width="200px"> <strong>Name</strong> </td>
    <td valign="top" width="140px"> <strong>City</strong> </td>
    <td width="100px" valign="top"><strong>Booth #</strong></td>
    <td align="center"><strong>Media</strong> </td>
  </tr>
  <tr> 
    <td align="left" colspan="4" >
        <p>* Indicates that the artist will be demonstrating their media at the 
          top of every hour<br>&nbsp;&nbsp;during the two day festival. Please check festival 
          boards for time </p>
      </td>
  </tr>
  <tr> 
    <td align="left" colspan="4" > Click on the Exhibitor's name for a sample 
      of their work </td>
  </tr>
  <?php

$filename = "artistlist06.txt"; //here's the filename

$id = fopen($filename, "r"); //open the file
while ($data = fgetcsv($id, filesize($filename),"~")) //start a loop
$table[] = $data; //put each line into its own entry in the $table array
fclose($id); //close file
$num=0;
$count=0;
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
$nonlegal = array(" ", ",", ".", "&", "-", "/", "*");
$info = explode(',',$row[0]);
$name1 = strtolower($info[0]);
$name2 = strtolower($info[1]);
$name1 = str_replace($nonlegal, "", "$name1");
$name2 = str_replace($nonlegal, "", "$name2");
$image = "images/artist06/$name1$name2.jpg"; //make new path equal to this to activate...bds

if (file_exists($image)) { 
   $size = GetImageSize($image); // Read the size
   $width = $size[0];
   $height = $size[1];
   $count++;
   echo "<td><a href=\"javascript:void(0)\" onClick=\"javascript:transferview('$image',$width,$height)\">"; 
   echo "$row[0]</a>";
   //echo " $count "; //counting images lister  !comment when not testing!
   echo "</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
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
