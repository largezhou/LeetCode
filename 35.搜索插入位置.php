<?php

/*
 * @lc app=leetcode.cn id=35 lang=php
 *
 * [35] 搜索插入位置
 */

// @lc code=start
class Solution
{
    /**
     * @param int[] $nums
     * @param int   $target
     *
     * @return int
     */
    public function searchInsert($nums, $target)
    {
        $start = 0;
        $end = count($nums) - 1;

        while ($start <= $end) {
            $m = (int) (($end - $start) / 2) + $start;
            $val = $nums[$m];
            if ($val == $target) {
                return $m;
            } elseif ($val < $target) {
                $start = $m + 1;
            } elseif ($val > $target) {
                $end = $m - 1;
            }
        }

        return $start;
    }
}
// @lc code=end
