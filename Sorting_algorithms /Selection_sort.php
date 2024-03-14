<?php
function selection_sort(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        if ($minIndex != $i) {
            list($arr[$i], $arr[$minIndex]) = array($arr[$minIndex], $arr[$i]);
        }
    }
}
?>
