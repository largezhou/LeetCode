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
        if ($x == 0 || $x == 1) {
            return $x;
        }

        $c = floor($x / 2);
        $res = 1;
        for ($i = 1; $i <= $c; $i++) {
            if ($i * $i <= $x) {
                $res = $i;
            } else {
                break;
            }
        }

        return $res;
    }
}
// @lc code=end
