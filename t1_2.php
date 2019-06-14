<?php
/**
 * Author panxu
 * Date   2019/6/14 15:01
 */

class T{

    public  static function t1($a,$b){
        $arrA = explode(" ", $a);
        $arrB = explode(" ", $b);
        //求交集
        $res = array_intersect($arrA,$arrB);
        //重置 key
        $res = array_values($res);
        if(empty($res)){
            return null;
        }else{
            //取第一个
            return $res[0];
        }
    }

    public static function t2($i){
        $i = abs(intval($i));
        if ($i>10000){
            die('请输入<= 10000 的整数');
        }
        //求值
        $arr = self::t2_pro($i);
        if (empty($arr)){
           die("NONE");
        }
        //输出
        $data = [];
        foreach ($arr as $v) {
            $data[] = range($v[0], $v[1] + $v[0] - 1);
        }
        foreach ($data as $k => $v) {
            foreach ($v as $value) {
                echo $value . ' ';
            }
            echo PHP_EOL;
        }
    }

    public static function t2_pro($s){
        $arr = [];
        for ($i = 1; $i < $s; $i++) {
            for ($j = 0; $j < $s; $j++) {
                if (2 * $s == (2 * $i + $j - 1) * $j) {
                    $arr[] = [$i, $j];
                }
            }
        }
        return $arr;
    }
}

//题1
$a = "This is C programming text";
$b = "This2 is a text2 for C2 programming2";
var_dump(T::t1($a, $b));
echo PHP_EOL;
//题2
T::t2(15);



