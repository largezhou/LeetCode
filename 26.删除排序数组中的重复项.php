<?php

/*
 * @lc app=leetcode.cn id=26 lang=php
 *
 * [26] 删除排序数组中的重复项
 */

// @lc code=start
class Solution
{
    /**
     * @param int[] $nums
     *
     * @return int
     */
    public function removeDuplicates(&$nums)
    {
        $max = count($nums);
        $pre = null;
        for ($i = 0; $i < $max; ++$i) {
            $val = $nums[$i];
            if ($pre !== $val) {
                $pre = $val;
            } else {
                unset($nums[$i]);
            }
        }
    }
}
// @lc code=end
