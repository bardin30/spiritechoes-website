// JavaScript Document

//document.writeln('<p align="center">Your screen resolution is currently set to '
//+ screen.width + ' x ' + screen.height +
//'<br />of which ' + screen.availWidth + ' x ' + screen.availHeight +
//' is available for the browser.');
document.writeln('<p align="center">The actual internal and useable display area of this browser window is<br /> '
+ findLivePageWidth() + ' x ' + findLivePageHeight() + '.</p>');