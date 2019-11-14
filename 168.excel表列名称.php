<?php

/*
 * @lc app=leetcode.cn id=168 lang=php
 *
 * [168] Excel表列名称
 */

// @lc code=start
class Solution
{
    /**
     * 做了 171 题（即这题的反过来转换）后，
     * 发现这题就是 10 进制转 26 进制.
     *
     * @param int $n
     *
     * @return string
     */
    public function convertToTitle($n)
    {
        $res = '';
        while ($n > 0) {
            $t = ($n % 26) ?: 26;
            $res = chr($t + 64).$res;

            $n = ceil($n / 26) - 1;
        }

        return $res;
    }
}
// @lc code=end
