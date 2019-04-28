
<?php
/**
 * Created by PhpStorm.
 * User: renxinqiang
 * Date: 2019/4/28
 * Time: 上午11:41
 */

/**
 * 给定目标值,查找数组中两值之和等于目标值
 * 例: $test=[1,4,69,7,13] 目标值8 顾$test[0] + $test[3] = 8 则返回[0,3]
 */

$test = [1,7,222,3434,8,4,69,9,13];

$target = 8;

function test($arr, $target){
    $count = count($arr);
    for($i=0;$i<$count;$i++){
        for($j=$count-1;$j>$i;$j--){
            if($arr[$j] + $arr[$i] == $target){
                return [$i,$j];
            }
        }
    }
}

print_r(test($test,$target)); // [0,1]
