<?php
/**
 * Created by PhpStorm.
 * Desc: 质数筛选
 * User: renxinqiang
 * Date: 2019/4/4
 * Time: 上午11:46
 */

$n = 100;

for($j=$n;$j>0;$j--){
    $flag = true;
    for($i=2;$i<$j;$i++){
        if($j%$i==0){
            $flag = false;
        }
    }
    if ($flag) {
        $out[] = $j;
    }
}
print_r($out);