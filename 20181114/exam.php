<?php
/**
 * Created by PhpStorm.
 * User: 李波
 * Date: 2018/11/13
 * Time: 8:37
 */

/*
 * $n int
 * */
function sumn($n) {
         $r=0;
         $n && ($r = (sumn($n - 1) + $n));
          return $r;
      }
  
    
// 31      echo $t->sum(5) . "<br>";
 echo sumn(20);
  



?>

