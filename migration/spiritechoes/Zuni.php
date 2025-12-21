<html>
<head>
<title>Zuni Examples</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>
<script language="JavaScript" type="text/JavaScript">
<!-- Begin
  var aryText = new Array(13);
  var aryImages = new Array(13);
  var aryTNImages = new Array(13);  
  
  aryText[0] = "pendduranbearfront" ;  
  aryImages[0] = "images/zuni/pendduranbearfront.jpg" ;
  aryTNImages[0] =  "images/zuni/pendduranbearfrontSmall.jpg" ;     
  aryText[1] = "just some random text to see what a larger comment would look like on this page." ;
  aryImages[1] = "images/zuni/duran_v.1111.jpg" ;
  aryTNImages[1] =  "images/zuni/duran_v.1111_TN.jpg" ;    
  aryText[2] = "An even longer comment ..... The code below uses the id of a node passed to the function as a key to an array of strings. It also exits gracefully if innerHTML is not supported. You should be able to pick out how it works and apply it to your site.  Thank you! But now what if I wanted to have it be images, rather than text that you mouse over? And then what if I want to make those images swap....so that the image would swap with and be replaced by another image AND the description below would work?  know that you can have a javascript that when you go over some text, an image, somewhere else on the page, will change... but is there a way to reverse that? As in I want to go over an image and have the TEXT change.... Basically I want to have a menu which consists of, lets say, 'home' 'about' 'links' 'contact' all images (for example) and then there be a spot near there which consists of text which may offer something like a brief description of the page, or a last update..." ;
  aryImages[2] = "images/zuni/enajera hummers.1111.jpg" ;
  aryTNImages[2] =  "images/zuni/enajera hummers.1111_TN.jpg" ;    
  aryText[3] = "fn_aq.1111" ;
  aryImages[3] = "images/zuni/fn_aq.1111.jpg" ;
  aryTNImages[3] =  "images/zuni/fn_aq.1111_TN.jpg" ;   
  aryText[4] = "p.1111" ;
  aryImages[4] = "images/zuni/p.1111.jpg" ;
  aryTNImages[4] =   "images/zuni/p.1111_TN.jpg" ;  
  aryText[5] = "sd.1111" ;
  aryImages[5] = "images/zuni/sd.1111.jpg" ;
  aryTNImages[5] =  "images/zuni/sd.1111_TN.jpg" ;     
  aryText[6] = "sd.2222" ;
  aryImages[6] = "images/zuni/sd.2222.jpg" ;
  aryTNImages[6] =  "images/zuni/sd.2222_TN.jpg" ;      
  aryText[7] = "brachm.1111" ;
  aryImages[7] = "images/zuni/brachm.1111.jpg" ;
  aryTNImages[7] =  "images/zuni/brachm.1111_TN.jpg" ;     
  aryText[8] = "bracs.111" ;
  aryImages[8] = "images/zuni/bracs.111.jpg" ;
  aryTNImages[8] =  "images/zuni/bracs.111_TN.jpg" ;   
  aryText[9] = "bracs.2222" ;
  aryImages[9] = "images/zuni/bracs.2222.jpg" ;
  aryTNImages[9] =  "images/zuni/bracs.2222_TN.jpg" ;   
  aryText[10] = "buck.1111" ;
  aryImages[10] = "images/zuni/buck.1111.jpg" ;
  aryTNImages[10] =  "images/zuni/buck.1111_TN.jpg" ;   
  aryText[11] = "duran_4s.1111" ;  
  aryImages[11] = "images/zuni/duran_4s.1111.jpg" ;
  aryTNImages[11] =  "images/zuni/duran_4s.1111_TN.jpg" ;   
  aryText[12] = "Clip Angel Picture" ;
  aryImages[12] = "images/zuni/clp_angel5.1111.jpg" ;
  aryTNImages[12] = "images/zuni/clp_angel5.1111_TN.jpg" ;    
  
  for (i=0; i < aryImages.length; i++) {
    var preload = new Image();
    preload.src = aryImages[i];
	preload.src = aryTNImages[i];
  }
  function insertTN() {
  	for (i=0; i < aryImages.length; i++) {
		var the_image = "imgTNMain" + i;
		window.document.images[the_image].src = aryTNImages[i];
		}
  }
  function swap(imgIndex) {
    document['imgMain'].src = aryImages[imgIndex];
<!--        if (!imgIndex.innerHTML)
<!--          return;
<!--	document.getElementById("menu_context").innerHTML =
<!--          aryText[imgIndex];
  }
//  End -->
</script>
<body link="#990033" vlink="#990033" alink="#990033" onLoad="swap(0); insertTN();" >
<?php require_once('header.php'); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="142" height="140" valign="middle" bgcolor="#9999FF"><div align="center"><font color="#336666">Click 
any Image for a larger view</font><br>
<font color="#000099" size="-1" face="Arial, Helvetica, sans-serif">
		<a href='' onClick='self.close()'>close window</a><p>
      		</font></div></td>
    <td colspan="2" align="center" valign="middle" bgcolor="#9999FF"><div align="center"> 
        <a href="javascript:swap(0)"><img name="imgTNMain0" src="images/spacer.gif" border="0" ></a>&nbsp;&nbsp; 
        <a href="javascript:swap(1)"><img name="imgTNMain1" src="" border="0" ></a>&nbsp;&nbsp; 
        <a href="javascript:swap(2)"><img name="imgTNMain2" src="" border="0" ></a>&nbsp;&nbsp; 
        <a href="javascript:swap(3)"><img name="imgTNMain3" src="" border="0" ></a>&nbsp;&nbsp; 
        <a href="javascript:swap(4)"><img name="imgTNMain4" src="" border="0" ></a>&nbsp;&nbsp; 
        <a href="javascript:swap(5)"><img name="imgTNMain5" src="" border="0" ></a>&nbsp;&nbsp; 
        <a href="javascript:swap(6)"><img name="imgTNMain6" src="" border="0" ></a>&nbsp;&nbsp; 
        <a href="javascript:swap(12)"><img name="imgTNMain12" src="" border="0" ></a>&nbsp;&nbsp; 
      </div></td>
  </tr>
  <tr> 
    <td height="354" align="center" valign="top" bgcolor="#9999FF"> <p></p><p><a href="javascript:swap(7)"><img name="imgTNMain7" src="" border="0" ></a></p>
      <p><a href="javascript:swap(8)"><img name="imgTNMain8" src="" border="0" ></a></p>
      <p><a href="javascript:swap(9)"><img name="imgTNMain9" src="" border="0" ></a></p>
      <p><a href="javascript:swap(10)"><img name="imgTNMain10" src="" border="0" ></a></p>
      <p><a href="javascript:swap(11)"><img name="imgTNMain11" src="" border="0" ></a></p></td>
    <td colspan="2" align="center" valign="top"><br><img name="imgMain" src=""><br> 
      <br> <br> <font color="#6666CC" size="2" face="Arial, Helvetica, sans-serif">
      <div id="menu_context"></div>
      </font></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
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
