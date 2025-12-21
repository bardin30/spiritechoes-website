<?php
  Header("Content-type: image/gif");
  if(!isset($s)) $s=11;
  $size = imagettfbbox($s,0,"fonts/MyriadPro-Regular.otf",$text1);
  $dx = abs($size[2]-$size[0]);
  $dy = abs($size[5]-$size[3]);
  $xpad=9;
  $ypad=9;
  $im = imagecreate($dx+$xpad,$dy+$ypad);
  $blue = imagecolorallocate($im, 0x99,0x99,0xff);
  $black = imagecolorallocate($im,0x99,0x99,0xff);
  $white = imagecolorallocate($im, 255,255,255);
  imagerectangle($im,0,0,$dx+$xpad-1,$dy+$ypad-1,$black);
  //imagerectangle($im,0,0,$dx+$xpad,$dy+$ypad,$white);
  //imagettftext($im, $s, 0, (int)($xpad/2)+2, $dy+(int)($ypad/2), $black, "fonts/MyriadPro-Regular.otf", $text);
  imagettftext($im, $s, 0, (int)($xpad/2), $dy+(int)($ypad/2)-1, $white, "fonts/MyriadPro-Regular.otf", $text1);
  imagettftext($im, $s, 0, (int)($xpad/2), $dy+(int)($ypad/2)-1, $white, "fonts/MyriadPro-Regular.otf", $text2);
  imagejpeg($im);
  imagedestroy($im,'', '1');
?>
