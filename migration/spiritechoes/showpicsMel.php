<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table border="1" cellspacing="12" cellpadding="0">
<?php
$dir = "./Approval3";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
   $files[] = $filename;
}

sort($files);
$extension = 'jpg';
foreach ($files as $filename) {
   if ($filename != '.' && $filename != '..' && $filename != '..'){
   					
		if (strpos($filename, $extension)){
   		echo "<tr><td><img src='./Approval3/$filename'><td>". "\n";
		echo "<td>$filename</td><tr>";
		}
   }
}
?> 
</table>
</body>
</html>
