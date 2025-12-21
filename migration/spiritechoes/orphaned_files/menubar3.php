<html>
<head>
<title>menubar2.gif</title>
<meta http-equiv="Content-Type" content="text/html;">
<style type="text/css">
.menu
{
  display: "block";
}
.submenu
{
  display: "block";
}
</style>

<script language="JavaScript">

arMenu = new Array();

arMenu[0] = new Array("m0",
"sm00",
"sm01",
"sm02"
);

arMenu[1] = new Array("m1",
"sm10",
"sm11",
"sm12"
);

arMenu[2] = new Array("m2",
"sm20",
"sm21",
"sm22"
);
 
function expandMenu(mn)
{
  // hide all submenus
  for(var i = 0; i < arMenu.length; i++)
  {


    for(var j = 1; j < arMenu[i].length; j++)
    {
      document.getElementById(arMenu[i][j]).style.display = "none";
    }
  }

  // show the requested menus submenu''s
  for(var k = 1; k < arMenu[mn].length; k++)
  {
    document.getElementById(arMenu[mn][k]).style.display = "block";
  }

}
function hideMenu(mn)
{
  // hide all submenus
  for(var i = 0; i < arMenu.length; i++)
  {
    for(var j = 1; j < arMenu[i].length; j++)
    {
      document.getElementById(arMenu[i][j]).style.display = "none";
    }
  }
}

</script>
<script language="JavaScript">
<!--
<!-- hide
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])?args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) { img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr) for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}

// stop hiding -->

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>
<body bgcolor="#9999FF" onLoad="MM_preloadImages('menubar_images/Exhibitors_f3.gif','menubar_images/Exhibitors_f2.gif','menubar_images/menubar2_r9_c1_f3.gif','menubar_images/menubar2_r9_c1_f2.gif','menubar_images/menubar2_r11_c1_f3.gif','menubar_images/menubar2_r11_c1_f2.gif','menubar_images/menubar2_r7_c1_f3.gif','menubar_images/menubar2_r7_c1_f2.gif','menubar_images/Home_f3.gif','menubar_images/Home_f2.gif')">
<script language="JavaScript">
  <!-- hide
  if (document.images) {
  Home_f2 = new Image(120 ,29); Home_f2.src = "menubar_images/Home_f2.gif";
  Home_f2 = new Image(120 ,29); Home_f2.src = "menubar_images/Home_f3.gif";
  Home_f1 = new Image(120 ,29); Home_f1.src = "menubar_images/Home.gif";
  Exhibitors_f2 = new Image(120 ,30); Exhibitors_f2.src = "menubar_images/Exhibitors_f2.gif";
  Exhibitors_f2 = new Image(120 ,30); Exhibitors_f2.src = "menubar_images/Exhibitors_f3.gif";
  Exhibitors_f1 = new Image(120 ,30); Exhibitors_f1.src = "menubar_images/Exhibitors.gif";
  menubar2_r5_c1_f2 = new Image(120 ,30); menubar2_r5_c1_f2.src = "menubar_images/menubar2_r5_c1_f2.gif";
  menubar2_r5_c1_f2 = new Image(120 ,30); menubar2_r5_c1_f2.src = "menubar_images/menubar2_r5_c1_f3.gif";
  menubar2_r5_c1_f1 = new Image(120 ,30); menubar2_r5_c1_f1.src = "menubar_images/menubar2_r5_c1.gif";
  menubar2_r6_c1_f2 = new Image(120 ,29); menubar2_r6_c1_f2.src = "menubar_images/menubar2_r6_c1_f2.gif";
  menubar2_r6_c1_f2 = new Image(120 ,29); menubar2_r6_c1_f2.src = "menubar_images/menubar2_r6_c1_f3.gif";
  menubar2_r6_c1_f1 = new Image(120 ,29); menubar2_r6_c1_f1.src = "menubar_images/menubar2_r6_c1.gif";
  menubar2_r7_c1_f2 = new Image(120 ,29); menubar2_r7_c1_f2.src = "menubar_images/menubar2_r7_c1_f2.gif";
  menubar2_r7_c1_f2 = new Image(120 ,29); menubar2_r7_c1_f2.src = "menubar_images/menubar2_r7_c1_f3.gif";
  menubar2_r7_c1_f1 = new Image(120 ,29); menubar2_r7_c1_f1.src = "menubar_images/menubar2_r7_c1.gif";
  menubar2_r9_c1_f2 = new Image(120 ,29); menubar2_r9_c1_f2.src = "menubar_images/menubar2_r9_c1_f2.gif";
  menubar2_r9_c1_f2 = new Image(120 ,29); menubar2_r9_c1_f2.src = "menubar_images/menubar2_r9_c1_f3.gif";
  menubar2_r9_c1_f1 = new Image(120 ,29); menubar2_r9_c1_f1.src = "menubar_images/menubar2_r9_c1.gif";
  menubar2_r11_c1_f2 = new Image(120 ,30); menubar2_r11_c1_f2.src = "menubar_images/menubar2_r11_c1_f2.gif";
  menubar2_r11_c1_f2 = new Image(120 ,30); menubar2_r11_c1_f2.src = "menubar_images/menubar2_r11_c1_f3.gif";
  menubar2_r11_c1_f1 = new Image(120 ,30); menubar2_r11_c1_f1.src = "menubar_images/menubar2_r11_c1.gif";
  }
  // stop hiding -->
  </script>
