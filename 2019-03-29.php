<?php
/**
 * Created by PhpStorm.
 * Desc: 2019-03-29获得n × n表示图像的2D矩阵。将图像旋转90度（顺时针）
 * User: renxinqiang
 * Date: 2019/3/29
 * Time: 下午5:23
 */

$a = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
];

$答案 = [
    [7,4,1],
    [8,5,2],
    [9,6,3],
];

function algorithm($limit, $arr){
    $out = [];
    for ($i=0; $i<$limit; $i++) {
        for($j=$limit-1;$j>=0;$j--){
            $out[$i][$j] = $arr[$j][$i];
        }
    }
    return $out;
}

print_r(algorithm(count($a), $a));