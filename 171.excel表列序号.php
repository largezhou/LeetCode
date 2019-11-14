<?php

/*
 * @lc app=leetcode.cn id=171 lang=php
 *
 * [171] Excel表列序号
 */

// @lc code=start
class Solution
{
    /**
     * 相当于 26 进制转 10 进制.
     *
     * @param string $s
     *
     * @return int
     */
    public function titleToNumber($s)
    {
        $res = 0;
        $max = strlen($s);
        for ($i = 0; $i < $max; $i++) {
            $val = $s[$i];
            $n = ord($val) - 64;
            $res += $n * (26 ** ($max - $i - 1));
        }

        return $res;
    }
}
// @lc code=end
