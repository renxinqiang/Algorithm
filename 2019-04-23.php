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


$a = [1,3];
$b = [2];

function sum($a, $b){
    $a_count = count($a);
    $b_count = count($b);
    if ($a_count == 0) {
        $a_mid = array_sum($a);
    } elseif ($a_count<2) {
        $a_mid = array_sum($a) / $a_count;
    } else {
        if ($a_count%2==0) {
            $a_mid = ($a[$a_count/2] + $a[$a_count/2-1])/2;
        } else {
            $a_mid = $a[ceil($a_count/2) - 1];
        }
    }

    if ($b_count == 0) {
        $b_mid = array_sum($b);
    } elseif ($b_count<2) {
        $b_mid = array_sum($b) / $b_count;
    } else {
        if ($b_count%2==0) {
            $b_mid = ($b[$b_count/2] + $b[$b_count/2-1])/2;
        } else {
            $b_mid = $b[ceil($b_count/2) - 1];
        }
    }

    if ($a_count && $b_count) {
        return ($a_mid + $b_mid) / 2;
    } elseif ($a_count == 0 && $b_count != 0) {
        return $b_mid;
    } else {
        return $a_mid;
    }

}

echo sum($a, $b);// 10.5