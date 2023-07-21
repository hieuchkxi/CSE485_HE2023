<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
$sum = array_sum($arrs);
$product = $arrs[0];
$difference = $arrs[0];
$quotient = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $product *= $arrs[$i];
    $difference -= $arrs[$i];
    $quotient /= $arrs[$i];
}
echo "Tổng các phần tử: " . $sum .PHP_EOL;
echo "Tích các phần tử: " . $product .PHP_EOL;
echo "Hiệu các phần tử: " . $difference .PHP_EOL;
echo "Thương các phần tử: " . $quotient .PHP_EOL;
?>
<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$favorite = ['Anh','Sơn','Thắng','tôi'];
$str ='Màu'.$arrs[0].'là màu yêu thích của'.$favorite[0].',';
$str ='trắng là màu yêu thích của '.$favorite[1].',';
$str ='cam là màu yêu thích của'.$favorite[2].',';
$str ='còn màu yêu thích của tôi là màu'.$arrs[3];
?>
<?php
$arrs=['PHP','HTML','CSS','JS'];

?>


