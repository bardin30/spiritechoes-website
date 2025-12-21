<html>
<head>
<title>SiteGuru's Thumbnail Generator</title>
</head>
<body>
<h3>SiteGuru's Thumbnail Generator - Demo File</h3>
<table cellpadding="2" cellspacing="1" border="0" bgcolor="#000080">
<tr bgcolor="#008080">
<th>Original Image</th>
<th>Thumbnail Result</th>
</tr>
<tr bgcolor="#ffffff">
<td><img src="img.jpg" alt="BEFORE - JPEG" title="BEFORE - JPEG" align="top" /></td>
<td><img src="thumbnail.php?gd=1&src=img.jpg&maxw=200" alt="AFTER @ 200 wide - JPEG" title="AFTER @ 200 wide - JPG" /></td>
</tr>
<tr bgcolor="#ffffff">
<td><img src="img.jpg" alt="BEFORE - JPEG" title="BEFORE - JPEG" align="top" /></td>
<td><img src="thumbnail.php?gd=1&src=img.jpg&maxw=100" alt="AFTER @ 100 wide - JPEG" title="AFTER @ 100 wide - JPG" /></td>
<tr bgcolor="#ffffff">
<td><img src="img.jpg" alt="BEFORE - JPEG" title="BEFORE - JPEG" align="top" /></td>
<td><img src="thumbnail.php?gd=1&src=img.jp&maxw=200" alt="AFTER @ Mis-spelled File Name" title="AFTER @ Mis-spelled File Name" /></td>
<tr bgcolor="#ffffff">
<td><img src="straven.png" alt="BEFORE - PNG" title="BEFORE - PNG" align="top" /></td>
<td><img src="thumbnail.php?gd=1&src=straven.png&maxw=150" alt="AFTER @ 150 wide - PNG" title="AFTER @ 150 wide - PNG" /></td>
<tr bgcolor="#ffffff">
<td><img src="logo02.gif" alt="BEFORE - GIF" title="BEFORE - GIF" align="top" /></td>
<td><img src="thumbnail.php?gd=1&src=logo02.gif&maxw=100" alt="AFTER @ 100 wide - GIF" title="AFTER @ 100 wide - GIF" /></td>
<tr bgcolor="#ffffff">
<td><img src="straven.png" alt="BEFORE - PNG" title="BEFORE - PNG" align="top" /></td>
<td><img src="thumbnail.php?gd=2&src=straven.png&maxw=150" alt="AFTER @ 150 wide - PNG using GD2" title="AFTER @ 150 wide - PNG using GD2" /></td>
</tr>
</table>
<p>Script created by <a href="http://www.siteguru.co.uk">Ian Anderson, SiteGuru.co.uk</a> based on the resizer script by <a href="http://www.hotscripts.com/Detailed/18727.html">Teekai</a>. This version enhances the original by incorporating automatic generation of error images. This version create thumbnails based on the supplied Maximum Width parameter only so as to enable control of a fixed width in rescaling the image size.</p>
</body>
</html>