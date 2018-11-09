<?php
/**
 * Created by PhpStorm.
 * User: 李波
 * Date: 2018/11/9
 * Time: 13:36
 */
for($i=1;$i<=3;$i++){
    for ($j=1;$j<=3;$j++){
        if ($i != $j){
//            echo  $i.",".$j;
                for($k=1;$k<=3;$k++){

                    if ($k!=$j){
                         echo  $i.$j.$k."///";

                    }
                }
        }


    }

}