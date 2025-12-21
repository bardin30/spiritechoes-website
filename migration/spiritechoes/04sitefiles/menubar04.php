<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Sprite Echoes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
</head>
<body bgcolor="#9999FF">


<table border="0" cellpadding="0" cellspacing="0">
  <tr >
    
<td><img align="right" src="../images/menu/menu_01.gif" border="0" >&nbsp;</td>
  </tr>
  <tr >
    <td><img align="right" src="../images/menu/home.gif" border="0" usemap="#Map" >&nbsp;</td>
  </tr>
  <tr >
    <td><img align="right" src="../images/menu/application05.gif" border="0" usemap="#Map1" >&nbsp;</td>
  </tr>  
  <!-- MENU 0 -->
  <tr class="menu">
    <td><img align="right" src="../images/menu/festivalartists2004.gif" border="0" usemap="#Map2" >&nbsp;</td>
  </tr>
  <tr id="sm00" class="submenu">
    
<td><img align="right" src="../images/menu/featured04.gif" border="0" usemap="#Map6" >
<map name="Map6">
<area shape="rect" coords="22,3,102,25" href="artistmain04.php" target="mainFrame" >
</map>
&nbsp;</td>
  </tr>

  <tr id="sm01" class="submenu">
    <td><img align="right" src="../images/menu/otherartists04.gif" border="0" usemap="#Map7" >&nbsp;</td>
  </tr>
  <tr id="sm02" class="submenu">
    <td><img align="right" src="../images/menu/completeartists04.gif" border="0" usemap="#Map8" >&nbsp;</td>
  </tr>
  <!-- END MENU 0 -->
  <!--
  <tr >
    <td><img align="right" src="images/menu/entertainment.gif" border="0" usemap="#Map3" >&nbsp;</td>
  </tr>
  -->
  <tr >
    <td><img align="right" src="../images/menu/location.gif" border="0" usemap="#Map4" >&nbsp;</td>
  </tr>
  <tr >
    <td><img align="right" src="../images/menu/sponsors.gif" border="0" usemap="#Map11">&nbsp;</td>
  </tr> 
  <tr >
    <td><img align="right" src="../images/menu/proceeds.gif" border="0" usemap="#Map9">&nbsp;</td>
  </tr>  
  <tr >
    <td><img align="right" src="../images/menu/history.gif" border="0" usemap="#Map10">&nbsp;</td>
  </tr>
  <tr >
    <td><img align="right" src="../images/menu/contact.gif" border="0" usemap="#Map5" >&nbsp;</td>
  </tr>

  
  
  <!-- MENU 1 -->
  <tr class="menu">
    <td></td>
  </tr>

  <tr id="sm10" class="submenu">
    <td></td>
  </tr>

  <tr id="sm11" class="submenu">
    <td></td>
  </tr>

  <tr id="sm12" class="submenu">
    <td></td>
  </tr>
  <!-- END MENU 1 -->
  <!-- MENU 2 -->
  <tr class="menu">
    <td></td>
  </tr>

  <tr id="sm20" class="submenu">
    <td></td>
  </tr>

  <tr id="sm21" class="submenu">
    <td></td>
  </tr>

  <tr id="sm22" class="submenu">
    <td></td>
  </tr>

  <!-- END MENU 2 -->
</table>

<map name="Map">
  <area shape="rect" coords="34,8,106,25" href="../indexframe.php" target="mainFrame">
</map>
<map name="Map1">
  <area shape="rect" coords="-2,3,105,25" href="../files/application.php" target="mainFrame">
</map>
<map name="Map2">
  <area shape="rect" coords="14,7,105,24" href="artistmain04.php" target="mainFrame">
</map>
<map name="Map3">
  <area shape="rect" coords="7,8,110,23" href="entertainment04.php" target="mainFrame">
</map>
<map name="Map4">
  <area shape="rect" coords="5,10,112,23" href="../location05.php" target="mainFrame">
</map>
<map name="Map5">
  <area shape="rect" coords="27,10,108,23" href="../contact.php" target="mainFrame">
</map>
<map name="Map7">
  <area shape="rect" coords="15,1,105,13" href="otherartists1_04.php" target="mainFrame" >
</map>
<map name="Map8">
  <area shape="rect" coords="5,3,107,27" href="artistcategory04.php" target="mainFrame" >
</map>
<map name="Map9">
  <area shape="rect" coords="7,10,110,38" href="../proceeds.php" target="mainFrame" >
</map>
<map name="Map10">
  <area shape="rect" coords="30,8,113,25" href="../history.php" target="mainFrame" >
</map>
<map name="Map11">
<area shape="rect" coords="25,9,112,25" href="../sponsors04.php" target="mainFrame">
</map>
</body>
</html>
