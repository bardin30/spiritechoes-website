<html>
<head>
<title>menubar7.gif</title>
<meta http-equiv="Content-Type" content="text/html;">
<meta name="description" content="FW MX Generic HTML">
<!--Fireworks MX Generic target.    Created Sat May 21 19:43:44 GMT-0500 (Central Daylight Time) 2005-->

<!--================== BEGIN COPYING THE JAVASCRIPT SECTION HERE =================-->
<script type="text/javascript" src="functions.js"></script>
<!--======================== STOP COPYING THE JAVASCRIPT HERE ========================-->
</head>
<body bgcolor="#9999FF">
<!--The following section is an image or HTML table which reassembles the sliced image in a browser.-->
<!--Copy the table section including the opening and closing table tags, and paste the data where-->
<!--you want the reassembled image to appear in the destination document. -->

<!--======================== BEGIN COPYING THE HTML ==========================-->
  
  <script language="JavaScript">
  <!-- hide 
  if (document.images) {
  n2_f2 = new Image(130 ,35); n2_f2.src = "menubar7_images/2over2.gif";    //home_over
  n2_f1 = new Image(130 ,35); n2_f1.src = "menubar7_images/2.gif";         //home
  n3_f2 = new Image(130 ,35); n3_f2.src = "menubar7_images/3over2.gif";    //festival exhibitors over
  n3_f1 = new Image(130 ,35); n3_f1.src = "menubar7_images/3.gif";         //festival exhibitors
  n4_f2 = new Image(130 ,35); n4_f2.src = "menubar7_images/4over2.gif";    //elebrity
  n4_f1 = new Image(130 ,35); n4_f1.src = "menubar7_images/4.gif";         //elebrity
  n5_f2 = new Image(130 ,35); n5_f2.src = "menubar7_images/5over2.gif";    //showcase
  n5_f1 = new Image(130 ,35); n5_f1.src = "menubar7_images/5.gif";         //showcase
  n6_f2 = new Image(130 ,35); n6_f2.src = "menubar7_images/6over2.gif";    //exhibitors_gallery
  n6_f1 = new Image(130 ,35); n6_f1.src = "menubar7_images/6.gif";         //exhibitors_gallery
  n7_f2 = new Image(130 ,35); n7_f2.src = "menubar7_images/7over2.gif";    //news
  n7_f1 = new Image(130 ,35); n7_f1.src = "menubar7_images/7.gif";         //news
  n8_f2 = new Image(130 ,35); n8_f2.src = "menubar7_images/8over2.gif";    //location
  n8_f1 = new Image(130 ,35); n8_f1.src = "menubar7_images/8.gif";         //location
  n9_f2 = new Image(130 ,34); n9_f2.src = "menubar7_images/9over2.gif";    //proceeds
  n9_f1 = new Image(130 ,34); n9_f1.src = "menubar7_images/9.gif";         //proceeds
  n10_f2 = new Image(130 ,35); n10_f2.src = "menubar7_images/10over2.gif"; //history
  n10_f1 = new Image(130 ,35); n10_f1.src = "menubar7_images/10.gif";      //history
  n11_f2 = new Image(130 ,35); n11_f2.src = "menubar7_images/11over2.gif"; //contact
  n11_f1 = new Image(130 ,35); n11_f1.src = "menubar7_images/11.gif";      //contact
  }
  // stop hiding -->
  </script>
<table width="130" border="0" cellspacing="0" cellpadding="0">
<?php
	
	// get the menu text and links from the csv text database
	$filename = "menuitems.txt"; //here's the filename
	$id = fopen($filename, "r"); //open the file
	while ($data = fgetcsv($id, filesize($filename),"~")) //start a loop
	$table[] = $data; //put each line into its own entry in the $table array
	fclose($id); //close file
	$num=0;
	foreach($table as $row)	{
		if ($row[1]){
			echo "<tr>\n";
			echo "\t<td align=\"right\">\n";
			echo "\t\t<img src=\"colors.php?s=10&text1=$row[0]&text2=$row[1]\"><br>\n"; 
			//echo "\t\t<img src=\"colors.php?s=10&text1=$row[1]\">\n";
			echo "\t</td>\n";
			echo "</tr>\n";
		}
		else {
			echo "<tr>\n";
			echo "\t<td align=\"right\">\n";
			echo "\t\t<img src=\"colors.php?s=10&text1=$row[0]\">\n"; 
			echo "\t</td>\n";
			echo "</tr>\n";		
		}			
	}

?>
</table>



<!--

<table border="0" cellpadding="0" cellspacing="0" width="130">

  <tr>
   <td><img name="n1" src="menubar7_images/1.gif" width="130" height="87" border="0" alt=""></td>
  </tr>
  <tr>
   <td><a href="indexframe.php" target="mainFrame" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('n2','','menubar7_images/2over2.gif',1);"><img name="n2" src="menubar7_images/2.gif" width="130" height="35" border="0" alt="Home"></a></td>
  </tr>
  <tr>
   <td><a href="festival_exhibitors05.php" target="mainFrame" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('n3','','menubar7_images/3over2.gif',1);"><img name="n3" src="menubar7_images/3.gif" width="130" height="35" border="0" alt="Festival Exhibitors"></a></td>
  </tr>
  <tr>
   <td><a href="celebrity05.php" target="mainFrame" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('n4','','menubar7_images/4over2.gif',1);"><img name="n4" src="menubar7_images/4.gif" width="130" height="35" border="0" alt="Celebrity Artist Amando Peña"></a></td>
  </tr>
  <tr>
   <td><a href="showcase05.php" target="mainFrame" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('n5','','menubar7_images/5over2.gif',1);"><img name="n5" src="menubar7_images/5.gif" width="130" height="35" border="0" alt="Showcase Artist Barry Perez"></a></td>
  </tr>
  <tr>
   <td><a href="exhibitors_gallery.php" target="mainFrame" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('n6','','menubar7_images/6over2.gif',1);"><img name="n6" src="menubar7_images/6.gif" width="130" height="35" border="0" alt="Exhibitors Gallery"></a></td>
  </tr>
  <tr>
   <td><a href="news04.php" target="mainFrame" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('n7','','menubar7_images/7over2.gif',1);"><img name="n7" src="menubar7_images/7.gif" width="130" height="35" border="0" alt="In The News"></a></td>
  </tr>
  <tr>
   <td><a href="location05.php" target="mainFrame" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('n8','','menubar7_images/8over2.gif',1);"><img name="n8" src="menubar7_images/8.gif" width="130" height="35" border="0" alt="Location Map"></a></td>
  </tr>
  <tr>
   <td><a href="proceeds.php" target="mainFrame" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('n9','','menubar7_images/9over2.gif',1);"><img name="n9" src="menubar7_images/9.gif" width="130" height="34" border="0" alt="Proceeds Recipients"></a></td>
  </tr>
  <tr>
   <td><a href="history.php" target="mainFrame" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('n10','','menubar7_images/10over2.gif',1);"><img name="n10" src="menubar7_images/10.gif" width="130" height="35" border="0" alt="History"></a></td>
  </tr>
  <tr>
   <td><a href="contact.php" target="mainFrame" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('n11','','menubar7_images/11over2.gif',1);"><img name="n11" src="menubar7_images/11.gif" width="130" height="35" border="0" alt="Contact Us"></a></td>
  </tr>
  <tr>
   <td><img name="n12" src="menubar7_images/12.gif" width="130" height="164" border="0" alt=""></td>
  </tr>
</table>
-->
</body>
</html>
