<?php

/*
 * @lc app=leetcode.cn id=172 lang=php
 *
 * [172] 阶乘后的零
 */

// @lc code=start
class Solution
{
    /**
     * 原理不懂
     * 规律是：
     * 数字 n 中有 a 个 5，
     * 数字 a 中有 b 个 5，
     * 数字 b 中有 c 个 5，直到为 0
     *
     * 结果就是 a + b + c + ...
     *
     * @param int $n
     *
     * @return int
     */
    public function trailingZeroes($n)
    {
        $res = 0;
        while ($n > 0) {
            $n = floor($n / 5);
            $res += $n;
        }

        return $res;
    }
}
// @lc code=end
