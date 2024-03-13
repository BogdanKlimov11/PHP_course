<?php
function merge(&$arr, $left, $mid, $right) {
    $n1 = $mid - $left + 1;
    $n2 = $right - $mid;

    $L = array_slice($arr, $left, $n1);
    $R = array_slice($arr, $mid + 1, $n2);

    $i = 0;
    $j = 0;
    $k = $left;

    while ($i < $n1 && $j < $n2) {
        if ($L[$i] <= $R[$j]) {
            $arr[$k] = $L[$i];
            $i++;
        } else {
            $arr[$k] = $R[$j];
            $j++;
        }
        $k++;
    }

    while ($i < $n1) {
        $arr[$k] = $L[$i];
        $i++;
        $k++;
    }

    while ($j < $n2) {
        $arr[$k] = $R[$j];
        $j++;
        $k++;
    }
}

function merge_sort(&$arr, $left, $right) {
    if ($left < $right) {
        $mid = (int)(($left + $right) / 2);
        merge_sort($arr, $left, $mid);
        merge_sort($arr, $mid + 1, $right);
        merge($arr, $left, $mid, $right);
    }
}
?>
