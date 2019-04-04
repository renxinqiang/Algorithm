<?php
/**
 * Created by PhpStorm.
 * Desc: 2元买1瓶酒，2个空瓶换1瓶酒，4个瓶盖换1瓶酒，10元能喝多少瓶酒？
 * User: renxinqiang
 * Date: 2019/4/3
 * Time: 下午9:15
 */

/**
 * 不考虑向老板借的情况
 */
$num = 0;
$qian = 10;
$pinggai = 0;
$jiuping = 0;
$mai = 2;

while(true){
    if ($qian<=0 && $jiuping<2 && $pinggai<4) {
        break;
    }
    if ($qian>0) {
        $qian -= $mai;
        $jiuping++;
        $pinggai++;
        $num++;
    }
    if ($jiuping>=2) {
        $num+=floor($jiuping/2);
        $pinggai += floor($jiuping/2);
        $jiuping = floor($jiuping/2) + $jiuping%2;
    }

    if ($pinggai>=4) {
        $num+=floor($pinggai/4);
        $jiuping += floor($pinggai/4);
        $pinggai = floor($pinggai/4) + $pinggai%4;
    }


}
echo $num; // 15瓶