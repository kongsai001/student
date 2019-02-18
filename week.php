<?php
//水仙花
    function hua($n , $m){
        $arr = [];
        for($i = $n; $i <= $m; $i++){
            if(strlen($i) != 3){
                continue;
            }
            $b = floor($i / 100);
            $s = floor(($i % 100) / 10);
            $g = $i %10 ;
            $sum = pow($b , 3) + pow($s , 3) + pow($g , 3);
            if($sum == $i){
                $arr[] = $i;
            }
        }
    return $arr;
    }
//    echo hua(10,10);


    //找出字符串中出现三次的英文字符
    function newStr($str){
        $arr = [];
        $len = strlen($str);
        for($i=0 ; $i<$len; $i++){
            if(isset($arr[$str[$i]])){
                $arr[$str[$i]]++;
            }else{
                $arr[$str[$i]]=1;
            }
            if($arr[$str[$i]]>=3){
                return $str[$i];
            }

        }
    }
//    $str="have you ever gone shopping and";
//    var_dump(newStr($str));
    //回文
    function hw($str){
        $rev = '';
        for($i = strlen($str) - 1; $i >= 0; $i--){
            $rev .= $str[$i];
        }
        return $str == $rev;
    }
//    echo "是回文";
//    echo hw(12321);
    //斐波那契数列
    function func($n){
        $arr = [];
        for($i = 0; $i <$n; $i++){
            if(count($arr) <2){
                $arr[] = 1;
            }
            else{
                $arr[] = $arr[$i - 1] + $arr[$i - 2];
            }
        }
        return $arr;
    }
//    echo func(10);

    //返回数字对应的字母
    function zimu($num,$o = ''){
        if($num <= 26){
            $o = chr($num+96).$o;
            return $o;
        }else{
            $g = floor($num / 26);
            $s = $num % 26;
            if($s == 0){
                $s = 26;
            }
            $o = chr($s+96).$o;
            $num = $g;
            if($s == 26){
                $num--;
            }
            return zimu($num,$o);
        }

    }
//    echo zimu(1);



?>