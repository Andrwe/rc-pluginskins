<?php
$im = imagecreatefrompng('sticky_notes.png');  
$red = ImageColorAllocate($im, 255, 0, 0); 
$start_x = 2; 
$start_y = 12;
if($count = (int) $_GET['_count']){
  if($count > 99){
    $size = 10;
    $count = '!';
    $start_x = 12;
  }
  else
    $size = 8;
  Imagettftext($im, $size, 0, $start_x, $start_y, $red, 'segoeprb.ttf', $count); 
}
Imagepng($im);
ImageDestroy($im); 
?>