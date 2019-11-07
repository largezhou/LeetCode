<?php

/*
 * @lc app=leetcode.cn id=53 lang=php
 *
 * [53] 最大子序和
 */

// @lc code=start
class Solution
{
    /**
     * @param int[] $nums
     *
     * @return int
     */
    public function maxSubArray($nums)
    {
        $count = count($nums);
        $max = null;
        for ($i = 0; $i < $count; ++$i) {
            $tmpMax = null;
            $sum = 0;
            for ($j = $i; $j < $count; ++$j) {
                $sum += $nums[$j];
                if (is_null($tmpMax) || ($sum > $tmpMax)) {
                    $tmpMax = $sum;
                }
            }

            if (is_null($max) || ($tmpMax > $max)) {
                $max = $tmpMax;
            }
        }

        return $max;
    }
}
// @lc code=end

var_dump((new Solution())->maxSubArray([-2]));
