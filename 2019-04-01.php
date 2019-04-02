<?php
/**
 * Created by PhpStorm.
 * Desc: 二分查找
 * User: renxinqiang
 * Date: 2019/4/1
 * Time: 下午4:01
 */

$find = 10;// 要查找的值

$arr = [1,2,3,4,534,56,233,10,4234]; // 被查找的数组

sort($arr);// 排序

function midFind($find, $arr){
    $start = 0;
    $end = count($arr) - 1;
    while($start <= $end){
        $mid = $start + ($end - $start) / 2;
        if ($find < $arr[$mid]) {
            $end = $mid - 1;
        } elseif ($find > $arr[$mid]) {
            $start = $mid + 1;
        } else {
            return $mid;
        }
    }
}

print_r(midFind($find, $arr));