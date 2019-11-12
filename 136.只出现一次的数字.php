<?php

/*
 * @lc app=leetcode.cn id=136 lang=php
 *
 * [136] 只出现一次的数字
 */

// @lc code=start
class Solution
{
    /**
     * @param int[] $nums
     *
     * @return int
     */
    public function singleNumber($nums)
    {
        $res = 0;
        foreach ($nums as $val) {
            $res ^= $val;
        }

        return $res;
    }
}
// @lc code=end
