<?php
/**
 * Created by PhpStorm.
 * User: 李波
 * Date: 2018/11/8
 * Time: 8:36
 */
class Solution {
        public:
        int LastRemaining_Solution(int n, int m)
        {
        if(n < 1 || m < 1)
        return -1;
        int last = 0;
        for(int i = 2; i <=n; i++)
        last = (last + m) % i;

        return last;
        }
        };
