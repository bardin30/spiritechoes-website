<table width="100%" border="0" cellpadding="5" cellspacing="0">
<tr><td align="center">
<?php
$pageNum = $_GET['page'];
if ($pageNum == "") { 
	$pageNum = 1; 
}

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
   $numImages++;
}

}
$numPages = ceil($numImages / 4);
$startImage = ($pageNum * 4 - 3);
$lastImage  = ($pageNum * 4);
if ($lastImage > $numImages) {
	$lastImage = $numImages ;
}
echo "Page ";
for ($i = 1; $i <= $numPages; $i++) {
	if ($i == $pageNum){
   		echo "<STRONG><a href=\"exhibitors_gallery.php?page=$i\">$i</a></STRONG> ";
	} else {
   		echo "<a href=\"exhibitors_gallery.php?page=$i\">$i</a> ";
	}
}


?>
</td></tr>
</table>
