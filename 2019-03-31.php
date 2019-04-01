<?php
/**
 * Created by PhpStorm.
 * Desc: 有 n 个硬币，其中 1 个为假币，假币重量较轻，你有一把天平，请问，至少需要称多少次能保证一定找到假币?
 * User: renxinqiang
 * Date: 2019/3/31
 * Time: 上午11:10
 */

/**
 * 思路:
 * 将一堆硬币分成三份,取其中两份放到称上,一样重则为第三份里面有假币.
 * 以此类推,便可得出最多次.
 */

$n = 10;// 硬币个数

echo ceil(log($n,3)); // 次数是3的对数,向上取整