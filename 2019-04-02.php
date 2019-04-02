<?php
/**
 * Created by PhpStorm.
 * Desc: 最大数: 给定一个非负整形列表,重新排列顺序组成一个最大的整数
 * 例如: [2,34,5,6,91]=> 9165342
 * 注:结果会很大,返回字符串即可
 * User: renxinqiang
 * Date: 2019/4/2
 * Time: 下午2:25
 */

$arr = [2,34,5,6,91,9];
$答案 = 99165342;

function calculate($f, $s){
    $len1 = strlen($f);
    $len2 = strlen($s);
    $f = (string)$f;
    $s = (string)$s;
    $longLen = $len1 >= $len2 ? $len1 : $len2;
    for($i=0;$i<$longLen;$i++){
        if (!isset($f[$i])) {
            return true;
        }
        if (isset($f[$i]) && isset($s[$i]) && $f[$i] > $s[$i]) {
            return true;
        }
    }

}

$num = count($arr);
for ($i=0;$i<$num;$i++) {
    for($j=$num-1;$i<$j;$j--){
        if (calculate($arr[$j], $arr[$j-1])) {
            $tem = $arr[$j];
            $arr[$j] = $arr[$j-1];
            $arr[$j-1] = $tem;
        }
    }
}

echo implode('', $arr);
