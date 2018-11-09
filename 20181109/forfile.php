<?php
/**
 * Created by PhpStorm.
 * User: 李波
 * Date: 2018/11/9
 * Time: 13:16
 */


$dir="D:\phpstudy\WWW\xiao5.5/";
        function getdir( $dir,&$arr = array()){
            //static $arr= array();
            if(is_dir($dir)){
                $hadle = @opendir($dir);
                while($file=readdir($hadle) )
                {
                    if(!in_array($file,array('.','..')) )
                    {
                        $dir = $dir.$file."/";
                        array_push($arr,$dir);
                        if(is_dir($dir))
                        {
                            getdir( $dir ,$arr);
                        }
                    }
                }
            }
        
         }
$arr= array();
getdir($dir,$arr);
//var_dump($arr);



