<?php


FirstNotRepeatingChar($str){

  $arr = str_split($str);
    $cnt = array_count_values($arr);
    foreach($cnt as $k=>$v){
        if($v==1){
            return stripos($str,$k);
        }

    }
    return -1;
}

$str = "adaggwqwewgweqyyjbm";
echo FirstNotRepeatingChar($str);

?>