<?php

/*
 * @lc app=leetcode.cn id=189 lang=php
 *
 * [189] 旋转数组
 */

// @lc code=start
class Solution
{
    /**
     * @param int[] $nums
     * @param int   $k
     *
     * @return null
     */
    public function rotate(&$nums, $k)
    {
        $k = $k % count($nums);
        $this->reverse($nums, 0, count($nums) - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, count($nums) - 1);
    }

    protected function reverse(&$nums, $start, $end)
    {
        while ($start < $end) {
            $t = $nums[$end];
            $nums[$end] = $nums[$start];
            $nums[$start] = $t;
            $start++;
            $end--;
        }
    }
}
// @lc code=end
