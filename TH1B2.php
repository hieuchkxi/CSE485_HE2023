<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$favorite = ['Anh','Sơn','Thắng','tôi'];

$str ="Màu". $arrs[0] . "là màu yêu thích của " .$favorite[0]. ",";
$str ="trắng là màu yêu thích của ".$favorite[1].",";
$str ="cam là màu yêu thích của ".$favorite[2].",";
$str ="còn màu yêu thích của tôi là màu " .$arrs[3];

echo $str;
?>