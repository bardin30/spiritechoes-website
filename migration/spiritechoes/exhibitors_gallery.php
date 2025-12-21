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

ImageWindow=window.open(""+image, "newwin"+width,"toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,top=100,left=100,"+cond1+","+cond2);
ImageWindow.document.write(s1+s15+s2+s3+s4+s5)
ImageWindow.document.close()
}

</SCRIPT>
</head>


<body onResize="location.reload()" alink="#0066FF" vlink="#0000FF" link="#0000FF">
<?php require_once('header.php'); ?>
<?php require_once('artist_gallery_links.php'); ?>

<table width="100%" border="0" cellpadding="15" cellspacing="0">
<?php

$filename = "artistlist06.txt"; //here's the filename

$id = fopen($filename, "r"); //open the file
while ($data = fgetcsv($id, filesize($filename),"~")) //start a loop
$table[] = $data; //put each line into its own entry in the $table array
fclose($id); //close file
$num=0;
foreach($table as $row)
	{
	
	$nonlegal = array(" ", ",", ".", "&", "-", "/", "*");
	$info = explode(',',$row[0]);
	$name1 = strtolower($info[0]);
	$name2 = strtolower($info[1]);
	$name1 = str_replace($nonlegal, "", "$name1");
	$name2 = str_replace($nonlegal, "", "$name2");
	$image = "images/artist06/$name1$name2.jpg";
	$thumbnail = "images/artist06_tn/$name1$name2.jpg";
	
	if (file_exists($image) && file_exists($thumbnail)) { 
		$size = GetImageSize($image); // Read the size
		$width = $size[0];
		$height = $size[1];
		$num++;
		if ($num <= $lastImage && $num >= $startImage ) {
			if($num % 2 ==0) { 
				$bgcolor='#FFFFFF'; 
			} else { 
				$bgcolor='#E3E3FF'; 
			}
			
			echo "\n\n<tr bgcolor=$bgcolor>\n";
			echo "\t<td width=\"20%\" align=\"center\" valign=\"middle\">\n";
			//echo "\t\t<FORM METHOD=\"LINK\" ACTION=\"javascript:transferview('$image',$width,$height)\">\n"; 
			//echo "\t\t<INPUT TYPE=\"image\" SRC=\"$thumbnail\" BORDER=\"0\">\n";
			//echo "\t\t</FORM>\n";
			echo "\t\t<a href=\"javascript:void(0)\" onClick=\"javascript:transferview('$image',$width,$height)\">\n";
			echo "\t\t<img src=\"$thumbnail\" border=\"0\">\n";
			//above two lines replace the FORM
			echo "\t</td>\n";
			echo "\t<td width=\"80%\" align=\"left\" valign=\"middle\">\n";
			echo "\t\t<font face=\"Arial, Helvetica, sans-serif\">\n";
			echo "\t\t<strong>$row[0]</strong><br>\n";
			echo "\t\t$row[1]<br>\n";
			echo "\t\tBooth $row[2]<br>\n";
			echo "\t\t$row[3]<br>\n";
			echo "\t\t</font>\n";
			//echo " $num "; //counting images lister  comment when not testing
			echo "</td>\n";
		} 
	}
	echo "</tr>\n\n";
}

?>

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
