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
