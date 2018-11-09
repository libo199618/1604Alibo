<?php
/**
 * Created by PhpStorm.
 * User: 李波
 * Date: 2018/11/9
 * Time: 9:54
 */



$my_array = array("3","32","321");

//shuffle($my_array);
$topicid="";

foreach($my_array as $key=>$vals){

    $topicid=$my_array[$key].$vals;

}

// 使用 rtrim() 函数从字符串右端删除字符：

//print_r($topicid);
var_dump($topicid);








