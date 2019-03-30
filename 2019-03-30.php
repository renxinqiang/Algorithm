<?php
/**
 * Created by PhpStorm.
 * Desc: 19位由0和1组成的字符串；开头必须为0，结尾必须为1；其中不能出现“00”或“111”。问共有多少种？并列举出所有
 * User: renxinqiang
 * Date: 2019/3/30
 * Time: 下午10:01
 */

define('ZERO', '0');
define('ONE', '1');

$out = [];
$first = '0';
$end = '1';
$str = $first;
$base = [ZERO, ONE];
while (true){
    shuffle($base);
    if ($str[strlen($str)-1]==0) {
        $str .= ONE;
    } else {
        if ($str[strlen($str)-1]==1 && $str[strlen($str)-2]==1) {
            $str .= ZERO;
        } else {
            $str .= $base[0];
        }
    }

    if (strlen($str) == 18 && ($str[17] !=1 && $str[16] != 1) ) {
        $str .= $end;
    } elseif (strlen($str) == 18 && ($str[17] ==1 && $str[16] == 1) ) {
        $str = $first;
    }
    if (strlen($str)==19 && !in_array($str, $out)) {
        echo $str.PHP_EOL;
        $str = $first;
        continue;
    }

    if ($str[strlen($str)-1]==1 && $str[strlen($str)-2]==1) {
        $str .= ZERO;
    } else {
        if ($str[strlen($str)-1]==0) {
            $str .= ONE;
        } else {
            $str .= $base[0];
        }
    }
    if (strlen($str) == 18 && ($str[17] !=1 && $str[16] != 1) ) {
        $str .= $end;
    } elseif (strlen($str) == 18 && ($str[17] ==1 && $str[16] == 1) ) {
        $str = $first;
    }
    if (strlen($str)==19 && !in_array($str, $out)) {
        echo $str.PHP_EOL;
        $str = $first;
        continue;
    }
}

