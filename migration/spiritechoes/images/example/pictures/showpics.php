<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table border="0" cellspacing="2" cellpadding="4">
<?php
$dir = "./";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
   $files[] = $filename;
}

sort($files);
$extension = 'jpg';
foreach ($files as $filename) {
   if ($filename != '.' && $filename != '..' && $filename != '..'){
   					
		if (strpos($filename, $extension)){
   		echo "<tr><td><img src='$filename'><tr><td>". "\n";
		}
   }
}
?> 
</table>
</body>
</html>