<table border="0" cellpadding="0" cellspacing="0" width="120">
<!-- fwtable fwsrc="menubar.png" fwbase="menubar2.gif" fwstyle="Generic" fwdocid = "742308039" fwnested="0" -->
  <tr>
   <td><img src="menubar_images/spacer.gif" width="120" height="1" border="0" alt=""></td>
   <td><img src="menubar_images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>

  <tr>
   <td><img name="menubar2_r1_c1" src="menubar_images/menubar2_r1_c1.gif" width="120" height="70" border="0" alt=""></td>
   <td><img src="menubar_images/spacer.gif" width="1" height="70" border="0" alt=""></td>
  </tr>
  <tr>
    <td class="menu"><a href="indexframe.php" target="mainFrame" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','Home','menubar_images/Home_f2.gif','menubar_images/Home_f3.gif',1);" onClick="MM_nbGroup('down','navbar1','Home','menubar_images/Home_f3.gif',1);"><img name="Home" src="menubar_images/Home.gif" width="120" height="29" border="0" alt=""></a></td>
   <td><img src="menubar_images/spacer.gif" width="1" height="29" border="0" alt=""></td>
  </tr>
  <tr>
    <td rowspan="2" class="menu"><a href="artists_images.php" target="mainFrame" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','Exhibitors','menubar_images/Exhibitors_f2.gif','menubar_images/Exhibitors_f3.gif',1);" onClick="MM_nbGroup('down','navbar1','Exhibitors','menubar_images/Exhibitors_f3.gif',1);"><img name="Exhibitors" src="menubar_images/Exhibitors.gif" width="120" height="30" border="0" alt=""></a></td>
   <td><img src="menubar_images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img src="menubar_images/spacer.gif" width="1" height="29" border="0" alt=""></td>
  </tr>
  <tr>
    <td class="menu"><a href="artist_gallery.php" target="mainFrame" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','menubar2_r5_c1','menubar_images/menubar2_r5_c1_f2.gif','menubar_images/menubar2_r5_c1_f3.gif',1);" onClick="MM_nbGroup('down','navbar1','menubar2_r5_c1','menubar_images/menubar2_r5_c1_f3.gif',1);"><img name="menubar2_r5_c1" src="menubar_images/menubar2_r5_c1.gif" width="120" height="30" border="0" alt=""></a></td>
   <td><img src="menubar_images/spacer.gif" width="1" height="30" border="0" alt=""></td>
  </tr>
  <tr>
   <td  class="menu"><a href="location.php" target="mainFrame" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','menubar2_r6_c1','menubar_images/menubar2_r6_c1_f2.gif','menubar_images/menubar2_r6_c1_f3.gif',1);" onClick="MM_nbGroup('down','navbar1','menubar2_r6_c1','menubar_images/menubar2_r6_c1_f3.gif',1);"><img name="menubar2_r6_c1" src="menubar_images/menubar2_r6_c1.gif" width="120" height="29" border="0" alt=""></a></td>
   <td><img src="menubar_images/spacer.gif" width="1" height="29" border="0" alt=""></td>
  </tr>
  <tr>
    <td rowspan="2" class="menu"><a href="proceeds.php" target="mainFrame" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','menubar2_r7_c1','menubar_images/menubar2_r7_c1_f2.gif','menubar_images/menubar2_r7_c1_f3.gif',1);" onClick="MM_nbGroup('down','navbar1','menubar2_r7_c1','menubar_images/menubar2_r7_c1_f3.gif',1);"><img name="menubar2_r7_c1" src="menubar_images/menubar2_r7_c1.gif" width="120" height="29" border="0" alt=""></a></td>
   <td><img src="menubar_images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img src="menubar_images/spacer.gif" width="1" height="28" border="0" alt=""></td>
  </tr>
  <tr>
    <td rowspan="2" class="menu"><a href="history.php" target="mainFrame" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','menubar2_r9_c1','menubar_images/menubar2_r9_c1_f2.gif','menubar_images/menubar2_r9_c1_f3.gif',1);" onClick="MM_nbGroup('down','navbar1','menubar2_r9_c1','menubar_images/menubar2_r9_c1_f3.gif',1);"><img name="menubar2_r9_c1" src="menubar_images/menubar2_r9_c1.gif" width="120" height="29" border="0" alt=""></a></td>
   <td><img src="menubar_images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img src="menubar_images/spacer.gif" width="1" height="28" border="0" alt=""></td>
  </tr>
  <tr>
    <td rowspan="2"><a href="contact.php" target="mainFrame" onMouseOut="MM_nbGroup('out');" onMouseOver="MM_nbGroup('over','menubar2_r11_c1','menubar_images/menubar2_r11_c1_f2.gif','menubar_images/menubar2_r11_c1_f3.gif',1);" onClick="MM_nbGroup('down','navbar1','menubar2_r11_c1','menubar_images/menubar2_r11_c1_f3.gif',1);"><img name="menubar2_r11_c1" src="menubar_images/menubar2_r11_c1.gif" width="120" height="30" border="0" alt=""></a></td>
   <td><img src="menubar_images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img src="menubar_images/spacer.gif" width="1" height="29" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="menubar2_r13_c1" src="menubar_images/menubar2_r13_c1.gif" width="120" height="164" border="0" alt=""></td>
   <td><img src="menubar_images/spacer.gif" width="1" height="164" border="0" alt=""></td>
  </tr>
</table>
</body>
</html>

