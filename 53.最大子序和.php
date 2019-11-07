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
        $maxNum = $nums[0];
        $tmp = $nums[0];

        $count = count($nums);
        for ($i = 1; $i < $count; ++$i) {
            $v = $nums[$i];

            if ($tmp > 0) { // 如果临时值大于 0，则继续往后累加
                $tmp = $tmp + $v;
            } else { // 如果小于 0 了，则没必要往后累加，重新从当前值开始累加
                $tmp = $v;
            }
            $maxNum = $maxNum > $tmp ? $maxNum : $tmp;
        }

        return $maxNum;
    }
}
// @lc code=end

var_dump((new Solution())->maxSubArray([-2, 1, -3, 4, -1, 2, 1, -5, 4]));
