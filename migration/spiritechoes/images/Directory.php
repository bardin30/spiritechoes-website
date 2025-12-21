
<html>
<title>Directory Browser</title>
<font face="Arial">
<?php 
// Simple Directory Browser Copyright Gareth Lowe 2002 - gareth@quad-drive.org
// Tried to make it as simple as possible, bear in mind this is one of my first php scripts
// To install, place in the root dir of your webserver ie "/etc/httpd/home/"
// To navigate run the script specifying the directory with the dir function ie :
// http://yourserver.net/dir.php?dir=thediryouwant
//Declare all variables.
//$dirmsg, directory intro message


function sgetimagesize($filename) {
   $ftype_array = array(".gif"=>"1",
                         ".jpg"=>"2",
                         ".jpeg"=>"2",
                         ".png"=>"3",
                         ".swf"=>"4",
                         ".psd"=>"5",
                         ".bmp"=>"6");
   if (is_file($filename)) {
       $fd = @fopen($filename,"r");
       $image_string = fread($fd,filesize($filename));
       $im = ImageCreateFromString($image_string);
       $ftype = "2";
       $gis[0] = ImageSX($im);
       $gis[1] = ImageSY($im);
       $gis[2] = "2";
       $gis[3] = "width={$gis[0]} height={$gis[1]}";
       ImageDestroy($im);
       return $gis_array;
   }
   else { return false; }
}





$dirmsg = "Directory of";
$dir = $_GET['dir'];
$count = 0;

if (eregi("\..", $dir)) {
	$dir = ".";
}

if ($dir == "") {
	$dir = ".";
}

if ($dir !== "."){
	$prevdir = substr($dir, 0, strpos($dir, "/"));
	if ($prevdir == "") {
		$prevdir = ".";
	}
} else {
		$prevdir = ".";
}

echo "<p><b>$dirmsg /$dir</b><br><hr size=\"1\"><br><a href=\"Directory.php?dir=$prevdir\">Parent Directory</a><br>";
$directory = @opendir("$dir");

if ($directory == "") {
	print "<p><b>Error Reading Directory</b><p>";
} else {
	while( $file = readdir( $directory ) ){
		$file_array[] = $file;
	}

	echo"<ul>";
	if ($dir == ".") {
		$dir = "";
	} else {
		$dir = "$dir/";
	}
	foreach( $file_array as $file ){
		if( $file == ".." || $file == "." ){
			continue;
		}
		if (eregi("\.", $file)) {
			
		} else {
			echo"<a href=\"Directory.php?dir=$dir$file\"><img src=\"/images/closed.gif\" border=\"0\" >/$file</a><br>";
		}
		$count++; 
	}
	echo"<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">";
	foreach( $file_array as $file ){
		if( $file == ".." || $file == "." ){
			continue;
		}
		if (eregi("\.", $file)) {
			echo"<tr height=\"100\">";
			if (eregi("\.jpg", $file)){
				
				$size = GetImageSize($file); 
				$width = $size[0]; 
				$height = $size[1];
				echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"$dir$file\">$file</a></td><td>width ($width) height ($height)</td><td><a href=\"$dir$file\"><img src=\"thumbnail.php?gd=2&src=$file&maxw=100\" border=\"0\"></a><br>";
			} elseif (eregi("\.gif", $file)){
				
				$size = GetImageSize($file); 
				$width = $size[0]; 
				$height = $size[1];
				echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"$dir$file\">$file</a></td><td>width ($width) height ($height)</td><td><a href=\"$dir$file\"><img src=\"$file\"  border=\"0\"></a></td>";
			} else {
				echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"$dir$file\">$file</a></td><td bgcolor=\"#EEEEEE\">none</td><td bgcolor=\"#EEEEEE\">not an image file</td>";
			}
		} 
		echo"</tr>";
		$count++; 
	}
	echo"</ul>";
	closedir($directory);	
}
echo"<hr size=\"1\">There are <b>$count</b> Files In this Directory<br>";
?>




</font>
</html>
	
