<?php

/*
 * @lc app=leetcode.cn id=169 lang=php
 *
 * [169] 求众数
 */

// @lc code=start
class Solution
{
    /**
     * @param int[] $nums
     *
     * @return int
     */
    public function majorityElement($nums)
    {
        $count = 0;
        $cur = null;

        foreach ($nums as $val) {
            $cur = $count ? $cur : $val;
            $count += ($cur == $val) ? 1 : -1;
        }

        return $cur;
    }
}
// @lc code=end
