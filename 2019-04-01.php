<?php
/**
 * Created by PhpStorm.
 * Desc: 二分查找
 * User: renxinqiang
 * Date: 2019/4/1
 * Time: 下午4:01
 */

$find = 534;// 要查找的值

$arr = [1,2,3,4,534,56,233,10,4234]; // 被查找的数组

sort($arr);// 排序

function midFind($find, $arr){
    $start = 0;
    $end = count($arr) - 1;
    $mid = ceil(count($arr) / 2);
    while($start <= $end){
        if ($find < $arr[$mid]) {
            $mid--;
            $start ++;
        } elseif ($find > $arr[$mid]) {
            $mid++;
            $end--;
        } else {
            return $mid;
        }
    }
}

print_r(midFind($find, $arr));