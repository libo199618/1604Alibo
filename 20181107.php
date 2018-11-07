<?php
echo getUgly(14);

function getUgly($ugly)
{
   if($ugly<=0) return false;
   while($ugly!=1)
   {
       while($ugly%2==0)
       {
           $ugly = $ugly/2;
       }
       while($ugly%3==0){
           $ugly = $ugly/3;
       }
       while($ugly%5==0){
           $ugly = $ugly/5;
       }
       return $ugly==1?true:false;
   }
}





?>