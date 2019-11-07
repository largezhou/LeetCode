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

        $left = 1;
        $right = floor($x / 2);

        while ($left < $right) {
            // 一定要取偏右的中位，不然会进入死循环
            $mid = $right - floor(($right - $left) / 2);

            if ($mid * $mid > $x) {
                $right = $mid - 1;
            } else {
                $left = $mid;
            }
        }

        return $left;
    }
}
// @lc code=end
