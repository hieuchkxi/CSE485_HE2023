<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
$max = max(array_map('strlen', $array));
$min = min(array_map('strlen', $array));
$max_str = '';
$min_str = '';
foreach ($array as $str) {
    if (strlen($str) == $max) {
        $max_str = $str;
    }
    if (strlen($str) == $min) {
        $min_str = $str;
    }
}
echo "Chuỗi lớn nhất là $max_str, độ dài = $max\n";
echo "Chuỗi nhỏ nhất là $min_str, độ dài = $min\n";
?>