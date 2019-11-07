<?php

/*
 * @lc app=leetcode.cn id=69 lang=php
 *
 * [69] x 的平方根
 */

// @lc code=start
class Solution
{
    /**
     * @param int $x
     *
     * @return int
     */
    public function mySqrt($x)
    {
        if ($x == 0) {
            return $x;
        }

        $cur = 1;
        while (true) {
            $pre = $cur;
            $cur = ($cur + $x / $cur) / 2;
            if (abs($cur - $pre) < 1e-6) {
                return (int) $cur;
            }
        }
    }
}
// @lc code=end
