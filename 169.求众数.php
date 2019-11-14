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
        $min = floor(count($nums) / 2);
        $t = [];
        foreach ($nums as $val) {
            if (!isset($t[$val])) {
                $t[$val] = 0;
            }
            $t[$val]++;
            if ($t[$val] > $min) {
                return $val;
            }
        }
    }
}
// @lc code=end
