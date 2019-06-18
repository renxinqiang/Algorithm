<?php
/**
 * Created by PhpStorm.
 * Desc: 寻找中位数
 * User: renxinqiang
 * Date: 2019/4/23
 * Time: 下午6:24
 */

/**
 * 例:$a=[1,2] $b=[3,4] 中位数为2.5
 * 例2: $a=[1,3] $b=[3] 中位数为2.6
 */


$a = [1,2];
$b = [3,4];

function sum($nums1, $nums2){
    $array = array_merge($nums1, $nums2);
    sort($array);
    $count = count($array);
    $ou = $ji = false;
    if ($count % 2 == 0) {
        $mid = $count / 2;
        $ou = true;
    } else {
        $mid = floor($count / 2);
        $ji = true;
    }
    return $ou ? ($array[$mid] + $array[$mid-1]) / 2 : $array[$mid];
}

echo sum($a, $b);// 10.5